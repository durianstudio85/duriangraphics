<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImageItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('image_items', function (Blueprint $table) {
            $table->increments('id');
            $table->text('watermark_img');
            $table->text('download_img');
            $table->string('title');
            $table->text('description');
            $table->text('main_features');
            $table->integer('category');
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
        Schema::drop('image_items');
    }
}
