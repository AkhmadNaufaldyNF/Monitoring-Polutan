<?php

namespace App\Http\Controllers;

use App\Monitoring;
use Illuminate\Http\Request;


class CRUDController extends Controller
{
 	public function index()
 	{
 		//
 	}

 	public function create()
   {
       return view('crud.tambah');
   }

    public function store(Request $request)
   {
   		$this -> validate($request, [
   			'kadars' => 'required'
   		]);

   		$monitoring = new Monitoring([
   			'kadars' => $request -> get('kadars'),
   		]);

   		$monitoring -> save();

   		return redirect()->route('crud-tambah')
   			->with('success', 'Data tersimpan');
   }
}
