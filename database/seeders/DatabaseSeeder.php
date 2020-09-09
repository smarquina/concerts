<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {
        $this->call(GruposSeeder::class);
        $this->call(MediosSeeder::class);
        $this->call(PromotoresSeeder::class);
        $this->call(RecintosSeeder::class);
    }
}
