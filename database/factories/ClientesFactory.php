<?php

namespace Database\Factories;

use App\Models\Clientes;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Clientes>
 */
class ClientesFactory extends Factory
{
    protected $model = Clientes::class;


    /**
     * Get a new Faker instance.
     *
     * @return \Faker\Generator
     */
    public function withFaker()
    {
        return \Faker\Factory::create('pt_BR');
    }

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nome' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'telefone' => $this->faker->phoneNumber,
            'dataNascimento' => $this->faker->date('Y-m-d'),
            'endereco' => $this->faker->address,
            'complemento' => $this->faker->optional()->secondaryAddress,
            'bairro' => $this->faker->citySuffix,
            'cep' => $this->faker->postcode,
            'dataCadastro' => $this->faker->date('Y-m-d H:i:s'),
        ];
    }
}
