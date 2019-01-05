<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        	'name' => 'Admin',
        	 'email' => 'admin@zent.vn',
        	 // 'email_verified_at' => date('Y-m-d H:i:s', time()),
        	 'password' => bcrypt('123456'),
        ]);


        User::create([
        	'name' => 'Mod',
        	'email' => 'mod@zent.vn',
        	'password' =>  bcrypt('123456'),
        ]);
    }
}
