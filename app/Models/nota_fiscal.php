<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nota_fiscal extends Model
{
    use HasFactory;

    protected $table = 'nota_fiscal';
    protected $primaryKey = 'id_nota';

    protected $fillable = [
        'id_cli',
        'id_vend',
    ];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'id_cli');
    }

    public function vendedor()
    {
        return $this->belongsTo(Vendedor::class, 'id_vend');
    }

    public function produtosVendidos()
    {
        return $this->hasMany(ProdutoVendido::class, 'id_nota');
    }
}
