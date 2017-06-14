<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStoryAttributesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('story_attributes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('story_id')->unsigned();
            $table->foreign('story_id')->references('id')->on('stories')->onDelete('cascade')->onUpdate('cascade');
            $table->string('category');
            $table->double('value', 15, 12);
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
        Schema::dropIfExists('story_attributes');
    }
}
