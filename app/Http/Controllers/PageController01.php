<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController01 extends Controller
{
	public function home(Request $req)
	{
		return view('zegen.pages.index' . config('app.zegen.home_layout'));
	}
	public function organization_details(Request $req)
	{
		return view('zegen.pages.organization' . config('app.zegen.home_layout'));
	}
}
