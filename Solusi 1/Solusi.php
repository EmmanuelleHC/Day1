<?php
abstract class Hewan {
	public $nama,$darah=50,$jumlahKaki,$keahlian;
	public function __construct($nama)
	{
		$this->nama=$nama;
	}
	public function atraksi(){
		$str=$this->nama." sedang ".$this->keahlian;

		return $str;
	}
	abstract public function getInfoHewan();
	public function getInfo()
	{
		$str="Nama : $this->nama". "\n".
			 "Darah: $this->darah"."\n".
			 "Jumlah Kaki: $this->jumlahKaki"."\n".
			 "Keahlian: $this->keahlian"."\n";
		return $str;
	}

}

trait Fight{
	public $attackPower,$defensePower;
	public function serang($hewan){
		echo "$this->nama sedang menyerang $hewan->nama";
		echo "<br>";
		$hewan->diserang($this);
	}
	public function diserang($hewan){
		echo "$this->nama sedang diserang $hewan->nama";
		echo "<br>";
		$this->darah=$this->darah-($hewan->attackPower/$this->defensePower);
		echo "Darah $this->nama tersisa : $this->darah";
		echo "<br>";
	}
}

class Harimau extends Hewan{

	use Fight;
	public function __construct($nama){
		parent::__construct($nama);
		$this->jumlahKaki=4;
		$this->keahlian='lari cepat';
		$this->attackPower=7;
		$this->defensePower=8;

	}
	public function getInfoHewan(){
		$str="\n".parent::getInfo()."\n".
			 "Attack Power :$this->attackPower"."\n".
			 "Defense Power :$this->defensePower"."\n";
		return $str;
	}
}
class Elang extends Hewan{
	use Fight;
	public function __construct($nama){
		parent::__construct($nama);
		$this->jumlahKaki=2;
		$this->keahlian='terbang tinggi';
		$this->attackPower=10;
		$this->defensePower=5;

	}
	public function getInfoHewan(){
		$str="\n".parent::getInfo()."\n".
			 "Attack Power :$this->attackPower"."\n".
			 "Defense Power :$this->defensePower"."\n";
		return $str;
	}
}

$elang_1=new Elang("Elang Jawa");
$harimau_1=new Harimau("Harimau Sumatera");
echo $elang_1->nama;
echo "<br>";
echo $harimau_1->serang($elang_1);


?>