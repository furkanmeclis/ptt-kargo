<?php

namespace FurkanMeclis\PttKargo\Data;

class Input
{

    /**
     * @var string $kullanici
     */
    protected $kullanici = null;

    /**
     * @var string $sifre
     */
    protected $sifre = null;

    
    public function __construct()
    {
    
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
     * @return \FurkanMeclis\PttKargo\Data\Input
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
     * @return \FurkanMeclis\PttKargo\Data\Input
     */
    public function setSifre($sifre)
    {
      $this->sifre = $sifre;
      return $this;
    }

}
