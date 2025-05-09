<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tags')->insert([
            ['name' => 'Bestseller', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Rice Bowl Meals', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Barbeque Meals', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Fiesta Bilao', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Addons', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
