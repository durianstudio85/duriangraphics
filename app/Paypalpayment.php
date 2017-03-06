<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paypalpayment extends Model
{
    protected $fillable = [
        'user_id', 
        'paypal_id', 
        'intent', 
        'state', 
        'cart', 
        'payer_payment_method',
        'payer_status',
        'payer_email',
        'payer_first_name',
        'payer_last_name',
        'payer_id',
        'payer_shipping_recipient_name',
        'payer_shipping_line1',
        'payer_shipping_city',
        'payer_shipping_state',
        'payer_shipping_postal_code',
        'payer_shipping_country_code',
        'transaction_amount_total',
        'transaction_amount_currency',
        'transaction_amount_details',

        'transaction_payee_merchant_id',
        'transaction_payee_email',

        'transaction_description',

        'transaction_resources_sales',
        'transaction_resources_states',
        'transaction_resources_payment_mode',
        'transaction_resources_protection_eligibility',
        'transaction_resources_protection_eligibility_type',
        'transaction_resources_transaction_fee_value',
        'transaction_resources_transaction_fee_currency',
        'transaction_resources_parent_payment',
        'transaction_resources_create_time',
        'transaction_resources_update_time',
        'transaction_resources_links',

        'no_month',
        'type',

    ];


}
