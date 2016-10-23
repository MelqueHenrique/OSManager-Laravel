<?php namespace osmanager\Http\Controllers;

use osmanager\Http\Controllers\ClienteController;

class PfisController extends ClienteController {

	private $cpf;

	public function __construct($nome, $email, $cpf){
		parent::__construct($nome, $email);
		$this->cpf = $cpf;
	}

	public function getCpf(){
		return $this->cpf;
	}

	function calculaImposto($preco){
		return $preco * 0.20;
	}
}
