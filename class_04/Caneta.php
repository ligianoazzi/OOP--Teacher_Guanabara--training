<?php
class Caneta {

	private $modelo;
	private $cor;
	private $ponta;
	private $tampada;

	// in php 7, is not possible to create a fuction with same name of the function for a construct method
	public function __construct($m, $c, $p){

		$this->modelo = $m;
		$this->cor = $c;
		$this->ponta = $p;
		$this->tampar();

	}

	public function tampar(){
		$this->tampada = true;
	}

	public function getModelo(){
		return $this->modelo;
	}
	public function setModelo($m){
		$this->modelo = $m;
	}	

	public function getPonta(){
		return $this->ponta;
	}	
	public function setPonta($p){
		$this->ponta = $p;
	}		


}

?>