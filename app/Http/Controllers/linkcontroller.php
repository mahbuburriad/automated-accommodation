<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class linkcontroller extends Controller
{
	public function index()
	{
		return view('index');
	}

	public function login()
	{
		return view('login');
	}


	public function buy()
	{
		return view('buy');
	}

	

	public function rent()
	{
		return view('rent');
	}

	
	public function app_page()
	{
		return view('app_page');
	}
	public function pricing()
	{
		return view('pricing');
	}

	public function team()
	{
		return view('team');
	}
	public function about()
	{
		return view('about');
	}
	public function account()
	{
		return view('account');
	}
	public function editprofile()
	{
		return view('editprofile');
	}
    
    public function admin()
	{
		return view('admin');
	}

	public function home_details()
	{
		return view('home_details');
	}
}
