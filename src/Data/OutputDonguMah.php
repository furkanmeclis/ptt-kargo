<?php

namespace FurkanMeclis\PttKargo\Data;

class OutputDonguMah
{

    /**
     * @var string $mahalleAd
     */
    protected $mahalleAd = null;

    /**
     * @var string $mahalleKod
     */
    protected $mahalleKod = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getMahalleAd()
    {
      return $this->mahalleAd;
    }

    /**
     * @param string $mahalleAd
     * @return \FurkanMeclis\PttKargo\Data\OutputDonguMah
     */
    public function setMahalleAd($mahalleAd)
    {
      $this->mahalleAd = $mahalleAd;
      return $this;
    }

    /**
     * @return string
     */
    public function getMahalleKod()
    {
      return $this->mahalleKod;
    }

    /**
     * @param string $mahalleKod
     * @return \FurkanMeclis\PttKargo\Data\OutputDonguMah
     */
    public function setMahalleKod($mahalleKod)
    {
      $this->mahalleKod = $mahalleKod;
      return $this;
    }

}
