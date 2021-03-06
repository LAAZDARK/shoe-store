<?php

namespace Database\Factories;

// use App\Models\User;
use App\Models\Admin;
use App\Models\Product;
use Illuminate\Support\Str;
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
            'title' => $this->faker->word,
            'description' => $this->faker->paragraph,
            'price' => $this->faker->numberBetween(550, 1600),
            'category' =>  $this->faker->randomElement(['Dama', 'Caballero', 'Niño', 'Niña']),
            'brand' => $this->faker->randomElement(['ERMENEGILDO', 'ALEXANDER MCQUEEN', 'HUGO BOSS', 'OFF-WHITE', 'BALENCIAGA']),
            'model' => Str::random(5),
            'image' => $this->faker->randomElement(['assets/img/product/1.webp', 'assets/img/product/2.webp', 'assets/img/product/3.webp', 'assets/img/product/4.webp']),
            'status' => $this->faker->randomElement([Product::STATUS_TRUE, Product::STATUS_FALSE]),
            'type' =>  $this->faker->randomElement(['Tenis', 'Zapato casual', 'Bota', 'Botin', 'Calzado de protección']),
            'admin_id' => Admin::all()->random()->id
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
