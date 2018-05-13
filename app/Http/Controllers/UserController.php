<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
	public function Index()
	{
		return view('admin.dashboard');
	}

	public function Statistik()
	{
		return view('statistik.statistik');
	}

	public function Table()
	{
		return view('table.table');
	}		
}
