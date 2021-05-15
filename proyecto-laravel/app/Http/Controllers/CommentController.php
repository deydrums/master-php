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
}
