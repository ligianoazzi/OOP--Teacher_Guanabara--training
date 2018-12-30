<?php 
class Lutador {

	 // atributos
	 private $nome;
	 private $nacionalidade;
	 private $idade;
	 private $altura;
	 private $peso ;
	 private $categoria;
	 private $vitorias;
	 private $derrotas;
	 private $empates;



	// metodos especiais
	public function __construct($no, $na, $id, $al, $pe, $vi, $de, $em){
		$this->nome = $no;
		$this->nacionalidade = $na;
		$this->idade = $id;
		$this->altura = $al;
		//$this->peso = $pe;
		$this->setPeso($pe); // assim, atualiza a classe
		$this->vitorias = $vi;
		$this->derrotas = $de;
		$this->empates = $em;
	
		$this->setCategoria();

	}


	public function getNome(){
		return $this->nome;
	}
	public function getNacionalidade(){
		return $this->nacionalidade;
	}
	public function getIdade(){
		return $this->idade;
	}
	public function getAltura(){
		return $this->altura;
	}
	public function getPeso(){
		return $this->peso;
	}
	public function getCategoria(){
		return $this->categoria;
	}
	public function getVitorias(){
		return $this->vitorias;
	}
	public function getDerrotas(){
		return $this->derrotas;
	}
	public function getEmpates(){
		return $this->empates;
	}

	public function setNome($nome){
		$this->nome = $nome;
	}
	public function setNacionalidade($nacionalidade){
		$this->nacionalidade = $nacionalidade;
	}
	public function setIdade($idade){
		$this->idade = $idade;
	}
	public function setAltura($altura){
		$this->altura = $altura;
	}
	public function setPeso($peso){
		$this->peso = $peso;
		$this->setCategoria();
	}
	private function setCategoria(){
		if( $this->peso < 52.0  ){
			$this->categoria = 'Invalido';
		}else if(  $this->peso <= 70.3   ) {
			$this->categoria = 'Leve';
		}else if(  $this->peso <= 83.9   ) {
			$this->categoria = 'Médio';
		}else if(  $this->peso <= 70.3   ) {
			$this->categoria = 'Pesado';
		}else{
			$this->categoria = 'Inválido';
		}

		
	}
	public function setVitorias($vitorias){
		$this->vitorias = $vitorias;
	}
	public function setDerrotas($derrotas){
		$this->derrotas = $derrotas;
	}
	public function setEmpates($empates){
		$this->empates = $empates;
	}

	// metodos
	public function apresentar(){
		echo "<p>------------------------</p>";
		echo "<p> O lutador " . $this->getNome(); 
		echo "<p> veio diretamente de " . $this->getNacionalidade();
		echo "<p> Tem " . $this->getIdade() . " anos"; 		
		echo "<p> Já venceu " . $this->getVitorias() . " vezes";
		echo "<p> E perdeu " . $this->getDerrotas() . " vezes";
		echo "<p> Sua categoria é " . $this->getCategoria(); 
	}
	public function status(){
		echo "<p>------------------------</p>";
		echo "<p>" . $this->getNome() . "é um peso" . $this->getCategoria(); 
		echo "<p> veio diretamente de " . $this->getNacionalidade();
		echo "<p> Tem " . $this->getIdade() . " anos"; 		
		echo "<p> Já venceu " . $this->getVitorias() . " vezes";
		echo "<p> E perdeu " . $this->getDerrotas() . " vezes";
	}
	public function ganharLuta(){
		$this->setVitorias( $this->getVitorias() + 1 );
	}
	public function perderLuta(){
		$this->setDerrotas( $this->getDerrotas() + 1 );
	}
	public function empatarLuta(){
		$this->setEmpates( $this->getEmpates() + 1 );
	}

}