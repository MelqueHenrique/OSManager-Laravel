<?php namespace osmanager\Http\Controllers;

use osmanager\Http\Controllers\Controller;

class OsController extends Controller {

	public function __construct(){
		$this->middleware('auth');
	}

	public function index(){
		return view('home');
	}

	public function formNovo(){

	}

	public function lista(){

	}

}