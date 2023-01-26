<?php

namespace App\Http\Controllers;

use App\Models\Autor;
use App\Models\Categoria;
use App\Models\Edicao;
use App\Models\Livro;
use Illuminate\Http\Request;

class ControllerLivro extends Controller
{
    function listlivro()
    {
        $livros = Livro::paginate(10);
        return view("in.livro.index", ['livros' => $livros]);
    }
    function createlivro()
    {
        $categorias = Categoria::orderBy('categoria')->get();
        $autores = Autor::join('pessoas', 'autors.pessoa_id', 'pessoas.id')
            ->select('pessoas.*', 'autors.pessoa_id', 'autors.id as idautor')
            ->orderBy('pessoas.nome')
            ->get();
        $edicaos = Edicao::get();

        return view("in.livro.create", ['categorias' => $categorias, 'autores' => $autores, 'edicaos' => $edicaos]);
    }

    function salvarlivro(Request $request)
    {
        $savecapaok = 0;
        $savelivrook = 0;
        $novonomecapa = null;
        $novonomelivro = null;

        $extcapa = ["pgn", "jpeg", "jpg"];
        $extension = $request->capa->extension();
        $extensionlivro = $request->caminho_livro->extension();


        $categoria = Categoria::where('id', $request->categoria_id)->first();
        $autor = Autor::join('pessoas', 'autors.pessoa_id', 'pessoas.id')
            ->where('autors.id', $request->autor_id)
            ->select('pessoas.*', 'autors.pessoa_id')->first();
        $edicaos = Edicao::where('id', $request->edicao)->first();

        //save capa

        if (in_array($extension, $extcapa)) {
            $tilulo = $request->titulo;
            $nomeautor = $autor->getPessoa->nome;
            $edicao = $edicaos->edicao;
            $ano_publicadoo = $request->ano_publicado;
            $nomecapa = "$tilulo-$nomeautor-$edicao-$ano_publicadoo";

            $novonomecapa = str_replace(" ", "-", $nomecapa);
            $savecapaok = 1;
            //$request->capa->storeAs('upload/capa/', "$novonome.$extension");

        } else {
            return "erro oa fazer ulplaod da capa do livro";
        }

        //livro

        if ($extensionlivro == "pdf" || $extensionlivro == "PDF") {
            $tilulo = $request->titulo;
            $nomeautor = $autor->getPessoa->nome;
            $edicao = $edicaos->edicao;
            $ano_publicadoo = $request->ano_publicado;
            $nomelivro = "$tilulo-$nomeautor-$edicao-$ano_publicadoo";

            $novonomelivro = str_replace(" ", "-", $nomelivro);
            $savelivrook = 1;
        } else {
            return "erro oa fazer ulplaod do livro";
        }


        if ($savelivrook == 1 && $savecapaok == 1) {
            $request->capa->storeAs('upload/capa/', "$novonomelivro.$extension");
            $request->caminho_livro->storeAs('upload/livros/', "$novonomecapa.$extensionlivro");
        }


        Livro::create([
            'categoria_id' => $request->categoria_id,
            'autor_id' => $request->autor_id,
            'titulo' => $request->titulo,
            'resumo' => $request->resumo,
            'edicao' => $request->edicao,
            'ano_publicado' => $request->ano_publicado,
            'capa' => $request->capa,
            'caminho_livro' => $request->caminho_livro
        ]);

        return redirect()->route('biblioteca.livro.listlivro');
    }
}
