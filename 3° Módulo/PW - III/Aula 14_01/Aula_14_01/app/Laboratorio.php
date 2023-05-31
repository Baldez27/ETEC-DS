<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Laboratorio extends Model
{
    //colocar o nome da tabela do banco
    protected $table = "tbLab";

    //campos da minha tabela
    protected $fillable = ['idLab','Lab'];

    public $timestamps=false;

    public function laboratorio()
    {
        return $this->hasMany(reclamacao::class, 'idLab');
    }
    

}
