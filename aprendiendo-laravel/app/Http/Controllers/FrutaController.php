<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;
class FrutaController extends Controller
{
    public function index(){
        $frutas = DB::table('frutas')
            ->orderBy('id','desc')
            ->get();
        return view('fruta.index',array(
            'frutas' => $frutas
    ));
    }

    public function detail($id){
        $fruta = DB::table('frutas')->where('id','=',$id)->first();
        return view('fruta.detail',array(
            'fruta' => $fruta

        ));
    }

    public function create(){

        return view('fruta.create');
    }
    public function save(Request $request){
        //guardar el registro
        $fruta = DB::table('frutas')->insert(array(
            'nombre' => $request->input('nombre'),
            'descripcion' => $request->input('descripcion'),
            'precio' => $request->input('precio'),
            'fecha' => date('Y-m-d')
        ));

        return redirect()->action('FrutaController@index')->with('status','Fruta creada correctamente');
    }

    public function delete($id){
        //Borrar registros
        $fruta = DB::table('frutas')->where('id',$id)->delete();
        return redirect()->action('FrutaController@index')->with('status','Fruta borrada correctamente');
    }
}
