<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Train;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 100; $i++) { 
			$train = new Train();
			$train->company = $faker->company();
			$train->departure_station = $faker->city();
			$train->arrival_station = $faker->city();
			$train->departure_time = $faker->dateTimeBetween('-1 week', '+1 week');
			$train->arrival_time = $faker->dateTimeBetween($train->departure_time, '+1 week');
			$train->train_code = $faker->bothify('??###');
			$train->carriages = $faker->numberBetween(1, 20);
			$train->in_time = $faker->boolean();
			$train->cancelled = $faker->boolean();
			$train->save();			
		}
    }
}
