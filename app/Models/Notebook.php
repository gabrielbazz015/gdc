<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notebook extends Model
{
    protected $table = 'notebook';
    public $timestamps = false;
    protected $fillable = ['patrimonio', 'modelo', 'status', 'id_carrinho'];
}
