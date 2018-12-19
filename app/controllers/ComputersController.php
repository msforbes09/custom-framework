<?php

namespace App\Controllers;

class ComputersController
{
	public function index()
	{
		return view('computersIndex');
	}

	public function create()
	{
		return view('computersCreate');
	}
}