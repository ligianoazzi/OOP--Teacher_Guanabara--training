<?php
class ContaBanco{

	public $numConta;
	protected $tipo;
	private $dono;
	private $saldo;
	private $status;



	public function getTipo(){
		return $this->tipo;
	}
	public function setTipo($tipo){
		$this->tipo = $tipo;
	}

	public function getDono(){
		return $this->dono;
	}
	public function setDono($dono){
		$this->dono = $dono;
	}	

	public function getSaldo(){
		return $this->saldo;
	}
	public function setSaldo($saldo){
		$this->saldo = $saldo;
	}

	public function getStatus(){
		return $this->status;
	}
	public function setStatus($status){
		$this->status = $status;
	}	




	public function abrirConta($dono, $tipo){

		$this->setStatus(true);

		if ( $tipo == 'CC' ){

			$this->setTipo('CC');
			$this->setSaldo(50.00);

		}else if( $tipo == 'CP' ){

			$this->setTipo('CP');
			$this->setSaldo(150.00);

		}

		$this->setDono($dono);
		echo "A conta foi aberta!";
		$this->exibeSaldo();
	} 

	public function fecharConta(){
		if ($this->getStatus() == false){
			echo "<br> esta conta ja esta fechada";
			return false;
		}

		if ( $this->getSaldo() > 0 ) {
			
			echo "<br> A conta possui saldo, impossivel fechar";

		}elseif( $this->getSaldo() < 0 ){

			echo "<br> A conta esta negativa, impossivel fechar.";

		}else{

			$this->setStatus(false);
			echo "<br> A conta foi fechada";
			
		}
	}

	public function depositar($valorDeposito){
		if ($this->getStatus() == false){
			echo "<br> esta conta esta fechada";
			return false;
		}
		$saldo = $this->getSaldo();
		$saldo = $saldo + $valorDeposito;
		$this->setSaldo($saldo);

        echo "<br> Deposito de ".$valorDeposito." realizado com sucesso";
        $this->exibeSaldo();
	}

	public function sacar($valorSacar){
		if ($this->getStatus() == false){
			echo "<br> esta conta esta fechada";
			return false;
		}
		$verifica = $this->verificaSePodeSacar($valorSacar);
		
		if($verifica == true){
			$this->saldo = $this->saldo - $valorSacar;
			echo "<br> Saque de ".$valorSacar." realizado com sucesso";
			$this->exibeSaldo();
		}else{
			echo "<br> Saque nao Permitido";
			$this->exibeSaldo();
		}
	}

	private function verificaSePodeSacar($valorSacar){
		if ($this->getStatus() == false){
			echo "<br> esta conta esta fechada";
			return false;
		}		
		$saldoVerifica = $this->saldo;

		$saldoVerifica = $saldoVerifica - $valorSacar;

		if ( $saldoVerifica < 0 ){
			return false;
		} else {
			return true;
		}

	}

	private function exibeSaldo(){
			echo "<br> Saldo atual: ".$this->saldo;
	}

	public function pagarMensal(){
		$tipo = $this->getTipo();
		if ($tipo == 'CC'){
			$saldo = $this->getSaldo();
			$saldo = $saldo - 12.00;
			$this->setSaldo($saldo);


			echo "<br> Mensalidade paga - Saldo Atual ".$this->saldo;
		}

		if ($tipo == 'CP'){
			$saldo = $this->getSaldo();
			$saldo = $saldo - 15.00;
			$this->setSaldo($saldo);
			echo "<br> Mensalidade paga - Saldo Atual ".$this->saldo;			
		}
	}

	public function __construct(){

		$this->setSaldo(0);
		$this->setStatus(false);	

	}


}