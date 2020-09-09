<?php

namespace Database\Seeders;

use App\Models\ConcertHall;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class RecintosSeeder extends Seeder {

    private $faker;

    public function __construct(Faker $faker) {
        $this->faker = $faker;
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        collect(['Santiago Bernabeu', 'Coliseum Burgos', 'Santander Deportes', 'Barclays Center', 'Mirivilla', 'Las Gaunas',
                 'La Fonteta', 'Caja Mágica', 'Sala Andén 56'])
            ->each(function ($name) {
                (new ConcertHall([
                                     'name'         => $name,
                                     'rent_cost'    => $this->faker->numberBetween(100, 1000),
                                     'ticket_price' => $this->faker->numberBetween(1, 10),
                                 ]))->save();
            });
    }
}
