<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'nome', 'cargo', 'email', 'telefone', 'admissao', 'companies_id'
    ];
    
}

