<?php

namespace Database\Seeders;

use App\Models\Group;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class GruposSeeder extends Seeder {

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
        collect(['Amaral', 'Sidonie', 'Efecto Pasillo', 'Kygo', 'Mecano', 'Maluma', 'Estopa', 'Macaco'])
            ->each(function ($name) {
                (new Group([
                               'name'  => $name,
                               'cache' => $this->faker->numberBetween(100, 10000),
                           ]))->save();
            });
    }
}
