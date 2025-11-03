<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Resp_Veiculo;

class Veiculo extends Model
{
    use HasFactory;

    protected $table = 'veiculo';
    protected $primaryKey = 'id_veiculo';

    protected $fillable = [
        'modelo_veiculo',
        'placa_veiculo',
        'desc_veiculo',
        'ativo'
    ];

    public function responsaveis()
    {
        return $this->hasMany(Resp_Veiculo::class, 'id_veiculo');
    }
}
