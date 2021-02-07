<?php

namespace Database\Factories;

use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Order::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'order_id' => $this->faker->numberBetween($min = 1, $max = 200000),
            'customer_id' => $this->faker->numberBetween($min = 1, $max = 99259),
            'product_id' => $this->faker->numberBetween($min = 1, $max = 20),
            'created_at' => $this->faker->dateTimeBetween($startDate = '2020-01-01 00:00:01', $endDate = '2020-12-31 23:59:59', $timezone = null)
        ];
    }
}
