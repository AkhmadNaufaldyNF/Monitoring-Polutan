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
		return view('table.table', ['monitoring' => $monitoring]);
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

	// public function Chart2()
	// {
	// 	for ($i=1; $i <= 7 ; $i++){
	// 		$chart[$i] = Monitoring::whereDate('created_at', $i)
	// 		->avg('kadars');
	// 	}		
	// 	return view('admin.dashboard', ['data' => $chart]);
	// }

	public function FilterData(Request $request){
		$monitoring = Monitoring::whereDate('created_at', '>=', $request->tanggalawal)
		->whereDate('created_at', '<=', $request->tanggalakhir);

		if ($request->monitoring != 'status')
		{	
			if ($request->monitoring == '0'){
				$monitoring = $monitoring->where('kadars', '<', 451);
			}
			if ($request->monitoring == '1'){
				$monitoring = $monitoring
				->where('kadars', '>=', 451)
				->where('kadars', '<', 1000);
			}
			if ($request->monitoring == '2'){
				$monitoring = $monitoring->where('kadars', '>=', 1000);
			}	
		}
		return  view('table.table', ['monitoring' => $monitoring->get(), 'request' => $request]);
	}

	public function New()
	{
		$monitoring = Monitoring::all() -> last();
		return view('admin.dashboard', ['data' => $monitoring]);
	}

}
