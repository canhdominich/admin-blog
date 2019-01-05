<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            // tieu de bai viet
            $table->string('title')->index();
            // anh thu nho
            $table->string('thumbnail')->nullable();
            //mo ta ngan gon cua bai viet
            $table->string('description')->nullable();
            //noi dung bai viet
            $table->longText('content')->nullable();
            // duong dan - title khong dau, va noi lien nhau
            $table->string('slug')->unique();
            // id cua nguoi viet bai
            $table->integer('user_id')->usigned();
            // id cua danh muc bai viet
            $table->integer('category_id')->unsigned();
            // dem luot xem nbai viet
            $table->integer('view_count')->default(0);
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
