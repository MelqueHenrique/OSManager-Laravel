<?php namespace osmanager\Http\Controllers;

use osmanager\Http\Controllers\Controller;

abstract class ClienteController extends Controller {

	private $nome;
	private $email;
	
	abstract function calculaImposto();

	public function __construct($nome, $email){
		$this->nome = $nome;
		$this->email = $email;
	}

	public function getNome(){
		return ucwords(strtolower($this->nome));
	}

	public function getEmail(){
		return $this->email;
	}
	
	
}
