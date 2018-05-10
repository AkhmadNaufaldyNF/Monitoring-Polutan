<?php

namespace App\Helpers;
 
use Carbon\Carbon;

class WaktuHelper {
    public static function Tanggal($tanggal){
        $return = Carbon::parse($tanggal)->format('d-m-Y');
        return $return;
    }

    public static function Jam($jam){
    	$return = Carbon::parse($jam)->format('H:i:s');
    	return $return;
    } 
}