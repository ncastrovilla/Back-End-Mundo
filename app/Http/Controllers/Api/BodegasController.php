<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bodega;

class BodegasController extends Controller
{
    //
    function getBodegas() {
        $bodegas = Bodega::get();
        return $bodegas;
    }
}
