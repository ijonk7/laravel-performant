<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->randomElement($array = array ('Knife','Air Conditioner','Printer','TV','Laptop','CCTV','DVD Player','Earphone','Clothes','Handphone','Biscuits','Shoes','Pen','Comic','Cookbook','Refrigerator','Microwave','Hat','Pants','Watches')),
            'qty' => $this->faker->numberBetween($min = 1, $max = 500),
            'price' => $this->faker->numberBetween($min = 10000, $max = 20000000)
        ];
    }
}
