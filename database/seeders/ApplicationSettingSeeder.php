<?php

namespace Database\Seeders;

use App\Models\ApplicationSetting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ApplicationSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'slug' => 'service-status',
                'setting_name' => 'Status Layanan',
                'value' => 1,
            ],
            [
                'slug' => 'service-name',
                'setting_name' => 'Layanan Aplikasi',
                'value' => 1,
            ],
        ];

        foreach($data as $setting) {
            ApplicationSetting::updateOrCreate([
                'slug' => $setting['slug'],
            ], $setting);
        }
    }
}
