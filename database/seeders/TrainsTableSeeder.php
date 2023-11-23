<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;


class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 20; $i++) {
            $trains = new Train();
            $trains->company = $faker->company();
            $trains->departure_station = $faker->city();
            $trains->arrival_station = $faker->city();
            $trains->departure_time = $faker->dateTimeInInterval('+2 day', '+3 day');
            $trains->arrival_time = $faker->dateTimeInInterval($trains->departure_time, '+3 days');;
            $trains->train_code = $faker->ean8();
            $trains->carriage = $faker->numberBetween(4, 15);
            $trains->is_late = false;
            $trains->is_deleted = false;

            $trains->save();
        }
    }
}
