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
            $table->bigIncrements('id');
            $table->timestamps();
            $table->integer('post_author')->nullable();
            $table->date('post_date')->nullable();
            $table->string('post_content')->nullable();
            $table->string('post_title')->nullable();
            $table->string('post_status')->nullable();
            $table->string('post_name')->nullable();
            $table->string('post_type')->nullable();
            $table->string('post_category')->nullable();
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
