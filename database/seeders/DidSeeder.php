<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DidSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Did::factory(50)->create();
    }
}
