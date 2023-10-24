<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Modelo;

class ModeloController extends Controller
{
    //

    function getModelosPorMarca(Request $request) {
        $modelos = Modelo::where('id_marca', $request->id_marca)->get();
        return $modelos;
    }
}
