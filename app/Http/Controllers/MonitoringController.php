<?php

namespace App\Http\Controllers;

use App\Monitoring;
use Illuminate\Http\Request;

use Carbon\Carbon;

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
		for ($i=1; $i <= 12 ; $i++){
			$chart[$i] = Monitoring::whereMonth('created_at', $i)
			->avg('kadars');
		}		
		return view('statistik.statistik', ['data' => $chart]);
	}

	public function FilterData(Request $request){

		$monitoring = Monitoring::whereDate('created_at', '>=', $request->tanggalawal)
								->whereDate('created_at', '<=', $request->tanggalakhir);

		if ($request->statuskadar != 'status') {
			$monitoring = $monitoring->where('kadars', $request->statuskadar);
		}		

		// dd ($monitoring);
		return  view('table.table', ['monitoring' => $monitoring->get(), 'request' => $request]);
	}


		// if ($request->)		

	// 	// if ($request->statuskadar != '01012011') {
	// 	// 	$Filter = $Filter->where('status', $request->statuskadar);
	// 	// }
	// 	// // if ($request->statusparkir != '01012011') {
	// 	// // 	$Filter = $Filter->where('status', $request->statusparkir);
	// 	// // }
	// 	// $Kadar = $Filter->max('id');
	// 	return view('table.table', ['data' => $Filter->get(), 'request' => $request]);
	// }
}
