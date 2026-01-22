<?php

namespace FurkanMeclis\PttKargo\Data;

class InputUlkeGrup
{

    /**
     * @var int $apg
     */
    protected $apg = null;

    /**
     * @var int $fax
     */
    protected $fax = null;

    /**
     * @var int $koli
     */
    protected $koli = null;

    /**
     * @var string $kullanici
     */
    protected $kullanici = null;

    /**
     * @var string $sifre
     */
    protected $sifre = null;

    /**
     * @var int $taahhut
     */
    protected $taahhut = null;

    /**
     * @var int $turpex
     */
    protected $turpex = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getApg()
    {
      return $this->apg;
    }

    /**
     * @param int $apg
     * @return \FurkanMeclis\PttKargo\Data\InputUlkeGrup
     */
    public function setApg($apg)
    {
      $this->apg = $apg;
      return $this;
    }

    /**
     * @return int
     */
    public function getFax()
    {
      return $this->fax;
    }

    /**
     * @param int $fax
     * @return \FurkanMeclis\PttKargo\Data\InputUlkeGrup
     */
    public function setFax($fax)
    {
      $this->fax = $fax;
      return $this;
    }

    /**
     * @return int
     */
    public function getKoli()
    {
      return $this->koli;
    }

    /**
     * @param int $koli
     * @return \FurkanMeclis\PttKargo\Data\InputUlkeGrup
     */
    public function setKoli($koli)
    {
      $this->koli = $koli;
      return $this;
    }

    /**
     * @return string
     */
    public function getKullanici()
    {
      return $this->kullanici;
    }

    /**
     * @param string $kullanici
     * @return \FurkanMeclis\PttKargo\Data\InputUlkeGrup
     */
    public function setKullanici($kullanici)
    {
      $this->kullanici = $kullanici;
      return $this;
    }

    /**
     * @return string
     */
    public function getSifre()
    {
      return $this->sifre;
    }

    /**
     * @param string $sifre
     * @return \FurkanMeclis\PttKargo\Data\InputUlkeGrup
     */
    public function setSifre($sifre)
    {
      $this->sifre = $sifre;
      return $this;
    }

    /**
     * @return int
     */
    public function getTaahhut()
    {
      return $this->taahhut;
    }

    /**
     * @param int $taahhut
     * @return \FurkanMeclis\PttKargo\Data\InputUlkeGrup
     */
    public function setTaahhut($taahhut)
    {
      $this->taahhut = $taahhut;
      return $this;
    }

    /**
     * @return int
     */
    public function getTurpex()
    {
      return $this->turpex;
    }

    /**
     * @param int $turpex
     * @return \FurkanMeclis\PttKargo\Data\InputUlkeGrup
     */
    public function setTurpex($turpex)
    {
      $this->turpex = $turpex;
      return $this;
    }

}
