<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    protected $table = 'produto';
    protected $primaryKey = 'id_prod';

    protected $fillable = [
        'nome_prod',
        'ativo',
        'desc_prod',
        'preco_prod',
        'ativo'
    ];

    public function produtosVendidos()
    {
        return $this->hasMany(ProdutoVendido::class, 'id_prod');
    }
}
