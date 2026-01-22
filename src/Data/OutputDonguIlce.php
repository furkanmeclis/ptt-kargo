<?php

namespace FurkanMeclis\PttKargo\Data;

class OutputDonguIlce
{

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

    
    public function __construct()
    {
    
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
     * @return \FurkanMeclis\PttKargo\Data\OutputDonguIlce
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
     * @return \FurkanMeclis\PttKargo\Data\OutputDonguIlce
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
     * @return \FurkanMeclis\PttKargo\Data\OutputDonguIlce
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
     * @return \FurkanMeclis\PttKargo\Data\OutputDonguIlce
     */
    public function setIlce_id($ilce_id)
    {
      $this->ilce_id = $ilce_id;
      return $this;
    }

}
