<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewPaymentDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('paypalpayments', function (Blueprint $table) {
            $table->string('no_month');
            $table->string('type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('paypalpayments', function (Blueprint $table) 
        {
            $table->dropColumn('no_month');
            $table->dropColumn('type');
        });
    }
}
