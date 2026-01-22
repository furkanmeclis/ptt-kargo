<?php

namespace FurkanMeclis\PttKargo\Data;

class OutputKargomatDongu2
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
     * @var string $eposta
     */
    protected $eposta = null;

    /**
     * @var string $il_ad
     */
    protected $il_ad = null;

    /**
     * @var string $ilce_ad
     */
    protected $ilce_ad = null;

    /**
     * @var string $kargomat_ad
     */
    protected $kargomat_ad = null;

    /**
     * @var string $kargomat_adres
     */
    protected $kargomat_adres = null;

    /**
     * @var string $kargomat_id
     */
    protected $kargomat_id = null;

    /**
     * @var string $mahalle_ad
     */
    protected $mahalle_ad = null;

    
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
     * @return \FurkanMeclis\PttKargo\Data\OutputKargomatDongu2
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
     * @return \FurkanMeclis\PttKargo\Data\OutputKargomatDongu2
     */
    public function setEnlem($enlem)
    {
      $this->enlem = $enlem;
      return $this;
    }

    /**
     * @return string
     */
    public function getEposta()
    {
      return $this->eposta;
    }

    /**
     * @param string $eposta
     * @return \FurkanMeclis\PttKargo\Data\OutputKargomatDongu2
     */
    public function setEposta($eposta)
    {
      $this->eposta = $eposta;
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
     * @return \FurkanMeclis\PttKargo\Data\OutputKargomatDongu2
     */
    public function setIl_ad($il_ad)
    {
      $this->il_ad = $il_ad;
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
     * @return \FurkanMeclis\PttKargo\Data\OutputKargomatDongu2
     */
    public function setIlce_ad($ilce_ad)
    {
      $this->ilce_ad = $ilce_ad;
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
     * @return \FurkanMeclis\PttKargo\Data\OutputKargomatDongu2
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
     * @return \FurkanMeclis\PttKargo\Data\OutputKargomatDongu2
     */
    public function setKargomat_adres($kargomat_adres)
    {
      $this->kargomat_adres = $kargomat_adres;
      return $this;
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
     * @return \FurkanMeclis\PttKargo\Data\OutputKargomatDongu2
     */
    public function setKargomat_id($kargomat_id)
    {
      $this->kargomat_id = $kargomat_id;
      return $this;
    }

    /**
     * @return string
     */
    public function getMahalle_ad()
    {
      return $this->mahalle_ad;
    }

    /**
     * @param string $mahalle_ad
     * @return \FurkanMeclis\PttKargo\Data\OutputKargomatDongu2
     */
    public function setMahalle_ad($mahalle_ad)
    {
      $this->mahalle_ad = $mahalle_ad;
      return $this;
    }

}
