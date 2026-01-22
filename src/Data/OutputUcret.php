<?php

namespace FurkanMeclis\PttKargo\Data;

class OutputUcret
{

    /**
     * @var string $sonucAciklama
     */
    protected $sonucAciklama = null;

    /**
     * @var int $sonucKodu
     */
    protected $sonucKodu = null;

    /**
     * @var string $ucret
     */
    protected $ucret = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getSonucAciklama()
    {
      return $this->sonucAciklama;
    }

    /**
     * @param string $sonucAciklama
     * @return \FurkanMeclis\PttKargo\Data\OutputUcret
     */
    public function setSonucAciklama($sonucAciklama)
    {
      $this->sonucAciklama = $sonucAciklama;
      return $this;
    }

    /**
     * @return int
     */
    public function getSonucKodu()
    {
      return $this->sonucKodu;
    }

    /**
     * @param int $sonucKodu
     * @return \FurkanMeclis\PttKargo\Data\OutputUcret
     */
    public function setSonucKodu($sonucKodu)
    {
      $this->sonucKodu = $sonucKodu;
      return $this;
    }

    /**
     * @return string
     */
    public function getUcret()
    {
      return $this->ucret;
    }

    /**
     * @param string $ucret
     * @return \FurkanMeclis\PttKargo\Data\OutputUcret
     */
    public function setUcret($ucret)
    {
      $this->ucret = $ucret;
      return $this;
    }

}
