<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Proveedor>
 */
class ProveedorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->name(),
            'address'=>$this->faker->address(),
            'nit'=>$this->faker->numberBetween(13485719,99999999),
            'phone'=>$this->faker->phoneNumber(),
            'status'=>$this->faker->randomElement(['enable','disable'])
        ];
    }
}
