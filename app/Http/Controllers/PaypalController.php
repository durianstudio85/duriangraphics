<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Paypal;
use Auth;
use App\Paypalpayment;

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
	    $payer = PayPal::Payer();
	    $payer->setPaymentMethod('paypal');

	    $amount = PayPal:: Amount();
	    $amount->setCurrency('USD');
	    $amount->setTotal($request->input('pay'));
	    // $amount->setDetails( 'type :'. $request->input('type') .'<br> Amount'. $request->input('pay') );

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

	public function paymentHistory($payment)
	{

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

	        foreach ($payment->transactions as $transactions) {
	        	'transaction_amount_total' => $transactions->amount->total,
		        'transaction_amount_currency' => $transactions->amount->currency,
		        'transaction_amount_details' => $transactions->amount->details,
	        }
	        

	        // 'transaction_payee_merchant_id',
	        // 'transaction_payee_email',

	        // 'transaction_description',

	        // 'transaction_resources_sales',
	        // 'transaction_resources_states',
	        // 'transaction_resources_payment_mode',
	        // 'transaction_resources_protection_eligibility',
	        // 'transaction_resources_protection_eligibility_type',
	        // 'transaction_resources_transaction_fee_value',
	        // 'transaction_resources_transaction_fee_currency',
	        // 'transaction_resources_parent_payment',
	        // 'transaction_resources_create_time',
	        // 'transaction_resources_update_time',
	        // 'transaction_resources_links',









         //    'title' => $request->get('title'),
         //    'description' => $request->get('description'),
         //    'main_features' => $request->get('main_features'),
         //    'category' => $request->get('category'),
         //    'download_img' => $download_img_name,
         //    'watermark_img' => $watermark_img_name,
        ];

        Paypalpayment::Create($data);




		
	}
}