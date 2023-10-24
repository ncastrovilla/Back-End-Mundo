<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Marca;

class MarcaController extends Controller
{
    //

    function getMarcas() {
        $marcas = Marca::All();
        return $marcas;
    }
}
