<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produto_vendido extends Model
{
    use HasFactory;

    protected $table = 'produto_vendido';
    protected $primaryKey = 'id_produto_vendido';

    protected $fillable = [
        'id_nota',
        'id_prod',
        'quantidade',
    ];

    public function notaFiscal()
    {
        return $this->belongsTo(NotaFiscal::class, 'id_nota');
    }

    public function produto()
    {
        return $this->belongsTo(Produto::class, 'id_prod');
    }
}
