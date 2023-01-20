<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Autor extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = "autors";
    protected $fillable = ['pessoa_id','email'];

    function getPessoa(){
        return $this->belongsTo(PessoaModel::class, 'pessoa_id','id');
    }
}
