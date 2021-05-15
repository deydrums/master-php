<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Like;

class LikeController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        $this->middleware('verified');  
        }

    public function like($image_id){
        //Recoger datos del usuario y la imagen
        $user = \Auth::user();
        //Condicion para ver si ya existe el like
        $isset_like = Like::where('user_id',$user->id)->where('image_id',$image_id)->count();
        var_dump($isset_like);
        if ($isset_like == 0) {
            $like = new Like();
            $like->user_id = $user->id;
            $like->image_id = (int)$image_id;
            //Guardar 
            $like->save();
            return response()->json([
                'like' => $like
            ]);

        }else{
            return response()->json([
                'message' => 'El like ya existe'
            ]);
        }
            
    }

    public function dislike($image_id){

    }
}
