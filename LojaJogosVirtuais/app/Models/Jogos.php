<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jogos extends Model
{
    protected $fillable =[
        "Nome",
        "Preco",
        "Tamanho",
        "Lancamento",
        "Comprado"
    ];
}
