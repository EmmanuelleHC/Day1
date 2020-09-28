<?php
Class Harimau extends Hewan {
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
	}
	public function class_name()
    {
        return  get_class($this);
    }
	public function atraksi()
  	{
  		return $this->nama .' sedang '.$this->keahlian;
  	}
	public  function setDarah($darah)
	{
		$this->darah=$darah;
	}

	public function getDarah()
	{
		return $this->darah;
	}
 
	public  function setNama($nama)
	{
		$this->nama=$nama;
	}
	public function getNama()
	{
		return $this->nama;
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

	
	public function serang(Harimau $hewan1,Elang $hewan2){
  		echo "". $hewan1->getNama().' sedang menyerang '.$hewan2->getNama();
  		echo "<br>";
  		$this->diserang($hewan1,$hewan2);
  	}
	public function diserang(Harimau $hewan1,Elang $hewan2){
  	
		echo " ". $hewan1->getNama().' sedang diserang '.$hewan2->getNama();
	  	echo "<br>";
	  	$hewan1->setDarah(($hewan1->getDarah()- ($hewan2->getAttackPower()/$hewan1->getDefencePower())));
  		echo "Sisa Darah Harimau :".$hewan1->getDarah();
  	}
	public function getInfoHewan(Harimau $harimau){
		$str= " Class Name : {$harimau->class_name()} "." <br>" . 
			" Nama : {$harimau->getNama()} "." <br>" .
			 " Darah : {$harimau->getDarah()} "." <br>" . 
			  " Jumlah Kaki : {$harimau->getJumlahKaki()} "." <br>". 
			   " Defence Power : {$harimau->getDefencePower()} "." <br>".
			     " Attack Power : {$harimau->getAttackPower()} "." <br>". 
			   " Atraksi : {$harimau->atraksi()} "." <br>" 
			  ." Keahlian : {$harimau->getKeahlian()}";
		return $str;
	}
}

?>