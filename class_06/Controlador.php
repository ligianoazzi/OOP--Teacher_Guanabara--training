<?php 
interface controlador{

	public function ligar();
	public function desligar();
	public function abrirMenu();
	public function fecharMenu();
	public function maisVolume();
	public function menosVolume();
	public function ligarMudo();
	public function desligarMudo();
	public function play();
	public function pause();

}


/*
ligar()
desligar()
abrirMenu()
fecharMenu()
maisVolume()
menosVolume()
ligarMudo()
desligarMudo()
play()
pause()


the abstract function not implement the function, is just a model

interface is implemented in the classes

a interface e implementada (implements) nas classes, e estas classes devem sobrescrever todas as funcoes da interface
*/
