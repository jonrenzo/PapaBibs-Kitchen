<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('statuses')->insert([
            ['name' => 'processing', 'label' => 'Processing Order', 'description' => 'Sending your order...'],
            ['name' => 'confirmed', 'label' => 'Order Confirmed!', 'description' => 'We’ve received your order—thank you for choosing PapaBibs! Our team is reviewing the details and getting ready to cook up something delicious.'],
            ['name' => 'delivering', 'label' => 'Out for Delivery', 'description' => 'Courier has picked up your food and its on its way to your location. Please ensure someone is available to receive it. You can track the delivery status in real time. Thank you for choosing us!'],
            ['name' => 'received', 'label' => 'Order Received', 'description' => 'Enjoy your meal! We hope it hit the spot. We’d love to hear your thoughts or see your foodie pics—tag us or leave a review!'],
        ]);
    }
}
