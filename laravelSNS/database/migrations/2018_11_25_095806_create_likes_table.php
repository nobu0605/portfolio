<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLikesTable extends Migration
{
 
  public function up()
  {
    Schema::create('likes', function (Blueprint $table) {
      $table->increments('id');
      $table->timestamps();
      $table->integer('user_id');
      $table->integer('post_id');
      $table->boolean('like');

      $table
        ->foreign('post_id')
        ->references('id')
        ->on('contents')
        ->onDelete('cascade'); 
    });
  }

  public function down()
  {
    Schema::dropIfExists('likes');
  }
}