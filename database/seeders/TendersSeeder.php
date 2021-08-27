<?php

namespace Database\Seeders;

use App\Models\Tender;
use Illuminate\Database\Seeder;

class TendersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        for($i=0;$i<10;$i++){
            Tender::create([
                'title' => $faker->sentence(4),
                'comment' => $faker->sentence(20)
            ]);
        }
    }
}
