<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $table = 'cliente';
    protected $primaryKey = 'id_cli';

    protected $fillable = [
        'nome_cli',
        'endereco_cli',
        'nasc_cli',
        'email_cli',
        'tel_cli'

    ];

    public function notasFiscais()
    {
        return $this->hasMany(NotaFiscal::class, 'id_cli');
    }
}
