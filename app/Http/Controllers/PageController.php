<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/**
* 
*/
class PageController extends Controller
{
	
	public function getIndex()
	{
		# code...
		return view('pages.dashboard');
		//return view('admin');
	}

	public function getFacebook(){
		return view('pages.sosmed.facebook');
	}

	public function getMainmedia(){
		return view('pages.mainmedia');
	}

	public function getAnalisis(){
		return view('pages.analisis');
	}

	public function getWilayah(){
		return view('pages.wilayah');
	}

	public function getAbout()
	{
		$name = 'Macbeth DeSade';
		return view('pages.about',['name'=>$name]);
	}

	public function getContact()
	{
		return view('pages.contact');
	}

	public function getCharts(){
		return view('ews.charts');
	}
}