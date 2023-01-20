<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PessoaModel extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = "pessoas";
    protected $fillable = ['nome','nivelacademico_id','data_nasc'];

    function getNivel(){
        return $this->belongsTo(NivelAcademico::class, 'nivelacademico_id', 'id');
    }
}
