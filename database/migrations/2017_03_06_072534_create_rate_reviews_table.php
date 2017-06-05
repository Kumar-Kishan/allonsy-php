<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rate_reviews', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('story_id')->unsigned()->index();
            $table->foreign('story_id')->references('id')->on('stories')->onDelete('cascade')->onUpdate('cascade');
            
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->softDeletes();
            $table->string('text', 200);
            $table->enum('rating',['1','2','3','4','5']);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rate_reviews');
    }
}
