<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resp_Veiculo extends Model
{
    use HasFactory;

    protected $table = 'resp_veiculo';
    protected $primaryKey = 'id_resp_veiculo';

    protected $fillable = [
        'id_veiculo',
        'id_vend',
        'data',
    ];

    public function veiculo()
    {
        return $this->belongsTo(Veiculo::class, 'id_veiculo');
    }

    public function vendedor()
    {
        return $this->belongsTo(Vendedor::class, 'id_vend');
    }
}
