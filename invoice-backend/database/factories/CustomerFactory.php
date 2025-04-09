<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $customerType = ['walk in', 'online'];
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->email,
            'address' => $this->faker->address,
            'customer_type' => $customerType[$this->faker->numberBetween(0, 1)],
            'phone_no' => $this->faker->phoneNumber
        ];
    }
}
