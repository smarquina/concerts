<?php

namespace Database\Seeders;

use App\Models\Promoter;
use Illuminate\Database\Seeder;

class PromotoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        collect(['Live Nation', 'Art de Troya', 'Madness Live', 'Primavera sound'])
            ->each(function ($name) {
                (new Promoter(['name'  => $name]))->save();
            });
    }
}
