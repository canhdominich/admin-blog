<?php

use Illuminate\Database\Seeder;
use App\Category;
class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create(
        	[
        		'name' => 'Cơn bão số 9',
        		'parent_id' => 1,
        		'thumbnail' => 'https://dantricdn.com/2018/12/27/ap-thap-nhiet-doi-copy-15459043637921990713408.jpg',
        		'slug' => 'aaa1',
        		'description' => 'Áp thấp nhiệt đới khả năng thành bão đang hướng vào Biển Đông',
        	]);
    }
}
