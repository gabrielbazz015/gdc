<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Chave extends Model
{
    protected $table = 'chave';
    public $timestamps = false;
    protected $fillable = ['identificacao', 'status', 'id_carrinho'];
}
