<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Regiao extends Model
{
    use HasFactory;

    protected $table = 'regiao';
    protected $primaryKey = 'id_reg';

    protected $fillable = [
        'nome_reg',
        'desc_reg',
    ];

    public function vendedores()
    {
        return $this->hasMany(Vendedor::class, 'id_reg');
    }

    public function pontos()
    {
        return $this->hasMany(Pontos::class, 'id_reg');
    }
}
