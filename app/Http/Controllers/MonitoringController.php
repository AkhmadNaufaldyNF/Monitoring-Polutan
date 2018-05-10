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
}
