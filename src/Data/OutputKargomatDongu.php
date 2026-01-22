<?php

namespace FurkanMeclis\PttKargo\Data;

class OutputKargomatDongu
{

    /**
     * @var string $boylam
     */
    protected $boylam = null;

    /**
     * @var string $enlem
     */
    protected $enlem = null;

    /**
     * @var string $il_ad
     */
    protected $il_ad = null;

    /**
     * @var string $il_id
     */
    protected $il_id = null;

    /**
     * @var string $ilce_ad
     */
    protected $ilce_ad = null;

    /**
     * @var string $ilce_id
     */
    protected $ilce_id = null;

    /**
     * @var string $kargomat_ad
     */
    protected $kargomat_ad = null;

    /**
     * @var string $kargomat_adres
     */
    protected $kargomat_adres = null;

    /**
     * @var int $kargomat_id
     */
    protected $kargomat_id = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getBoylam()
    {
      return $this->boylam;
    }

    /**
     * @param string $boylam
     * @return \FurkanMeclis\PttKargo\Data\OutputKargomatDongu
     */
    public function setBoylam($boylam)
    {
      $this->boylam = $boylam;
      return $this;
    }

    /**
     * @return string
     */
    public function getEnlem()
    {
      return $this->enlem;
    }

    /**
     * @param string $enlem
     * @return \FurkanMeclis\PttKargo\Data\OutputKargomatDongu
     */
    public function setEnlem($enlem)
    {
      $this->enlem = $enlem;
      return $this;
    }

    /**
     * @return string
     */
    public function getIl_ad()
    {
      return $this->il_ad;
    }

    /**
     * @param string $il_ad
     * @return \FurkanMeclis\PttKargo\Data\OutputKargomatDongu
     */
    public function setIl_ad($il_ad)
    {
      $this->il_ad = $il_ad;
      return $this;
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
     * @return \FurkanMeclis\PttKargo\Data\OutputKargomatDongu
     */
    public function setIl_id($il_id)
    {
      $this->il_id = $il_id;
      return $this;
    }

    /**
     * @return string
     */
    public function getIlce_ad()
    {
      return $this->ilce_ad;
    }

    /**
     * @param string $ilce_ad
     * @return \FurkanMeclis\PttKargo\Data\OutputKargomatDongu
     */
    public function setIlce_ad($ilce_ad)
    {
      $this->ilce_ad = $ilce_ad;
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
     * @return \FurkanMeclis\PttKargo\Data\OutputKargomatDongu
     */
    public function setIlce_id($ilce_id)
    {
      $this->ilce_id = $ilce_id;
      return $this;
    }

    /**
     * @return string
     */
    public function getKargomat_ad()
    {
      return $this->kargomat_ad;
    }

    /**
     * @param string $kargomat_ad
     * @return \FurkanMeclis\PttKargo\Data\OutputKargomatDongu
     */
    public function setKargomat_ad($kargomat_ad)
    {
      $this->kargomat_ad = $kargomat_ad;
      return $this;
    }

    /**
     * @return string
     */
    public function getKargomat_adres()
    {
      return $this->kargomat_adres;
    }

    /**
     * @param string $kargomat_adres
     * @return \FurkanMeclis\PttKargo\Data\OutputKargomatDongu
     */
    public function setKargomat_adres($kargomat_adres)
    {
      $this->kargomat_adres = $kargomat_adres;
      return $this;
    }

    /**
     * @return int
     */
    public function getKargomat_id()
    {
      return $this->kargomat_id;
    }

    /**
     * @param int $kargomat_id
     * @return \FurkanMeclis\PttKargo\Data\OutputKargomatDongu
     */
    public function setKargomat_id($kargomat_id)
    {
      $this->kargomat_id = $kargomat_id;
      return $this;
    }

}
