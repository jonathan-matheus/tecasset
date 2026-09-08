<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    protected $fillable = [
        'patrimonio',
        'tipo',
        'numero_serie',
        'status',
        'departamento',
        'localizacao_atual',
        'responsavel_id',
    ];

    public function responsavel()
    {
        return $this->belongsTo(User::class, 'responsavel_id');
    }
}

