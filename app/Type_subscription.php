<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type_subscription extends Model
{
    protected $fillable = [
        'subcription_id', 'subscription_name', 'month', 'price',
    ];


    public function getSubscriptionTypeList($name='')
    {
    	return Type_subscription::where('subscription_name', '=', $name)->orderBy('price')->get();
    }

    
}
