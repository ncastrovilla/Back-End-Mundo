<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Dispositivo;

class DispositivoController extends Controller
{
    //
    function getDispositivos(Request $request) {
        $dispositivo = Dispositivo::with('bodega', 'modelo.marca')
        ->where(function ($query) use($request){
            if($request->id_bodega)
            return $query->where('id_bodega',$request->id_bodega);
        })->where(function ($query) use($request){
            if($request->id_marca)
            return $query->where('id_marca',$request->id_marca);
        })->where(function ($query) use($request){
            if($request->id_modelo)
            return $query->where('id_modelo',$request->id_modelo);
        })->get();
        
        return $dispositivo;
    }
    
}
