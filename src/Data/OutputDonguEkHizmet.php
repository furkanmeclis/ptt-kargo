<?php

namespace FurkanMeclis\PttKargo\Data;

class OutputDonguEkHizmet
{

    /**
     * @var string $ek_hizmet_ad
     */
    protected $ek_hizmet_ad = null;

    /**
     * @var string $ek_hizmet_id
     */
    protected $ek_hizmet_id = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getEk_hizmet_ad()
    {
      return $this->ek_hizmet_ad;
    }

    /**
     * @param string $ek_hizmet_ad
     * @return \FurkanMeclis\PttKargo\Data\OutputDonguEkHizmet
     */
    public function setEk_hizmet_ad($ek_hizmet_ad)
    {
      $this->ek_hizmet_ad = $ek_hizmet_ad;
      return $this;
    }

    /**
     * @return string
     */
    public function getEk_hizmet_id()
    {
      return $this->ek_hizmet_id;
    }

    /**
     * @param string $ek_hizmet_id
     * @return \FurkanMeclis\PttKargo\Data\OutputDonguEkHizmet
     */
    public function setEk_hizmet_id($ek_hizmet_id)
    {
      $this->ek_hizmet_id = $ek_hizmet_id;
      return $this;
    }

}
