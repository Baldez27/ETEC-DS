<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    //colocar o nome da tabela do banco
    protected $table = "tbContato";

    //campos da minha tabela
    protected $fillable = ['idContato','Nome','Tel','Email'];

    public $timestamps=false;

    

}
