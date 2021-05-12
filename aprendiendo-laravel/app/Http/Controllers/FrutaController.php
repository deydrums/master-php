<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;
class FrutaController extends Controller
{
    public function index(){
        $frutas = DB::table('frutas')->get();
        return view('fruta.index',array(
            'frutas' => $frutas
    ));
    }
}
