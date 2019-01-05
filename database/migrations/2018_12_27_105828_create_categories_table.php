<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
         $table->increments('id');
            // ten thu muc
         $table->string('name')->nullable();
            // chua id cha
         $table->tinyInteger('parent_id')->nullable()->comment('chua id category parent');
            // luu duong dan anh thu nho cua thu muc 
         $table->string('thumbnail')->nullable();
            // duong dan name khong dau va noi lien nhau
         $table->string('slug')->unique();
            // mo ta ngan cho thu muc
         $table->mediumText('description')->nullable();
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
        Schema::dropIfExists('categories');
    }
}
