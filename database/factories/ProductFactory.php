<?php

namespace Database\Factories;

use App\Models\Category;
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
            'name' => $this->faker->word,
            'description' => $this->faker->sentence,
            'price' => $this->faker->numberBetween(50, 1000),
            'quantity' => $this->faker->numberBetween(5, 20),
            'discount' => $this->faker->numberBetween(5, 20),
            'category_id' => $this->faker->numberBetween(1, 5),
            'status' => 1,

        ];
    }
}
