<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Monitoring;

use Carbon\Carbon;


class UserController extends Controller
{
	public function Index()
	{
		return view('admin.dashboard');
	}


	public function Table()
	{
		return view('table.table');
	}		
}