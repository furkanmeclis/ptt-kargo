<?php

namespace FurkanMeclis\PttKargo\Data;

class InputPostaUcret
{

    /**
     * @var string $adres
     */
    protected $adres = null;

    /**
     * @var int $agirlik
     */
    protected $agirlik = null;

    /**
     * @var string $dagitimTip
     */
    protected $dagitimTip = null;

    /**
     * @var string $degerucret
     */
    protected $degerucret = null;

    /**
     * @var int $desi
     */
    protected $desi = null;

    /**
     * @var string $dosyatur
     */
    protected $dosyatur = null;

    /**
     * @var string $ekhizmet
     */
    protected $ekhizmet = null;

    /**
     * @var string $gonderiTip
     */
    protected $gonderiTip = null;

    /**
     * @var string $gonderiTur
     */
    protected $gonderiTur = null;

    /**
     * @var string $hesaplamaTipi
     */
    protected $hesaplamaTipi = null;

    /**
     * @var string $kullanici
     */
    protected $kullanici = null;

    /**
     * @var int $mesafe
     */
    protected $mesafe = null;

    /**
     * @var string $odemesekli
     */
    protected $odemesekli = null;

    /**
     * @var string $sifre
     */
    protected $sifre = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getAdres()
    {
      return $this->adres;
    }

    /**
     * @param string $adres
     * @return \FurkanMeclis\PttKargo\Data\InputPostaUcret
     */
    public function setAdres($adres)
    {
      $this->adres = $adres;
      return $this;
    }

    /**
     * @return int
     */
    public function getAgirlik()
    {
      return $this->agirlik;
    }

    /**
     * @param int $agirlik
     * @return \FurkanMeclis\PttKargo\Data\InputPostaUcret
     */
    public function setAgirlik($agirlik)
    {
      $this->agirlik = $agirlik;
      return $this;
    }

    /**
     * @return string
     */
    public function getDagitimTip()
    {
      return $this->dagitimTip;
    }

    /**
     * @param string $dagitimTip
     * @return \FurkanMeclis\PttKargo\Data\InputPostaUcret
     */
    public function setDagitimTip($dagitimTip)
    {
      $this->dagitimTip = $dagitimTip;
      return $this;
    }

    /**
     * @return string
     */
    public function getDegerucret()
    {
      return $this->degerucret;
    }

    /**
     * @param string $degerucret
     * @return \FurkanMeclis\PttKargo\Data\InputPostaUcret
     */
    public function setDegerucret($degerucret)
    {
      $this->degerucret = $degerucret;
      return $this;
    }

    /**
     * @return int
     */
    public function getDesi()
    {
      return $this->desi;
    }

    /**
     * @param int $desi
     * @return \FurkanMeclis\PttKargo\Data\InputPostaUcret
     */
    public function setDesi($desi)
    {
      $this->desi = $desi;
      return $this;
    }

    /**
     * @return string
     */
    public function getDosyatur()
    {
      return $this->dosyatur;
    }

    /**
     * @param string $dosyatur
     * @return \FurkanMeclis\PttKargo\Data\InputPostaUcret
     */
    public function setDosyatur($dosyatur)
    {
      $this->dosyatur = $dosyatur;
      return $this;
    }

    /**
     * @return string
     */
    public function getEkhizmet()
    {
      return $this->ekhizmet;
    }

    /**
     * @param string $ekhizmet
     * @return \FurkanMeclis\PttKargo\Data\InputPostaUcret
     */
    public function setEkhizmet($ekhizmet)
    {
      $this->ekhizmet = $ekhizmet;
      return $this;
    }

    /**
     * @return string
     */
    public function getGonderiTip()
    {
      return $this->gonderiTip;
    }

    /**
     * @param string $gonderiTip
     * @return \FurkanMeclis\PttKargo\Data\InputPostaUcret
     */
    public function setGonderiTip($gonderiTip)
    {
      $this->gonderiTip = $gonderiTip;
      return $this;
    }

    /**
     * @return string
     */
    public function getGonderiTur()
    {
      return $this->gonderiTur;
    }

    /**
     * @param string $gonderiTur
     * @return \FurkanMeclis\PttKargo\Data\InputPostaUcret
     */
    public function setGonderiTur($gonderiTur)
    {
      $this->gonderiTur = $gonderiTur;
      return $this;
    }

    /**
     * @return string
     */
    public function getHesaplamaTipi()
    {
      return $this->hesaplamaTipi;
    }

    /**
     * @param string $hesaplamaTipi
     * @return \FurkanMeclis\PttKargo\Data\InputPostaUcret
     */
    public function setHesaplamaTipi($hesaplamaTipi)
    {
      $this->hesaplamaTipi = $hesaplamaTipi;
      return $this;
    }

    /**
     * @return string
     */
    public function getKullanici()
    {
      return $this->kullanici;
    }

    /**
     * @param string $kullanici
     * @return \FurkanMeclis\PttKargo\Data\InputPostaUcret
     */
    public function setKullanici($kullanici)
    {
      $this->kullanici = $kullanici;
      return $this;
    }

    /**
     * @return int
     */
    public function getMesafe()
    {
      return $this->mesafe;
    }

    /**
     * @param int $mesafe
     * @return \FurkanMeclis\PttKargo\Data\InputPostaUcret
     */
    public function setMesafe($mesafe)
    {
      $this->mesafe = $mesafe;
      return $this;
    }

    /**
     * @return string
     */
    public function getOdemesekli()
    {
      return $this->odemesekli;
    }

    /**
     * @param string $odemesekli
     * @return \FurkanMeclis\PttKargo\Data\InputPostaUcret
     */
    public function setOdemesekli($odemesekli)
    {
      $this->odemesekli = $odemesekli;
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
     * @return \FurkanMeclis\PttKargo\Data\InputPostaUcret
     */
    public function setSifre($sifre)
    {
      $this->sifre = $sifre;
      return $this;
    }

}
