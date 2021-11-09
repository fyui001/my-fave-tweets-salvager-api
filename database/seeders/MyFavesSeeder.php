<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class MyFavesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faves = [
            [
                'name' => '高田憂希',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => '松井恵理子',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ];

        DB::table('my_faves')->insert($faves);
    }
}
