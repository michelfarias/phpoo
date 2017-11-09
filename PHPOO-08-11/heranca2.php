<?php
abstract class Animal {
	protected $qualAnimal;
	protected $quantasPatas;
	protected $cor;
	protected $dono;
	protected $bico;
	protected $pena;

	abstract function getDonoAnimal();
	abstract function getQualAnimal();
	abstract function getQuantasPatas();

	abstract function setDonoAnimal($dono);
	abstract function setQualAnimal($qualAnimal);
	abstract function setQuantasPatas($quantasPatas);

}

class QuatroPatas extends Animal {
	public function getDonoAnimal(){
		return $this->dono;
	}

	public function getQualAnimal(){
		return $this->qualAnimal;
	}

	public function getQuantasPatas(){
		return $this->quantasPatas;
	}

	public function setDonoAnimal($dono){
		$this->dono = $dono;
	}

	public function setQualAnimal($qualAnimal){
		$this->qualAnimal = $qualAnimal;
	}

	public function setQuantasPatas($qtd){
		$this->quantasPatas = $qtd;
	}

}

class DuasPatas extends Animal {
	public function getDonoAnimal(){
		return $this->dono;
	}

	public function getQualAnimal(){
		return $this->qualAnimal;
	}

	public function getQuantasPatas(){
		return $this->quantasPatas;
	}

	public function setDonoAnimal($dono){
		$this->dono = $dono;
	}

	public function setQualAnimal($qualAnimal){
		$this->qualAnimal = $qualAnimal;
	}

	public function setQuantasPatas($qtd){
		$this->quantasPatas = $qtd;
	}
}

class Cachorro extends QuatroPatas {
	public function temBico(){
		return false;
	}

	public function temPena(){
		return false;
	}
}

class Pato extends DuasPatas {
	
	public function temBico(){
		return true;
	}

	public function temPena(){
		return true;
	}
}

$cachorro = new Cachorro;
$cachorro->setDonoAnimal("Michel");
$cachorro->setQualAnimal("Cachorro");
$cachorro->setQuantasPatas(4);

echo $cachorro->getQualAnimal()."<br>";
echo $cachorro->getDonoAnimal()."<br>";
echo $cachorro->getQuantasPatas()."<br>";
if($cachorro->temPena()){
	echo "Tem pena<br>";
}else{
	echo "Nao tem pena<br>";
}
if($cachorro->temBico()){
	echo "Tem Bico<br>";
}else{
	echo "Nao tem bico<br><br><br>";
}

$pato = new Pato;
$pato->setDonoAnimal("Mayara");
$pato->setQualAnimal("Pato");
$pato->setQuantasPatas(2);

echo $pato->getQualAnimal()."<br>";
echo $pato->getDonoAnimal()."<br>";
echo $pato->getQuantasPatas()."<br>";
if($pato->temPena()){
	echo "Tem pena<br>";
}else{
	echo "Nao tem pena<br>";
}
if($pato->temBico()){
	echo "Tem Bico<br>";
}else{
	echo "Nao tem bico<br><br><br>";
}





?>