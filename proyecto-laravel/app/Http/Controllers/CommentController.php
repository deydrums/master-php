<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
class CommentController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        $this->middleware('verified');  
    }
    
    public function save(Request $request){
        //Validacion
        $validator = $this->validate($request, [
            'image_id' => ['integer','required'],
            'content' => ['string','required']

        ]);
        //Recoger datos del formulario
        $user = \Auth::user();
        $image_id = $request->input('image_id');
        $content = $request->input('content');
        
        //Asignar valores a nuevo objeto a guardar
        $comment = new Comment();
        $comment->user_id = $user->id;
        $comment->image_id = $image_id;
        $comment->content = $content;
        //Guardar en la base de datos
        $comment->save();
        //Redireccion
        return redirect()->route('image.detail',['id' => $image_id])->with([
            'message' => 'Has publicado tu comentario correctamente.'
        ]);
    }

    public function delete($id){
        //Conseguir los datos del usuario indentificado
        $user = \Auth::user();

        //Conseguir objeto del comentario
        $comment = Comment::find($id);

        //Comprobar si soy el dueño del comentario o de la Publicacion
        if($user && ($comment->user_id == $user->id) || $comment->image->user_id == $user->id){
            $comment->delete();
            return redirect()->route('image.detail',['id' => $comment->image->id])->with([
                'message' => 'Comentario eliminado correctamente.'
            ]);
        }else{
            return redirect()->route('image.detail',['id' => $comment->image->id])->with([
                'message' => 'El comentario no se ha eliminado.'
            ]);
        }
    }
}
