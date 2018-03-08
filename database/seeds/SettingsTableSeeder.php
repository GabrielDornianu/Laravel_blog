<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Setting::create([
        	'site_name' => 'Laravel\'s blog',
        	'address' => 'Romania Neamt',
        	'contact_number' => '123 0990 8123',
        	'contact_email' => 'info@laravel.com'
        ]);
    }
}
