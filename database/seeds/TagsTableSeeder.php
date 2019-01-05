<?php

use Illuminate\Database\Seeder;
use App\Tag;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tag::create([
    		'name' => 'Admin',
    		'slug' => 'Admin',
        	 // 'email_verified_at' => date('Y-m-d H:i:s', time()),
    	]);


    	Tag::create([
    		'name' => 'Mod',
    		'slug' => 'Mod',
    	]);
    }
}
