<?php

namespace FurkanMeclis\PttKargo\Data;

class InputKargomatId
{

    /**
     * @var string $kargomat_id
     */
    protected $kargomat_id = null;

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
    public function getKargomat_id()
    {
      return $this->kargomat_id;
    }

    /**
     * @param string $kargomat_id
     * @return \FurkanMeclis\PttKargo\Data\InputKargomatId
     */
    public function setKargomat_id($kargomat_id)
    {
      $this->kargomat_id = $kargomat_id;
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
     * @return \FurkanMeclis\PttKargo\Data\InputKargomatId
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
     * @return \FurkanMeclis\PttKargo\Data\InputKargomatId
     */
    public function setSifre($sifre)
    {
      $this->sifre = $sifre;
      return $this;
    }

}
