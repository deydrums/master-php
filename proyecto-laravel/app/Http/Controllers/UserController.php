<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Response;
use App\User;
use App\Comment;
use App\Image;
use App\Like;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
       // $this->middleware('verified');
    }

    public function index($search = null){

        if(!empty($search)){
            $users = User::where('nick','LIKE','%'.$search.'%')->orWhere('name','LIKE','%'.$search.'%')->orWhere('surname','LIKE','%'.$search.'%')->orderBy('id','desc')->paginate(5);   
        }else{
            $users = User::orderBY('id','desc')->paginate(5);    
        }
        return view('user.index',[
            'users'=>$users
        ]);
    }

    public function config(){
        return view('user.config');
    }

    public function update(Request $request){



        //Conseguir el usuario identificado 
        $user = \Auth::user();
        $id = \Auth::user()->id;

        //Validacion del formulario
        $validate =$this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'surname' => ['required', 'string', 'max:255'],
            'nick' => ['required', 'string', 'max:255','unique:users,nick,'.$id],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,'.$id],
        ]);
        
        //Recoger los datos del formulario
        $name = $request->input('name');
        $surname = $request->input('surname');
        $nick = $request->input('nick');
        $email = $request->input('email');

        //Asignar nuevos valores al objeto del usuario
        $user->name = $name;
        $user->surname = $surname;
        $user->nick = $nick;
        $user->email = $email;


        //Subir la imagen 
        $image_path = $request->file('image_path');
        if($image_path){
            //Poner nombre unico
            $image_path_name = time().$image_path->getClientOriginalName();
            //Guardar en la carpeta storage/app/users
            Storage::disk('users')->put($image_path_name, File::get($image_path));
            //Seteo el nombre de la imagen en el objeto
            $user->image = $image_path_name;
        }

        //Ejecutar la consulta y cambios en la base de datos     
        $user->update();
        return redirect()->route('config')->with(['message'=>'Usuario actualizado correctamente']);
    }

    public function getImage($filename) {
        $file = Storage::disk('users')->get($filename);
        return new Response($file,200);
    }

    public function profile($id) {
        $user = User::find($id);
        return view('user.profile',['user'=>$user]);
    }


    public function delete($id){
        $user = \Auth::user();
        $comments = Comment::where('user_id',$id)->get();
        $images = Image::where('user_id',$id)->get();
        $likes = Like::where('user_id',$id)->get();


        if($id == $user->id){
            //Eliminar comentarios
            if($comments && count($comments)>= 1){
                foreach($comments as $comment){
                    $comment->delete();
                }
            }
        
            //Eliminar likes
            if($likes && count($likes)>= 1){
                foreach($likes as $like){
                    $like->delete();
                }
            }
            
             //Eliminar imagenes
             if($images && count($images)>= 1){
                foreach($images as $image){
                    Storage::disk('images')->delete($image->image_path);
                    $image->delete();
                }
            }
            
            //Eliminar el usuario 
            $user->delete();

            $message = array('message'=>'El usuario se ha borrado correctamente');
        }else{
            $message = array('message'=>'El usuario no se ha borrado correctamente');
        }

       return redirect()->route('home')->with($message);

    }

}
