<?php
spl_autoload_register(function ($class_name){
  include ''.$class_name.'.php';

});
Class Elang extends Hewan{
	public $jumlahKaki;
	public $keahlian;
	public $attackPower;
	public $defencePower;
	public $nama;
	public $darah;

	public function __construct($jumlahKaki,$keahlian,$attackPower,$defencePower){
		$this->jumlahKaki=$jumlahKaki;
		$this->keahlian=$keahlian;
		$this->attackPower=$attackPower;
		$this->defencePower=$defencePower;
		$this->darah=50;


		//$this->fight =new Fight;
	}

	public function class_name()
    {
        return  get_class($this);
    }
	public  function setNama($nama)
	{
		$this->nama=$nama;
	}
	public function getNama()
	{
		return $this->nama;
	}
	public  function setDarah($darah)
	{
		$this->darah=$darah;
	}
	public function getDarah()
	{
		return $this->darah;
	}
 
  	public function atraksi()
  	{
  		return $this->nama .' sedang '.$this->keahlian;
  	}
	public function setDefencePower($defencePower){
		$this->defencePower=$defencePower;
	}
	public function getDefencePower(){
		return $this->defencePower;
	}
	public function setAttackPower($attackPower){
		$this->attackPower=$attackPower;
	}
	public function getAttackPower(){
		return $this->attackPower;
	}
	public function setJumlahKaki($jumlahKaki){
		$this->jumlahKaki=$jumlahKaki;
	}
	public function getJumlahKaki(){
		return $this->jumlahKaki;
	}
	public function setKeahlian($keahlian){
		$this->keahlian=$keahlian;
	}
	public function getKeahlian(){
		return $this->keahlian;
	}
	public function diserang(Harimau $hewan1,Elang $hewan2){
  	echo " ". $hewan2->getNama().' sedang diserang '.$hewan1->getNama();
  	echo "<br>";
  	$hewan2->setDarah(($hewan2->getDarah()- ($hewan1->getAttackPower()/$hewan2->getDefencePower())));
  	echo "Sisa Darah Elang :".$hewan2->getDarah();
  	}
	public function getInfoHewan(Elang $elang){
		$str=" Class Name : {$elang->class_name()} "." <br>" .
			" Nama : {$elang->getNama()} "." <br>" .
			 " Darah : {$elang->getDarah()} "." <br>" . 
			  " Jumlah Kaki : {$elang->getJumlahKaki()} "." <br>". 
			   " Defence Power : {$elang->getDefencePower()} "." <br>".
			     " Attack Power : {$elang->getAttackPower()} "." <br>". 
			   " Atraksi : {$elang->atraksi()} "." <br>" 
			  ." Keahlian : {$elang->getKeahlian()}";
		return $str;
	}
	public function serang(Harimau $hewan1,Elang $hewan2){
  		echo "". $hewan2->getNama().' sedang menyerang '.$hewan1->getNama();
  		echo "<br>";
  		$this->diserang($hewan1,$hewan2);
  	}

	
}
?>