<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Laboratorio extends Model
{
    //colocar o nome da tabela do banco
    protected $table = "tbLab";

    //campos da minha tabela
    protected $fillable = ['idLab','Lab'];

    public $timestamps=false;

    

}
