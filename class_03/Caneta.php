<?php
class Caneta {

	public $modelo;
	public $cor;
	private $ponta;
	protected $carga;
	protected $tampada;

	public function rabiscar(){
		if($this->tampada == true){
			echo "<p> CANETA TAMPADA - Não é possível rabiscar </p>";
		}else{
			echo "<p> Estou rabiscando </p>";
		}
	}

	public function tampar(){
		echo "<p> A caneta foi tampada! </p>";
		$this->tampada = true;
	}

	public function destampar(){
		echo "<p> A caneta foi destampada! </p>";
		$this->tampada = false;
	}


}
