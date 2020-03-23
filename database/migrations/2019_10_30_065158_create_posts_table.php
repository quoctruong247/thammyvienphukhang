<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->bigIncrements('id');
            $table->string('Title');
            $table->string('Slug');
            $table->string('Keyword');
            $table->text('Description');
            $table->text('Content');
            $table->string('Image');
            $table->boolean('PostSale');
            $table->boolean('On_Off');
            $table->string('RelatedPost');
            $table->unsignedInteger('categories_id');
            $table->unsignedInteger('users_id');
            
            $table->boolean('NewPost');
            $table->integer('View');
            $table->integer('UpdateTimes');
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
