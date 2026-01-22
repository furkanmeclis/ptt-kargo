<?php

namespace FurkanMeclis\PttKargo\Data;

class OutputKargomatAktiflik
{

    /**
     * @var OutputKargomatDongu2[] $dongu
     */
    protected $dongu = null;

    /**
     * @var boolean $kargomatAktif
     */
    protected $kargomatAktif = null;

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
     * @return OutputKargomatDongu2[]
     */
    public function getDongu()
    {
      return $this->dongu;
    }

    /**
     * @param OutputKargomatDongu2[] $dongu
     * @return \FurkanMeclis\PttKargo\Data\OutputKargomatAktiflik
     */
    public function setDongu(array $dongu = null)
    {
      $this->dongu = $dongu;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getKargomatAktif()
    {
      return $this->kargomatAktif;
    }

    /**
     * @param boolean $kargomatAktif
     * @return \FurkanMeclis\PttKargo\Data\OutputKargomatAktiflik
     */
    public function setKargomatAktif($kargomatAktif)
    {
      $this->kargomatAktif = $kargomatAktif;
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
     * @return \FurkanMeclis\PttKargo\Data\OutputKargomatAktiflik
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
     * @return \FurkanMeclis\PttKargo\Data\OutputKargomatAktiflik
     */
    public function setSonucKodu($sonucKodu)
    {
      $this->sonucKodu = $sonucKodu;
      return $this;
    }

}
