<?php

namespace App\Http\Controllers;

use App\Monitoring;
use Illuminate\Http\Request;

use Carbon\Carbon;

use Waktu;

use PDF;

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

	public function FilterData(Request $request){
		$monitoring = Monitoring::whereDate('created_at', '>=', $request->tanggalawal)
		->whereDate('created_at', '<=', $request->tanggalakhir)
		->whereTime('created_at', '>=', $request->waktuawal)
		->whereTime('created_at', '<=', $request->waktuakhir);

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

	public function PrintLaporan($tanggalawal, $tanggalakhir, $waktuawal, $waktuakhir, $status)
	{
		$monitoring = Monitoring::whereDate('created_at', '>=', $tanggalawal)
			->whereDate('created_at', '<=', $tanggalakhir)
			->whereTime('created_at', '>=', $waktuawal)
			->whereTime('created_at', '<=', $waktuakhir);

		if ($status != 'status')
		{
			if ($status == '0'){
				$monitoring = $monitoring->where('kadars', '<', 451);
			}
			if ($status == '1'){
				$monitoring = $monitoring
				->where('kadars', '>=', 451)
				->where('kadars', '<', 1000);
			}
			if ($status == '2'){
				$monitoring = $monitoring->where('kadars', '>=', 1000);
			}
		}

		$pdf = PDF::loadview('print.PrintDataMonitoring', ['monitoring' => $monitoring->get()]);
		return $pdf->stream();		
	}
}
