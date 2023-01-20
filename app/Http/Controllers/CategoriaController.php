<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CategoriaController extends Controller
{
    function listarcategorias(){
        $categorias = Categoria::orderBy('categoria')->get();
        return view("in.categoria.index",['categorias'=>$categorias]);
    }

    function addcategoria(Request $request){
        $categoria = new Categoria();
        $categoria->categoria = $request->categoria;
        $categoria->save();

        return Redirect::back();
    }
}
