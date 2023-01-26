<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Livro extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = "livros";
    protected $fillable = ['categoria_id','autor_id','titulo','resumo','edicao','ano_publicado','capa','caminho_livro'];

    function getCategoria(){
        return $this->belongsTo(Categoria::class, 'categoria_id', 'id');
    }
    function getAutor(){
        return $this->belongsTo(Autor::class, 'autor_id', 'id');
    }
}
