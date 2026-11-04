<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Carrinho extends Model
{
    protected $table = 'carrinho';

    public $timestamps = false;

    protected $fillable = [
        'identificacao',
        'localizacao',
        'quantidade_notebooks',
    ];
}
