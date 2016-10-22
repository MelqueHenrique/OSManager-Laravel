<?php namespace osmanager\Http\Controllers;

use osmanager\Http\Controllers\Controller;
use Illuminate\Support\Facades\Request;
use osmanager\Http\Requests\OsRequest;
use osmanager\Os;

class OsController extends Controller {

	public function __construct(){
		$this->middleware('auth', ['except'=>['lista']]);
	}

	public function index(){
		return view('home');
	}

	public function formNovo(){
		return view('os.cadastra');
	}

	public function cadastra(OsRequest $osRequest){
		$params = $osRequest->all();
		if(isset($params['pago'])) $params['pago'] = true;
		Os::create($params);
		return redirect()->action('OsController@formNovo')->withInput(Request::only('nome'));
	}

	public function lista(){

	}

}
