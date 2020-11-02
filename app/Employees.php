<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employees extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'nome', 'cargo', 'email', 'telefone', 'admissao'
    ];
    
}

