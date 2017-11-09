<?php

class Carro{
	public $cor;
	public $fabricante;
	public $modelo;
	public $valor;
	public $velocidade=0;

	
	public function qualFabricante(){
		echo "A Fabricante do carro ".$this->fabricante;
		echo "<br>";
	}

	public function qualModelo(){
		echo "Modelo do carro ".$this->modelo;
		echo "<br>";
	}

	public function corVeiculo(){
		echo "Cor do carro é ".$this->cor;
		echo "<br>";
	}


	public function valor(){
		echo "O valor do carro: ".$this->valor;
		echo "<br>";
	}

	public function velocidade(){
		echo "A velocidade atual é: ".$this->velocidade;
		echo "<br>";
	}

	public function aumentaVelocidade($quantosKM){
		$this->velocidade += $quantosKM;
	}

	public function frear($quantosKM){
		$this->velocidade -= $quantosKM;
	}


}

$carro = new Carro();
	$carro->cor = "Preto";
	$carro->fabricante = "Hyundai";
	$carro->modelo = "Sonata";
	$carro->valor = "60.000,00";

	
	$carro->qualFabricante();
	$carro->qualModelo();
	$carro->corVeiculo();
	$carro->valor();
	echo "<br><br>";

	$carro->velocidade();
	$carro->aumentaVelocidade(20);
	$carro->velocidade();

	$carro->aumentaVelocidade(20);
	$carro->aumentaVelocidade(20);
	$carro->velocidade();

	$carro->frear(10);
	$carro->velocidade();


?>