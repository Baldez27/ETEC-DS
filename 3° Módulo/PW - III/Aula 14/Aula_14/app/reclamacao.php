<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class reclamacao extends Model
{
    //colocar o nome da tabela do banco
    protected $table = "tbReclamacao";

    //campos da minha tabela
    protected $fillable = ['idRec','PC','Titulo','Descricao', 'Data Criação'];

    public $timestamps=false;


}
