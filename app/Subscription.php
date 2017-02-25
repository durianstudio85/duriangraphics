<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;
use App\Download;

class Subscription extends Model
{
    protected $fillable = [
        'user_id', 'type', 'date_start', 'date_end',
    ];


    public function getLimitDownload($user_id='')
    {
    	$dateNow = Carbon::now();
        $dateNext = Carbon::now()->addMonths(1);
        $user_id = Auth::user()->id;
        
        $getSubscription = Subscription::where('user_id', '=', $user_id)->where('date_start', '<=', $dateNow)->where('date_end', '>=', $dateNow)->get();
        $getSubscriptionCount = Subscription::where('user_id', '=', $user_id)->where('date_start', '<=', $dateNow)->where('date_end', '>=', $dateNow)->count();
        if ($getSubscriptionCount > 0) {
            foreach ($getSubscription as $list ) {
                if ($dateNow >= $list->date_start and $dateNow <= $list->date_end) {
                    $Download = Download::whereBetween('created_at',array($list->date_start,$list->date_end))->where('type', '=', 'first')->where('user_id', '=', $user_id)->count();
                }
            }
        }else{
    	    Subscription::Create(['user_id' => $user_id,'type' => 'free' ,'date_start' => $dateNow, 'date_end' => $dateNext]);
            $Download = 0;
        }
    	return $Download;
    }
}
