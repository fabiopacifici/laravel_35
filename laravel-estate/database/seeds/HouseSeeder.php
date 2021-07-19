<?php

use Faker\Generator as Faker;
use App\House;
use Illuminate\Database\Seeder;

class HouseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        /* Opzione 1 con file di config */
        /*  $houses = config('houses.data');
        foreach ($houses as $house) {
            $h = new House();
            $h->image_url = $house['image_url'];
            $h->address = $house['address'];
            $h->city = $house['city'];
            $h->post_code = $house['post_code'];
            $h->square_meters = $house['square_meters'];
            $h->price = $house['price'];
            $h->energy_class = $house['energy_class'];
            $h->type = $house['type'];
            $h->garden = $house['garden'];
            $h->save();
        } */

        /* Opzione 2 FakerPHP */
        for ($i = 0; $i < 20; $i++) {
            $house = new House();
            $house->address = $faker->address();
            $house->image_url = $faker->imageUrl(640, 480, 'Houses', true, $house->address, true);
            $house->city = $faker->city();
            $house->post_code = $faker->postcode();
            $house->square_meters = $faker->numberBetween(100, 500);
            $house->price = $faker->numberBetween(100000, 999000);
            $house->energy_class = $faker->randomElement(['A+++', 'A++', 'A+', 'B', 'C', 'D', 'E', 'F', 'G']);
            $house->type = $faker->randomElement(['Villa', 'Villetta a Schiera', 'Appartamento', 'Casale', 'Monolocale']);
            $house->garden = $faker->boolean();
            $house->save();
        }
    }
}
