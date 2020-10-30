<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{

    function proposals() {
        return $this->hasMany('App/Models/Proposal');
    }
    
    protected $fillable = ['user_id','razao_social','nome_fantasia','cnpj','endereco','email','telefone','nome_do_responsavel','cpf','celular'];

    
}
