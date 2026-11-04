<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Responsavel extends Model
{
    protected $table = 'responsavel';
    public $timestamps = false;
    protected $fillable = ['nome', 'matricula'];
}