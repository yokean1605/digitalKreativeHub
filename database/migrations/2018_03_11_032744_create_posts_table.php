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
            $table->integer('author')->nullable()->unsigned();
            $table->text('title')->nullable();
            $table->longText('content')->nullable();
            $table->string('status')->nullable();
            $table->string('type')->nullable();
            $table->string('slug')->nullable();
            $table->string('comment_status')->nullable();
            $table->integer('menu_order')->nullable();
            $table->timestamps();
            $table->softDeletes();
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
