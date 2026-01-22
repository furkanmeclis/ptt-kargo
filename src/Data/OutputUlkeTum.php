<?php

namespace FurkanMeclis\PttKargo\Data;

class OutputUlkeTum
{

    /**
     * @var OutputUlke[] $donguList
     */
    protected $donguList = null;

    /**
     * @var string $sonucAciklama
     */
    protected $sonucAciklama = null;

    /**
     * @var int $sonucKodu
     */
    protected $sonucKodu = null;

    /**
     * @var boolean $state
     */
    protected $state = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return OutputUlke[]
     */
    public function getDonguList()
    {
      return $this->donguList;
    }

    /**
     * @param OutputUlke[] $donguList
     * @return \FurkanMeclis\PttKargo\Data\OutputUlkeTum
     */
    public function setDonguList(array $donguList = null)
    {
      $this->donguList = $donguList;
      return $this;
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
     * @return \FurkanMeclis\PttKargo\Data\OutputUlkeTum
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
     * @return \FurkanMeclis\PttKargo\Data\OutputUlkeTum
     */
    public function setSonucKodu($sonucKodu)
    {
      $this->sonucKodu = $sonucKodu;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getState()
    {
      return $this->state;
    }

    /**
     * @param boolean $state
     * @return \FurkanMeclis\PttKargo\Data\OutputUlkeTum
     */
    public function setState($state)
    {
      $this->state = $state;
      return $this;
    }

}
