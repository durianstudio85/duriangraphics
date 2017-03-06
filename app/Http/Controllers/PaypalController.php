<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Paypal;
use Auth;
use App\Paypalpayment;
use App\Type_subscription;

class PaypalController extends Controller
{

    private $_apiContext;

    public function __construct()
    {
 		$this->middleware('auth');

        $this->_apiContext = PayPal::ApiContext(
            config('services.paypal.client_id'),
            config('services.paypal.secret'));

        $this->_apiContext->setConfig(array(
            'mode' => 'sandbox',
            'service.EndPoint' => 'https://api.sandbox.paypal.com',
            'http.ConnectionTimeOut' => 30,
            'log.LogEnabled' => true,
            'log.FileName' => storage_path('logs/paypal.log'),
            'log.LogLevel' => 'FINE'
        ));

    }

    public function payPremium()
    {
    	return view('payPremium');
    }

    public function getCheckout(Request $request)
	{

		
		$price = $this->addSubscription($request->input('type'), $request->input('month'));

	    $payer = PayPal::Payer();
	    $payer->setPaymentMethod('paypal');

	    $amount = PayPal:: Amount();
	    $amount->setCurrency('USD');
	    $amount->setTotal($price);

	    $transaction = PayPal::Transaction();
	    $transaction->setAmount($amount);
	    $transaction->setDescription($request->input('type'));

	    $redirectUrls = PayPal:: RedirectUrls();
	    $redirectUrls->setReturnUrl(route('getDone'));
	    $redirectUrls->setCancelUrl(route('getCancel'));

	    $payment = PayPal::Payment();
	    $payment->setIntent('sale');
	    $payment->setPayer($payer);
	    $payment->setRedirectUrls($redirectUrls);
	    $payment->setTransactions(array($transaction));

	    $response = $payment->create($this->_apiContext);
	    $redirectUrl = $response->links[1]->href;

	    return redirect()->to( $redirectUrl );
	}

	public function getDone(Request $request)
	{
	    $id = $request->get('paymentId');
	    $token = $request->get('token');
	    $payer_id = $request->get('PayerID');

	    $payment = PayPal::getById($id, $this->_apiContext);

	    $paymentExecution = PayPal::PaymentExecution();

	    $paymentExecution->setPayerId($payer_id);
	    $executePayment = $payment->execute($paymentExecution, $this->_apiContext);
	    

	    $this->paymentHistory($payment);


	    return view('paypal.sample', compact('payment'));
	    print_r($executePayment);
	    // print_r($paymentExecution);
	}

	public function getCancel()
	{
	    return redirect('settings/upgrade');
	}

	public function addSubscription($type='', $month='')
	{
		$user_id = Auth::user()->id;
		$count_subscription = Type_subscription::where('subscription_name','=' , $type)->where('month','=' , $month)->count();
		if (count($count_subscription) > 0) {
			$subscription = Type_subscription::where('subscription_name','=' , $type)->where('month','=' , $month)->orderBy('price','desc')->first();
			$data = [
			    'user_id' => $user_id,
			    'no_month' => $month,
			    'type' => $type,
			];
			Paypalpayment::Create($data);
			return $subscription->price;


		}else{
			return redirect('settings/upgrade');
		}
	}


	public function paymentHistory($payment)
	{

		foreach ($payment->transactions as $transactions) {
			// Amount ====================
			$amount_total = $transactions->amount->total;
			$amount_currency = $transactions->amount->currency;
			$amount_details = $transactions->amount->details;

			// Payee =====================
			$payee_merchant_id = $transactions->payee->merchant_id;
			$payee_email = $transactions->payee->email;

			// Description ===============
			$description = $transactions->description;

			// Related Resources =========
			$related_resources = $transactions->related_resources;
		}

		foreach ($related_resources as $resources ) {
			$sale_id = $resources->sale->id;
			$sale_state = $resources->sale->state;
			$sale_payment_method = $resources->sale->payment_mode;
			$sale_protection_eligibility = $resources->sale->protection_eligibility;
			$sale_protection_eligibility_type = $resources->sale->protection_eligibility_type;
			$sale_transaction_fee_value = $resources->sale->transaction_fee->value;
			$sale_transaction_fee_currency = $resources->sale->transaction_fee->currency;
			$sale_parent_payment = $resources->sale->parent_payment;
			$sale_create_time = $resources->sale->create_time;
			$sale_update_time = $resources->sale->update_time;
			// $sale_links = $resources->sale->links;
		}

		$data = [
			'user_id' => Auth::user()->id, 
	        'paypal_id' => $payment->id, 
	        'intent' => $payment->intent, 
	        'state'  => $payment->state, 
	        'cart'  => $payment->cart, 
	        'payer_payment_method' => $payment->payer->payment_method,
	        'payer_status' => $payment->payer->status,
	        'payer_email' => $payment->payer->payer_info->email,
	        'payer_first_name'  => $payment->payer->payer_info->first_name,
	        'payer_last_name' => $payment->payer->payer_info->last_name,
	        'payer_id' => $payment->payer->payer_info->payer_id,
	        'payer_shipping_recipient_name'  => $payment->payer->payer_info->shipping_address->recipient_name,
	        'payer_shipping_line1'  => $payment->payer->payer_info->shipping_address->line1,
	        'payer_shipping_city'  => $payment->payer->payer_info->shipping_address->city,
	        'payer_shipping_state'  => $payment->payer->payer_info->shipping_address->state,
	        'payer_shipping_postal_code'  => $payment->payer->payer_info->shipping_address->postal_code,
	        'payer_shipping_country_code'  => $payment->payer->payer_info->shipping_address->country_code,

	        // Transaction Amount ================================
        	'transaction_amount_total' => $amount_total,
	        'transaction_amount_currency' => $amount_currency,
	        'transaction_amount_details' => $amount_details,
	        
	        // Transaction Payee ================================
	        'transaction_payee_merchant_id' => $payee_merchant_id,
	        'transaction_payee_email' => $payee_email,

	        // Transaction Description ================================
	        'transaction_description' => $description,

	        // Transaction Resources =======================
	        'transaction_resources_sales' => $sale_id,
	        'transaction_resources_states' => $sale_state,
	        'transaction_resources_payment_mode' => $sale_payment_method,
	        'transaction_resources_protection_eligibility' => $sale_protection_eligibility,
	        'transaction_resources_protection_eligibility_type' => $sale_protection_eligibility_type,
	        'transaction_resources_transaction_fee_value' => $sale_transaction_fee_value,
	        'transaction_resources_transaction_fee_currency' => $sale_transaction_fee_currency,
	        'transaction_resources_parent_payment' => $sale_parent_payment,
	        'transaction_resources_create_time' => $sale_create_time,
	        'transaction_resources_update_time' => $sale_update_time,
	        // 'transaction_resources_links' => $sale_links,

        ];

        Paypalpayment::Create($data);
	}
}