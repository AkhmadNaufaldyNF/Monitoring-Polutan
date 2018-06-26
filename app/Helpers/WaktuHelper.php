<?php

namespace App\Helpers;

use Carbon\Carbon;

class WaktuHelper {
	public static function Tanggal($tanggal){
		$return = Carbon::parse($tanggal)->format('d-m-Y');
		return $return;
	}

	public static function Jam($jam){
		$return = Carbon::parse($jam)->format('H:i A');
		return $return;
	} 

	public static function TanggalSekarang(){
		$return = Carbon::now()->format('d-m-Y');
		return $return;
	}

	public static function WaktuSekarang(){
		$return = Carbon::now()->format('H:i A');
		return $return;
	}

	public static function PrintData($request){
		$tanggalawal = $request ? $request->tanggalawal : '01-01-2018';
		$tanggalakhir = $request ? $request->tanggalakhir : Waktu::TanggalSekarang();
		$waktuawal = $request ? $request->waktuawal : '00:00 AM';
		$waktuakhir = $request ? $request->waktuakhir : Waktu::WaktuSekarang();
		$status = $request ? $request->status : 'Semua';
	}
}