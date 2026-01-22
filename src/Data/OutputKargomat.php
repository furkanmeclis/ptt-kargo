<?php

namespace FurkanMeclis\PttKargo\Data;

class OutputKargomat
{

    /**
     * @var OutputKargomatDongu[] $dongu
     */
    protected $dongu = null;

    /**
     * @var string $sonucAciklama
     */
    protected $sonucAciklama = null;

    /**
     * @var int $sonucKodu
     */
    protected $sonucKodu = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return OutputKargomatDongu[]
     */
    public function getDongu()
    {
      return $this->dongu;
    }

    /**
     * @param OutputKargomatDongu[] $dongu
     * @return \FurkanMeclis\PttKargo\Data\OutputKargomat
     */
    public function setDongu(array $dongu = null)
    {
      $this->dongu = $dongu;
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
     * @return \FurkanMeclis\PttKargo\Data\OutputKargomat
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
     * @return \FurkanMeclis\PttKargo\Data\OutputKargomat
     */
    public function setSonucKodu($sonucKodu)
    {
      $this->sonucKodu = $sonucKodu;
      return $this;
    }

}
