<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\ProductUser;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductUserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ProductUser::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            "product_id" => rand(1,50),
            "user_id" => rand(1,20),
            "numbers" => rand(1,15)
        ];
    }
}
