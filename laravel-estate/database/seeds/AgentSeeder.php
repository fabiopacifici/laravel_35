<?php

use App\Agent;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class AgentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $agent = new Agent();
            $agent->name = $faker->firstName();
            $agent->lastname = $faker->lastName();
            $agent->email = $faker->email();
            $agent->phone = $faker->phoneNumber();
            $agent->website = $faker->domainName();
            $agent->save();
        }
    }
}
