<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Emprestimo extends Model
{
    protected $table = 'emprestimo';

    protected $fillable = [
        'id_usuario',
        'id_responsavel',
        'id_carrinho',
        'data_retirada',
        'data_devolucao',
        'finalidade',
        'status',
    ];

    public $timestamps = false;

    protected $casts = [
        'data_retirada' => 'datetime',
        'data_devolucao' => 'datetime',
    ];
}
