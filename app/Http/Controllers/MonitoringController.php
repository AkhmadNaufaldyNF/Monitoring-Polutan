<?php

namespace App\Http\Controllers;

use App\Monitoring;
use Illuminate\Http\Request;

use Waktu;


class MonitoringController extends Controller
{
	public function Index()
	{
		$monitoring = Monitoring::all();
		return view('table.table') -> with('monitoring',$monitoring);
	}

	public function update($Kadar)
	{		
		$update = new Monitoring;
		$update -> kadars = $Kadar;
		$update -> save();
	}

	public function Chart()
	{
		// for ($i=1; $i <= 31 ; $i++){
		// 	$chart[$i] = (Monitoring::where('kadars', '')
		// 		->whereDay('created_at', $i)
		// 		->get());
		// }

		for ($i=1; $i <= 12 ; $i++){
			$chart[$i] = Monitoring::whereMonth('created_at', $i)
			->avg('kadars');
		}

		// dd($chart);
		return view('statistik.statistik', ['data' => $chart]);
	}
}
