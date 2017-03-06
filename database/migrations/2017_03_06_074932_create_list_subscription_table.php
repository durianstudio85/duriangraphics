<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListSubscriptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('type_subscriptions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('subscription_id');
            $table->string('subscription_name');
            $table->string('month');
            $table->double('price', 15, 2);
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
        Schema::drop('type_subscriptions');
    }
}
