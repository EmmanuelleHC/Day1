<?php
abstract class Hewan extends Fight{
  public $nama;
  public $darah=50;
  public $jumlahKaki;
  public $keahlian;

  protected abstract function setNama($nama);
  protected abstract function getNama();
  protected abstract function setDarah($darah);
  protected abstract function getDarah();
  protected abstract function setJumlahKaki($jumlahKaki);
  protected abstract function getJumlahKaki();
  protected abstract function setKeahlian($keahlian);
  protected abstract function getKeahlian();
  protected abstract function atraksi();
}
?>