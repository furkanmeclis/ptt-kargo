<?php

namespace FurkanMeclis\PttKargo\Data;

class InputTeslimSure
{

    /**
     * @var string $cikisIl
     */
    protected $cikisIl = null;

    /**
     * @var string $kullaniciAdi
     */
    protected $kullaniciAdi = null;

    /**
     * @var int $musteriNo
     */
    protected $musteriNo = null;

    /**
     * @var string $sifre
     */
    protected $sifre = null;

    /**
     * @var string $sorguTip
     */
    protected $sorguTip = null;

    /**
     * @var string $varisIl
     */
    protected $varisIl = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getCikisIl()
    {
      return $this->cikisIl;
    }

    /**
     * @param string $cikisIl
     * @return \FurkanMeclis\PttKargo\Data\InputTeslimSure
     */
    public function setCikisIl($cikisIl)
    {
      $this->cikisIl = $cikisIl;
      return $this;
    }

    /**
     * @return string
     */
    public function getKullaniciAdi()
    {
      return $this->kullaniciAdi;
    }

    /**
     * @param string $kullaniciAdi
     * @return \FurkanMeclis\PttKargo\Data\InputTeslimSure
     */
    public function setKullaniciAdi($kullaniciAdi)
    {
      $this->kullaniciAdi = $kullaniciAdi;
      return $this;
    }

    /**
     * @return int
     */
    public function getMusteriNo()
    {
      return $this->musteriNo;
    }

    /**
     * @param int $musteriNo
     * @return \FurkanMeclis\PttKargo\Data\InputTeslimSure
     */
    public function setMusteriNo($musteriNo)
    {
      $this->musteriNo = $musteriNo;
      return $this;
    }

    /**
     * @return string
     */
    public function getSifre()
    {
      return $this->sifre;
    }

    /**
     * @param string $sifre
     * @return \FurkanMeclis\PttKargo\Data\InputTeslimSure
     */
    public function setSifre($sifre)
    {
      $this->sifre = $sifre;
      return $this;
    }

    /**
     * @return string
     */
    public function getSorguTip()
    {
      return $this->sorguTip;
    }

    /**
     * @param string $sorguTip
     * @return \FurkanMeclis\PttKargo\Data\InputTeslimSure
     */
    public function setSorguTip($sorguTip)
    {
      $this->sorguTip = $sorguTip;
      return $this;
    }

    /**
     * @return string
     */
    public function getVarisIl()
    {
      return $this->varisIl;
    }

    /**
     * @param string $varisIl
     * @return \FurkanMeclis\PttKargo\Data\InputTeslimSure
     */
    public function setVarisIl($varisIl)
    {
      $this->varisIl = $varisIl;
      return $this;
    }

}
