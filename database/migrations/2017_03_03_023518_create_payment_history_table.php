<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paypalpayments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('paypal_id');
            $table->string('intent');
            $table->string('state');
            $table->string('cart');
            $table->string('payer_payment_method');
            $table->string('payer_status');
            $table->string('payer_email');
            $table->string('payer_first_name');
            $table->string('payer_last_name');
            $table->string('payer_id');
            $table->string('payer_shipping_recipient_name');
            $table->string('payer_shipping_line1');
            $table->string('payer_shipping_city');
            $table->string('payer_shipping_state');
            $table->string('payer_shipping_postal_code');
            $table->string('payer_shipping_country_code');

            $table->double('transaction_amount_total', 15, 2);
            $table->string('transaction_amount_currency');
            $table->string('transaction_amount_details');

            $table->string('transaction_payee_merchant_id');
            $table->string('transaction_payee_email');

            $table->string('transaction_description');
            
            $table->string('transaction_resources_sales');
            $table->string('transaction_resources_states');
            $table->string('transaction_resources_payment_mode');
            $table->string('transaction_resources_protection_eligibility');
            $table->string('transaction_resources_protection_eligibility_type');
            $table->string('transaction_resources_transaction_fee_value');
            $table->string('transaction_resources_transaction_fee_currency');
            $table->string('transaction_resources_parent_payment');
            $table->string('transaction_resources_create_time');
            $table->string('transaction_resources_update_time');
            $table->string('transaction_resources_links');

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
        Schema::drop('paypalpayments');
    }
}
