<?php

abstract class Fight {
  private $attackPower;
  private $defencePower;
  abstract public function setAttackPower($attackPower);
  abstract public function getAttackPower();
  abstract public  function setDefencePower($defencePower);
  abstract public  function getDefencePower();
  public function serang(Harimau $hewan1,Elang $hewan2){
  	return $hewan1.' sedang menyerang '.$hewan2;
  }
  public function diserang(Harimau $hewan1,Elang $hewan2){
    return $hewan1.' sedang diserang '.$hewan2;
  }
  
}
?>