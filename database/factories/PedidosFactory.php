<?php

namespace Database\Factories;

use App\Models\Clientes;
use App\Models\Pedidos;
use App\Models\Produtos;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pedidos>
 */
class PedidosFactory extends Factory
{
    protected $model = Pedidos::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'idCliente' => function () {
                return Clientes::all()->random()->id;
            },
            'idProduto' => function () {
                return Produtos::all()->random()->id;
            },
            'dataCriacao' => $this->faker->dateTimeThisMonth(),
        ];
    }
}
