<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BlogPost extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_posts', function(Blueprint $table){
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('title');
            $table->text('excerpt');
            $table->text('body');
            $table->string('slug')->unique();
            $table->string('meta');
            $table->text('description');
            $table->string('image');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
