<?php

// ProductOrderFactory.php

namespace Database\Factories;

use App\Models\ProductOrder;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Carbon\Carbon;
use App\Models\User; // Assuming the User model exists in this namespace

class ProductOrderFactory extends Factory
{
    protected $model = ProductOrder::class;

    public function definition()
    {
        // Assuming the User factory exists and can be used
        // If a user is required for the order, create or fetch one
        $user = User::factory()->create();

        return [
            'user_id'    => $user->id,
            'name'       => $user->name,
            'email'      => $user->email,
            'phone'      => $this->faker->phoneNumber,
            'country'    => 'Tunisia',
            'state'      => 'Ariana',
            'city'       => 'Ariana',
            'zipcode'    => $this->faker->postcode,
            'address'    => $this->faker->streetAddress,
            'message'    => $this->faker->text(200),
            'total_amount' => $this->faker->numberBetween(100, 1000),
            'payment_gateway' => 'stripe',
            'status' => $this->faker->randomElement(['pending', 'in_progress', 'complete', 'cancel']),
            'payment_status'=> $this->faker->randomElement(['success', 'pending', 'failed']),
            'checkout_type' => 'standard',
            'payment_track' => Str::random(20),
            'order_details' => '[]', // Placeholder for cart data
            'payment_meta'  => null,
            'selected_shipping_option' => 'standard',
            'created_at'    => Carbon::now(),
            'updated_at'    => Carbon::now()
        ];
    }

    // If additional operations should be done after order creation
    public function configure()
    {
        return $this->afterCreating(function (ProductOrder $order) {
            // Create associated OrderProducts entries here
            // For this example, let's assume there are three products.

            // Fetch the Product model or use Product::factory()->create() to generate new products.
            $productIds = \Modules\Product\Entities\Product::query()
                ->inRandomOrder()
                ->take(3)
                ->pluck('id');

            // Simulate adding products to the order here.
            foreach ($productIds as $productId) {
                // Assuming you have an OrderProducts model and factory
                \App\Models\OrderProducts::factory()->create([
                    'order_id'   => $order->id,
                    'product_id' => $productId,
                    // You should implement logic to fetch or generate the following data:
                    'variant_id' => null, // This should be a valid variant ID if applicable
                    'quantity'   => $this->faker->numberBetween(1, 5),
                    'price'      => $this->faker->randomFloat(2, 10, 500),
                ]);
            }
        });
    }
}
