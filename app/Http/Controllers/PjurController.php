<?php namespace osmanager\Http\Controllers;

use osmanager\Http\Controllers\ClienteController;

class PjurController extends ClienteController {
	private $cnpj;
	private $preco;

	public function __construct($params){
		parent::__construct($params['nome'], $params['email']);
		$this->cnpj = $params['cnpj'];
		$this->preco = $params['preco'];
	}

	public function getCnpj(){
		return $this->cnpj;
	}

	function calculaImposto(){
		return $this->preco * 0.10;
	}
}