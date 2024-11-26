<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemTableSeederNews extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fake = Factory::create();
        $limit = 10;
        for ($i = 0; $i < $limit; $i++) {
            DB::table('tbl_news')->insert([
                'headline' => $fake->sentence(6),
                'title' => $fake->sentence(3),
                'email' => $fake->unique->email,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
