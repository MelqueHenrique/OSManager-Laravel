<?php namespace osmanager\Http\Controllers;

use osmanager\Http\Controllers\ClienteController;

class PfisController extends ClienteController {

	private $cpf;
	private $preco;

	public function __construct($params){
		parent::__construct($params['nome'], $params['email']);
		$this->cpf = $params['cpf'];
		$this->preco = $params['preco'];
	}

	public function getCpf(){
		return $this->cpf;
	}

	function calculaImposto(){
		return $this->preco * 0.20;
	}
}
