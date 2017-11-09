<?php

class Conta{
	protected $titular;
	protected $cpf;
	protected $saldo=0;
	protected $qtdSaques=0;

	public function verSaldo(){
		return $this->saldo;
	}
	

	public function sacar($valor){
		$this->saldo = ($this->saldo-$valor);
		$this->qtdSaques++;
		return $this->saldo;
	}

}


class Poupanca extends Conta 
{
	public $tarifa=0;
	public $limiteSaque=1;
	public $bonus=0.10;
	

	public function getTarifa(){
		return $this->tarifa;
	}

	public function getLimiteSaque(){
		return $this->limiteSaque;
	}

	public function depositar($valor){
		$this->saldo = ($this->saldo+$valor)+$this->bonus;
		return $this->saldo;
	}

	public function sacar($valor){
		$this->saldo = ($this->saldo-$valor)-$this->bonus;
		$this->qtdSaques++;
		return $this->saldo;
	}


}

class Corrente extends Conta
{
	public $tarifa=20.00;
	public $limiteSaque=10;

	public function depositar($valor){
		$this->saldo = ($this->saldo+$valor);
		return $this->saldo;
	}

	public function getTarifa(){
		return $this->tarifa;
	}

	public function getLimiteSaque(){
		return $this->limiteSaque;
	}

}

echo "<strong>Poupanca </strong>";
echo "<br>";
$contaPoupanca = new Poupanca();
echo "Saldo atual ".$contaPoupanca->verSaldo();
echo "<br>";
echo "Deposito feito + bonus ".$contaPoupanca->depositar(15.00);
echo "<br>";
echo "Deposito feito + bonus ".$contaPoupanca->depositar(11.00);
echo "<br>";
echo "Saque feito - bonus: ".$contaPoupanca->sacar(6.00);
echo "<br>";
echo "Limite Saque: ".$contaPoupanca->limiteSaque;
echo "<br>";
echo "Tarifa ".$contaPoupanca->tarifa;


echo "<br>";
echo "<br>";
echo "<strong>Corrente </strong>";
echo "<br>";
$Corrente = new Corrente();
echo "Saldo atual ".$Corrente->verSaldo();
echo "<br>";
echo "Deposito feito + bonus ".$Corrente->depositar(15.00);
echo "<br>";
echo "Deposito feito + bonus ".$Corrente->depositar(11.00);
echo "<br>";
echo "Saque feito - bonus: ".$Corrente->sacar(6.00);
echo "<br>";
echo "Limite Saque: ".$Corrente->limiteSaque;
echo "<br>";
echo "Tarifa ".$Corrente->tarifa;



?>