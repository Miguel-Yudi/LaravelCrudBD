<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendedor extends Model
{
    use HasFactory;

    protected $table = 'vendedor';
    protected $primaryKey = 'id_vend';

    protected $fillable = [
        'id_reg',
        'nome_vend',
        'endereco_vend',
        'nasc_vend',
        'email_vend',
        'tel_vend',
        'ativo'
    ];
    
    public function regiao()
    {
        return $this->belongsTo(Regiao::class, 'id_reg');
    }

    public function notasFiscais()
    {
        return $this->hasMany(NotaFiscal::class, 'id_vend');
    }

    public function responsaveisVeiculo()
    {
        return $this->hasMany(RespVeiculo::class, 'id_vend');
    }
}
