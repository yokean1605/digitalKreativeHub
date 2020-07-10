<?php

use App\Models\Setting\AppSetting;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $setting = [
            [
                'setting_key' => 'site_title', 
                'setting_value' => 'Pradesga CMS Project',
            ], 
            [
                'setting_key' => 'tagline', 
                'setting_value' => 'Build an amazing also professional brand and website with Pradesga',
            ], [
                'setting_key' => 'phone', 
                'setting_value' => '',
            ], [
                'setting_key' => 'address', 
                'setting_value' => '',
            ], [
                'setting_key' => 'email', 
                'setting_value' => '',
            ], [
                'setting_key' => 'about', 
                'setting_value' => json_encode([]),
            ], [
                'setting_key' => 'service', 
                'setting_value' => json_encode([]),
            ], [
                'setting_key' => 'team', 
                'setting_value' => json_encode([]),
            ], [
                'setting_key' => 'facebook', 
                'setting_value' => '',
            ], [
                'setting_key' => 'twitter', 
                'setting_value' => '',
            ], [
                'setting_key' => 'instagram', 
                'setting_value' => '',
            ], [
                'setting_key' => 'home_background', 
                'setting_value' => '',
            ], [
                'setting_key' => 'mail_driver', 
                'setting_value' => '',
            ], [
                'setting_key' => 'mail_host', 
                'setting_value' => '',
            ], [
                'setting_key' => 'mail_port', 
                'setting_value' => '',
            ], [
                'setting_key' => 'mail_username', 
                'setting_value' => '',
            ], [
                'setting_key' => 'mail_password', 
                'setting_value' => '',
            ], [
                'setting_key' => 'mail_encryption', 
                'setting_value' => '',
            ], [
                'setting_key' => 'mail_from_address', 
                'setting_value' => '',
            ], [
                'setting_key' => 'mail_from_name', 
                'setting_value' => '',
            ], [
                'setting_key' => 'brand_logo', 
                'setting_value' => '',
            ], [
                'setting_key' => 'partner', 
                'setting_value' => json_encode([]),
            ],
        ];
 		DB::table('app_settings')->insert($setting);
    }
}
