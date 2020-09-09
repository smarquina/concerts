<?php

namespace Database\Seeders;

use App\Models\Media;
use Illuminate\Database\Seeder;

class MediosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        collect(['Heineken', 'Coca Cola', 'Hawkers', 'Tuenti', 'Negrita', 'Ribera del Duero', 'Pioneer'])
            ->each(function ($name) {
                (new Media(['name'  => $name]))->save();
            });
    }
}
