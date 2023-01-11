<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $settings = [
            [
                'key' => 'app_name',
                'value' => 'Phone Locally'
            ],
            [
                'key' => 'app_url',
                'value' => 'http://voip-xorexs9.dev.com'
            ],
            [
                'key' => 'currency_code',
                'value' => 'usd'
            ],
            [
                'key' => 'currency_sign',
                'value' => '$'
            ],
        ];

        Setting::insert($settings);
    }
}
