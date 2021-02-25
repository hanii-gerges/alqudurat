<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Model;
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
            'category_id' => Category::all()->random()->id,
            'title' => $this->faker->name(5),
            'description' => $this->faker->text(10),
            'image' => $this->faker->name(3)
        ];
    }
}
