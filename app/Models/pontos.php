<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pontos extends Model
{
    use HasFactory;

    protected $table = 'pontos';
    protected $primaryKey = 'id_pon';

    protected $fillable = [
        'id_reg',
        'nome_pon',
        'desc_pon',
        'endereco_pon',
    ];

    public function regiao()
    {
        return $this->belongsTo(Regiao::class, 'id_reg');
    }
}
