<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proposal extends Model
{
    function client() {
        return $this->belongsTo('App\Models\Client');
    }
    
    protected $fillable = ['endereço_da_obra', 'valor_total', 'sinal', 'quantidade_de_parcelas', 'valor_das_parcelas', 'data_de_inicio_de_pagamento', 'data_das_parcelas', 'anexar_arquivo', 'status'];

    
}
