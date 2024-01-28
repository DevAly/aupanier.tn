<?php


namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\OrderProducts;

class OrderProductsFactory extends Factory
{
    protected $model = OrderProducts::class;

    public function definition()
    {
        return [
            // Assuming 'order_id' and 'product_id' will be passed when using the factory.
            'variant_id' => null,
            'quantity'   => $this->faker->numberBetween(1, 5),
            'price'      => $this->faker->randomFloat(2, 10, 500),
            // Add any extra attributes you may need.
        ];
    }
}
