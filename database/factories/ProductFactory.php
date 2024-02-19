<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'sku' => Str::random(10),
            'title' => $this->faker->name(),
            'slug' => Str::slug($this->faker->name),
            'image' => Str::slug($this->faker->name),
            'model' => Str::slug($this->faker->name),
            'price' => Str::slug($this->faker->name),
            'quantity' => 10,
            'content' => $this->faker->text(),
            'status' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
