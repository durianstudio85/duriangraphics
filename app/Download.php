<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;

class Download extends Model
{
    protected $fillable = [
        'img_id', 'user_id' , 'type',
    ];

    public function countImageDownloads($id='')
    {
    	$download = Download::where('img_id', '=', $id)->count();
    	return $download;
    }

    public function getDate($date='')
    {
        return $date->toFormattedDateString();
    }

    public function changeDateFormat($date='')
    {
        return $date->toFormattedDateString();
    }

    public function getLimitImg($imgId='')
    {
        $now = Carbon::now();
        $monthStart = $now->startOfMonth();
        $monthEnd = $now->endOfMonth();

        return $monthStart.'-.-'.$monthEnd;
    }

}
