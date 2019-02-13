<?php

use App\Bag;
use Illuminate\Database\Seeder;

class BagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Bag::create([
            'size' => '14x6',
            'stock' => '0'
        ]);

        Bag::create([
            'size' => '14x8',
            'stock' => '0'
        ]);

        Bag::create([
            'size' => '14x14',
            'stock' => '0'
        ]);
    }
}
