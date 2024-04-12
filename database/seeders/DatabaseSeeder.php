<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\categories;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        DB::table('categories')->insert(
                [
                    [
                        'name' => 'Jersey',
                        'status' => true,
                    ],
                    [
                        'name' => 'Glove',
                        'status' => true,
                    ],
                    [
                        'name' => 'Helmet',
                        'status' => true,
                    ],
                    [
                        'name' => 'Pant',
                        'status' => true,
                    ],
                    [
                        'name' => 'Gear',
                        'status' => true,
                    ],
                    [
                        'name' => 'Mouth guard',
                        'status' => true,
                    ],
                    [
                        'name' => 'Stick',
                        'status' => true,
                    ],
                ]
            );
    }
}
