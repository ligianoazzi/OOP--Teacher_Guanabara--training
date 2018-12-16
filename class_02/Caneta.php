<?php
class Caneta {

	var $modelo;
	var $cor;
	var $ponta;
	var $carga;
	var $tampada;

	function rabiscar(){
		if($this->tampada == true){
			echo "<p> CANETA TAMPADA - Não é possível rabiscar </p>";
		}else{
			echo "<p> Estou rabiscando </p>";
		}
	}

	function tampar(){

	}

	function destampar(){
		echo "<p> A caneta foi destampada! </p>";
		$this->tampada = false;
	}


}
