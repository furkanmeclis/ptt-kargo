<?php

namespace FurkanMeclis\PttKargo\Data;

class OutputDongu
{

    /**
     * @var string $gonderi_durum_aciklama
     */
    protected $gonderi_durum_aciklama = null;

    /**
     * @var string $gonderi_durum_id
     */
    protected $gonderi_durum_id = null;

    /**
     * @var string $ust_durum_ad
     */
    protected $ust_durum_ad = null;

    /**
     * @var string $ust_durum_id
     */
    protected $ust_durum_id = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getGonderi_durum_aciklama()
    {
      return $this->gonderi_durum_aciklama;
    }

    /**
     * @param string $gonderi_durum_aciklama
     * @return \FurkanMeclis\PttKargo\Data\OutputDongu
     */
    public function setGonderi_durum_aciklama($gonderi_durum_aciklama)
    {
      $this->gonderi_durum_aciklama = $gonderi_durum_aciklama;
      return $this;
    }

    /**
     * @return string
     */
    public function getGonderi_durum_id()
    {
      return $this->gonderi_durum_id;
    }

    /**
     * @param string $gonderi_durum_id
     * @return \FurkanMeclis\PttKargo\Data\OutputDongu
     */
    public function setGonderi_durum_id($gonderi_durum_id)
    {
      $this->gonderi_durum_id = $gonderi_durum_id;
      return $this;
    }

    /**
     * @return string
     */
    public function getUst_durum_ad()
    {
      return $this->ust_durum_ad;
    }

    /**
     * @param string $ust_durum_ad
     * @return \FurkanMeclis\PttKargo\Data\OutputDongu
     */
    public function setUst_durum_ad($ust_durum_ad)
    {
      $this->ust_durum_ad = $ust_durum_ad;
      return $this;
    }

    /**
     * @return string
     */
    public function getUst_durum_id()
    {
      return $this->ust_durum_id;
    }

    /**
     * @param string $ust_durum_id
     * @return \FurkanMeclis\PttKargo\Data\OutputDongu
     */
    public function setUst_durum_id($ust_durum_id)
    {
      $this->ust_durum_id = $ust_durum_id;
      return $this;
    }

}
