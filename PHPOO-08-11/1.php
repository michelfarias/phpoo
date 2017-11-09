<?php
class Pincel
{
	public $cor;
	public $marca;

	public function escrever(){
		echo "Eu sou um pincel";
	}
}
 


$pincelAzul = new Pincel();
$pincelAzul->cor = "Ázul";
$pincelPreto = new Pincel();
$pincelPreto-> "Preto";

var_dump($pincelAzul);
$pincelAzul->escrever();
var_dump($pincelPreto);
$pincelPreto->escrever();

echo "teste";


?>