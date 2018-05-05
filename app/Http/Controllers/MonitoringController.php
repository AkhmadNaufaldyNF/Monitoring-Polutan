<?php

namespace App\Http\Controllers;

use App\Monitoring;
use Illuminate\Http\Request;


class MonitoringController extends Controller
{
	public function Index()
	{
		$monitoring = Monitoring::all();

		return view('table.table') -> with('monitoring',$monitoring);
	}
}
