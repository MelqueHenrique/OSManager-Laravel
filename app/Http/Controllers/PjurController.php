<?php namespace osmanager\Http\Controllers;

use osmanager\Http\Controllers\ClienteController;

class PjurController extends ClienteController {
	private $cnpj;

	public function __construct($nome, $email, $cnpj){
		parent::__construct($nome, $email);
		$this->cnpj = $cnpj;
	}

	public function getCpf(){
		return $this->cnpj;
	}

	function calculaImposto($preco){
		return $preco * 0.10;
	}
}