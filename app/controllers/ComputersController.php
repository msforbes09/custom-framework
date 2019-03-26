<?php

namespace App\Controllers;

use App\Core\App;

class ComputersController
{
	public function index()
	{
		$computers = App::get('database')->selectAll('computers', 'order by userName');

		return view('computersIndex', compact('computers'));
	}

	public function create()
	{
		return view('computersCreate');
	}

	public function store()
	{
		$computer = $_REQUEST;
		$computer['withWbuster'] = $computer['withWbuster'] ? 1 : 0;
		$computer['withSkySea'] = $computer['withSkySea'] ? 1 : 0;

		App::get('database')->store('computers', $computer);

		redirect('/computers');
	}
}