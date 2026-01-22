<?php

namespace FurkanMeclis\PttKargo\Data;

class InputMahalle
{

    /**
     * @var string $il_id
     */
    protected $il_id = null;

    /**
     * @var string $ilce_id
     */
    protected $ilce_id = null;

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
    public function getIl_id()
    {
      return $this->il_id;
    }

    /**
     * @param string $il_id
     * @return \FurkanMeclis\PttKargo\Data\InputMahalle
     */
    public function setIl_id($il_id)
    {
      $this->il_id = $il_id;
      return $this;
    }

    /**
     * @return string
     */
    public function getIlce_id()
    {
      return $this->ilce_id;
    }

    /**
     * @param string $ilce_id
     * @return \FurkanMeclis\PttKargo\Data\InputMahalle
     */
    public function setIlce_id($ilce_id)
    {
      $this->ilce_id = $ilce_id;
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
     * @return \FurkanMeclis\PttKargo\Data\InputMahalle
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
     * @return \FurkanMeclis\PttKargo\Data\InputMahalle
     */
    public function setSifre($sifre)
    {
      $this->sifre = $sifre;
      return $this;
    }

}
