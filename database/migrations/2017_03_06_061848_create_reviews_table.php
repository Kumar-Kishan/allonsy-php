<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('story_id')->unsigned();
            $table->foreign('story_id')->references('id')->on('stories')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('media_id')->unsigned();
            $table->foreign('media_id')->references('id')->on('media')->onDelete('cascade')->onUpdate('cascade');            
            $table->integer('location_id')->unsigned();
            $table->foreign('location_id')->references('id')->on('locations')->onDelete('cascade')->onUpdate('cascade');
            $table->string('text', 200);           
            $table->softDeletes(); 
            $table->enum('rating',['1','2','3','4','5']);
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
        Schema::dropIfExists('reviews');
    }
}
