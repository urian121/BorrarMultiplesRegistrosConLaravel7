<?php

namespace App\Http\Controllers;

use DB;
use App\Comidas;
use Illuminate\Http\Request;

class ComidasController extends Controller
{


public function comidas(){
    $comidas = Comidas::orderBy('id', 'DESC')->get();
    return view('comidas', compact('comidas')); 
}

public function comidasconAjax(){
    $comidas = Comidas::orderBy('id', 'DESC')->get();
    return view('comidasAjax', compact('comidas')); 
}


public function DeleteMultiple(Request $request){

    $deletes = $request->borrarRegistros;
    //return $deletes;

    foreach ($deletes as $delete) {
        DB::table('Comidas')->where('id',$delete)->delete();
    } 
        
    return back();
}




public function borradoMultiplesAjax(Request $request){

if($request->ajax()){
    $deletes = $request->borrarRegistros;
     return response()->json([
        'mensaje'=> 'El Profesor ('.$deletes.') fue Actualizado Correctamente.'
    ]);
     

    foreach ($deletes as $delete) {
        DB::table('Comidas')->where('id',$delete)->delete();
    } 
    return back(); 
    }
}



}
