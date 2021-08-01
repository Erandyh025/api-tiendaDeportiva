<?php

namespace App\Http\Controllers;
use App\Models\productos;
use Illuminate\Http\Request;

class productosController extends Controller
{

    public function list(){
        return productos::all();
    }
}
