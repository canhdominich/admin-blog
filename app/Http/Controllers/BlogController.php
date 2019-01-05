<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;
use App\Tag;
use App\Category;

class BlogController extends Controller
{
    public function index(){
    	// $categories = Category::all();
    	$post = Post::all();
    	$tags = Tag::all();
    	return view('index', ['posts' => $post, 'tags' => $tags]);
    	// $comments = Comment::find(1);
    	// dd($comments->post->title);
    }

    public function categoriesList(){
        $categories = Category::all();
        return view('category.categories_list', ['categories' => $categories]);
    }

    public function newCategory(Request $request){
        return view('category.new_category');
    }

    public function category($slug){
    	$category = Category::where('slug',$slug)->firstOrFail();
    	$posts = Post::where('category_id', $category->id)->get();
    	return view('category', ['posts' => $posts]);
    }

    public function detail($slug){
    	$post_detail = Post::where('slug', $slug)->firstOrFail();
    	return view('detail', ['post_detail' => $post_detail]);
    }

    public function admin(){
        return view('layouts.master_admin');
    }
}
