<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class reclamacao extends Model
{
    //colocar o nome da tabela do banco
    protected $table = "tbReclamacao";

    //campos da minha tabela
    protected $fillable = ['idRec','PC','Titulo','Descricao', 'Data Criação'];

    public $timestamps=false;

    

}
