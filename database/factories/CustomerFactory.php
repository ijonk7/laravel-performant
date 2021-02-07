<?php

namespace Database\Factories;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Customer::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'age' => $this->faker->numberBetween($min = 17, $max = 70),
            'address' => $this->faker->address,
            'city' => $this->faker->city,
            'country' => $this->faker->randomElement($array = array ('Argentina','Australia','Brazil','Canada','China','France','Germany','India','United States of America','Indonesia','Italy','Japan','Mexico','Russia','Saudi Arabia','South Africa','South Korea','Turkey','United Kingdom','Qatar'))
        ];
    }
}
