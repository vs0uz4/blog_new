<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AdminController extends Controller
{
	public function showHomePage()
	{
		//return view('admin.showHomePage');
		return 'ADMIN';
    }
}
