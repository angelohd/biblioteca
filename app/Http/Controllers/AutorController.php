<?php

namespace App\Http\Controllers;

use App\Models\Autor;
use App\Models\NivelAcademico;
use App\Models\PessoaModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class AutorController extends Controller
{
    function listarautores()
    {
        $niveis = NivelAcademico::orderBy('nivel')->get();
        $autores = Autor::get();
        return view("in.autor.index", ['autores' => $autores, 'niveis' => $niveis]);
    }

    function addautor(Request $request)
    {
        $pessoa = new PessoaModel();
        $pessoa->nome = $request->nome;
        $pessoa->data_nasc = $request->data_nasc;
        $pessoa->nivelacademico_id = $request->nivelacademico_id;
        $pessoa->save();
        $id = $pessoa->id;

        $autor = new Autor();
        $autor->pessoa_id = $id;
        $autor->email = $request->email;
        $autor->save();

        return Redirect::back();
    }
}
