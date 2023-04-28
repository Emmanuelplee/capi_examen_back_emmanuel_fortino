<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
// use App\Models\UserDomicilio;

class UserDomicilioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $user_domicilio = [
            'domicilio' => $this->faker->streetAddress,
            'numero_exterior' => $this->faker->buildingNumber,
            'colonia' => $this->faker->citySuffix,
            'cp' => $this->faker->postcode,
            'ciudad' => $this->faker->city,
        ];

        return array_merge($user_domicilio);
    }
}
