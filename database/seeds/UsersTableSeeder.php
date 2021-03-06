<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = App\User::create([
        	'name' => 'Gabi',
        	'email' => 'gabrieldornianu@yahoo.com',
        	'password' => bcrypt('123456'),
            'admin' => 1
        ]);

        App\Profile::create([
            'user_id' => $user->id,
            'avatar' => 'uploads/avatars/24.jpg',
            'about' => 'AWDDAWAWWADADADAWDADWWAD',
            'facebook' => 'facebook.com',
            'youtube' => 'youtube.com'
        ]);
    }
}
