<?php

namespace App\Models;

use Database\Factories\ClientesFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Clientes extends Model
{
    use HasFactory, SoftDeletes;

    protected $factory = ClientesFactory::class;
    protected $fillable = [
        'nome',
        'email',
        'telefone',
        'dataNascimento',
        'endereco',
        'complemento',
        'bairro',
        'cep',
        'dataCadastro'
    ];

    // realacionamento com Pedidos
    public function pedidos()
    {
        return $this->belongsTo(Pedidos::class, 'idCliente', 'id');
    }

}
