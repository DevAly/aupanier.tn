<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $gateways = [
            [
                'name' => 'paymee',
                'image' => 'paymee.jpg',
                'description' => 'Paiement avec carte bancaire paymee',
                'status' => 1,
                'test_mode' => 1,
                'credentials' => '{"account_number": "123", "api_token": "token", "test_account_number": "token", "test_api_token": "token"}',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more gateway data as needed
        ];

        DB::table('payment_gateways')->insert($gateways);
    }
}
