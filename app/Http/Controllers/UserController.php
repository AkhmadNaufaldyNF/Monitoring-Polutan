<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
	// public function Index(){
	// 	return view('admin.adminlte', compact('content'));
	// }

	public function Index()
	{
		return view('admin.dashboard');
	}

	public function Table(){
		return view('table.table');
	}
}