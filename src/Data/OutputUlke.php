<?php

namespace FurkanMeclis\PttKargo\Data;

class OutputUlke
{

    /**
     * @var string $apg_beyan_adet
     */
    protected $apg_beyan_adet = null;

    /**
     * @var string $apg_boyut
     */
    protected $apg_boyut = null;

    /**
     * @var string $apg_max_agirlik
     */
    protected $apg_max_agirlik = null;

    /**
     * @var string $apg_teslim_sure
     */
    protected $apg_teslim_sure = null;

    /**
     * @var string $apg_ucret_grubu
     */
    protected $apg_ucret_grubu = null;

    /**
     * @var int $apg_ulkesi
     */
    protected $apg_ulkesi = null;

    /**
     * @var string $country
     */
    protected $country = null;

    /**
     * @var string $koli_odeme_sart_para_birimi
     */
    protected $koli_odeme_sart_para_birimi = null;

    /**
     * @var string $koli_odeme_sart_ust_limit
     */
    protected $koli_odeme_sart_ust_limit = null;

    /**
     * @var string $koli_ucak_beyan_adet
     */
    protected $koli_ucak_beyan_adet = null;

    /**
     * @var string $koli_ucak_degkon_ustlimit
     */
    protected $koli_ucak_degkon_ustlimit = null;

    /**
     * @var string $koli_ucak_ilk_kademe_ucret
     */
    protected $koli_ucak_ilk_kademe_ucret = null;

    /**
     * @var string $koli_ucak_kesir_ucret
     */
    protected $koli_ucak_kesir_ucret = null;

    /**
     * @var string $koli_ucak_max_agirlik
     */
    protected $koli_ucak_max_agirlik = null;

    /**
     * @var string $koli_ucak_teslim_sure
     */
    protected $koli_ucak_teslim_sure = null;

    /**
     * @var string $koli_ulke_aciklama
     */
    protected $koli_ulke_aciklama = null;

    /**
     * @var int $koli_ulkesi
     */
    protected $koli_ulkesi = null;

    /**
     * @var string $koli_yuzey_beyan_adet
     */
    protected $koli_yuzey_beyan_adet = null;

    /**
     * @var string $koli_yuzey_degkon_ust_limit
     */
    protected $koli_yuzey_degkon_ust_limit = null;

    /**
     * @var string $koli_yuzey_ilk_kademe_ucret
     */
    protected $koli_yuzey_ilk_kademe_ucret = null;

    /**
     * @var string $koli_yuzey_kesir_ucret
     */
    protected $koli_yuzey_kesir_ucret = null;

    /**
     * @var string $koli_yuzey_max_agirlik
     */
    protected $koli_yuzey_max_agirlik = null;

    /**
     * @var string $koli_yuzey_teslim_sure
     */
    protected $koli_yuzey_teslim_sure = null;

    /**
     * @var string $turpex_teslim_sure
     */
    protected $turpex_teslim_sure = null;

    /**
     * @var string $turpex_ulke_kod
     */
    protected $turpex_ulke_kod = null;

    /**
     * @var int $turpex_ulkesi
     */
    protected $turpex_ulkesi = null;

    /**
     * @var string $ulke_ad
     */
    protected $ulke_ad = null;

    /**
     * @var string $ulke_kod
     */
    protected $ulke_kod = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getApg_beyan_adet()
    {
      return $this->apg_beyan_adet;
    }

    /**
     * @param string $apg_beyan_adet
     * @return \FurkanMeclis\PttKargo\Data\OutputUlke
     */
    public function setApg_beyan_adet($apg_beyan_adet)
    {
      $this->apg_beyan_adet = $apg_beyan_adet;
      return $this;
    }

    /**
     * @return string
     */
    public function getApg_boyut()
    {
      return $this->apg_boyut;
    }

    /**
     * @param string $apg_boyut
     * @return \FurkanMeclis\PttKargo\Data\OutputUlke
     */
    public function setApg_boyut($apg_boyut)
    {
      $this->apg_boyut = $apg_boyut;
      return $this;
    }

    /**
     * @return string
     */
    public function getApg_max_agirlik()
    {
      return $this->apg_max_agirlik;
    }

    /**
     * @param string $apg_max_agirlik
     * @return \FurkanMeclis\PttKargo\Data\OutputUlke
     */
    public function setApg_max_agirlik($apg_max_agirlik)
    {
      $this->apg_max_agirlik = $apg_max_agirlik;
      return $this;
    }

    /**
     * @return string
     */
    public function getApg_teslim_sure()
    {
      return $this->apg_teslim_sure;
    }

    /**
     * @param string $apg_teslim_sure
     * @return \FurkanMeclis\PttKargo\Data\OutputUlke
     */
    public function setApg_teslim_sure($apg_teslim_sure)
    {
      $this->apg_teslim_sure = $apg_teslim_sure;
      return $this;
    }

    /**
     * @return string
     */
    public function getApg_ucret_grubu()
    {
      return $this->apg_ucret_grubu;
    }

    /**
     * @param string $apg_ucret_grubu
     * @return \FurkanMeclis\PttKargo\Data\OutputUlke
     */
    public function setApg_ucret_grubu($apg_ucret_grubu)
    {
      $this->apg_ucret_grubu = $apg_ucret_grubu;
      return $this;
    }

    /**
     * @return int
     */
    public function getApg_ulkesi()
    {
      return $this->apg_ulkesi;
    }

    /**
     * @param int $apg_ulkesi
     * @return \FurkanMeclis\PttKargo\Data\OutputUlke
     */
    public function setApg_ulkesi($apg_ulkesi)
    {
      $this->apg_ulkesi = $apg_ulkesi;
      return $this;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
      return $this->country;
    }

    /**
     * @param string $country
     * @return \FurkanMeclis\PttKargo\Data\OutputUlke
     */
    public function setCountry($country)
    {
      $this->country = $country;
      return $this;
    }

    /**
     * @return string
     */
    public function getKoli_odeme_sart_para_birimi()
    {
      return $this->koli_odeme_sart_para_birimi;
    }

    /**
     * @param string $koli_odeme_sart_para_birimi
     * @return \FurkanMeclis\PttKargo\Data\OutputUlke
     */
    public function setKoli_odeme_sart_para_birimi($koli_odeme_sart_para_birimi)
    {
      $this->koli_odeme_sart_para_birimi = $koli_odeme_sart_para_birimi;
      return $this;
    }

    /**
     * @return string
     */
    public function getKoli_odeme_sart_ust_limit()
    {
      return $this->koli_odeme_sart_ust_limit;
    }

    /**
     * @param string $koli_odeme_sart_ust_limit
     * @return \FurkanMeclis\PttKargo\Data\OutputUlke
     */
    public function setKoli_odeme_sart_ust_limit($koli_odeme_sart_ust_limit)
    {
      $this->koli_odeme_sart_ust_limit = $koli_odeme_sart_ust_limit;
      return $this;
    }

    /**
     * @return string
     */
    public function getKoli_ucak_beyan_adet()
    {
      return $this->koli_ucak_beyan_adet;
    }

    /**
     * @param string $koli_ucak_beyan_adet
     * @return \FurkanMeclis\PttKargo\Data\OutputUlke
     */
    public function setKoli_ucak_beyan_adet($koli_ucak_beyan_adet)
    {
      $this->koli_ucak_beyan_adet = $koli_ucak_beyan_adet;
      return $this;
    }

    /**
     * @return string
     */
    public function getKoli_ucak_degkon_ustlimit()
    {
      return $this->koli_ucak_degkon_ustlimit;
    }

    /**
     * @param string $koli_ucak_degkon_ustlimit
     * @return \FurkanMeclis\PttKargo\Data\OutputUlke
     */
    public function setKoli_ucak_degkon_ustlimit($koli_ucak_degkon_ustlimit)
    {
      $this->koli_ucak_degkon_ustlimit = $koli_ucak_degkon_ustlimit;
      return $this;
    }

    /**
     * @return string
     */
    public function getKoli_ucak_ilk_kademe_ucret()
    {
      return $this->koli_ucak_ilk_kademe_ucret;
    }

    /**
     * @param string $koli_ucak_ilk_kademe_ucret
     * @return \FurkanMeclis\PttKargo\Data\OutputUlke
     */
    public function setKoli_ucak_ilk_kademe_ucret($koli_ucak_ilk_kademe_ucret)
    {
      $this->koli_ucak_ilk_kademe_ucret = $koli_ucak_ilk_kademe_ucret;
      return $this;
    }

    /**
     * @return string
     */
    public function getKoli_ucak_kesir_ucret()
    {
      return $this->koli_ucak_kesir_ucret;
    }

    /**
     * @param string $koli_ucak_kesir_ucret
     * @return \FurkanMeclis\PttKargo\Data\OutputUlke
     */
    public function setKoli_ucak_kesir_ucret($koli_ucak_kesir_ucret)
    {
      $this->koli_ucak_kesir_ucret = $koli_ucak_kesir_ucret;
      return $this;
    }

    /**
     * @return string
     */
    public function getKoli_ucak_max_agirlik()
    {
      return $this->koli_ucak_max_agirlik;
    }

    /**
     * @param string $koli_ucak_max_agirlik
     * @return \FurkanMeclis\PttKargo\Data\OutputUlke
     */
    public function setKoli_ucak_max_agirlik($koli_ucak_max_agirlik)
    {
      $this->koli_ucak_max_agirlik = $koli_ucak_max_agirlik;
      return $this;
    }

    /**
     * @return string
     */
    public function getKoli_ucak_teslim_sure()
    {
      return $this->koli_ucak_teslim_sure;
    }

    /**
     * @param string $koli_ucak_teslim_sure
     * @return \FurkanMeclis\PttKargo\Data\OutputUlke
     */
    public function setKoli_ucak_teslim_sure($koli_ucak_teslim_sure)
    {
      $this->koli_ucak_teslim_sure = $koli_ucak_teslim_sure;
      return $this;
    }

    /**
     * @return string
     */
    public function getKoli_ulke_aciklama()
    {
      return $this->koli_ulke_aciklama;
    }

    /**
     * @param string $koli_ulke_aciklama
     * @return \FurkanMeclis\PttKargo\Data\OutputUlke
     */
    public function setKoli_ulke_aciklama($koli_ulke_aciklama)
    {
      $this->koli_ulke_aciklama = $koli_ulke_aciklama;
      return $this;
    }

    /**
     * @return int
     */
    public function getKoli_ulkesi()
    {
      return $this->koli_ulkesi;
    }

    /**
     * @param int $koli_ulkesi
     * @return \FurkanMeclis\PttKargo\Data\OutputUlke
     */
    public function setKoli_ulkesi($koli_ulkesi)
    {
      $this->koli_ulkesi = $koli_ulkesi;
      return $this;
    }

    /**
     * @return string
     */
    public function getKoli_yuzey_beyan_adet()
    {
      return $this->koli_yuzey_beyan_adet;
    }

    /**
     * @param string $koli_yuzey_beyan_adet
     * @return \FurkanMeclis\PttKargo\Data\OutputUlke
     */
    public function setKoli_yuzey_beyan_adet($koli_yuzey_beyan_adet)
    {
      $this->koli_yuzey_beyan_adet = $koli_yuzey_beyan_adet;
      return $this;
    }

    /**
     * @return string
     */
    public function getKoli_yuzey_degkon_ust_limit()
    {
      return $this->koli_yuzey_degkon_ust_limit;
    }

    /**
     * @param string $koli_yuzey_degkon_ust_limit
     * @return \FurkanMeclis\PttKargo\Data\OutputUlke
     */
    public function setKoli_yuzey_degkon_ust_limit($koli_yuzey_degkon_ust_limit)
    {
      $this->koli_yuzey_degkon_ust_limit = $koli_yuzey_degkon_ust_limit;
      return $this;
    }

    /**
     * @return string
     */
    public function getKoli_yuzey_ilk_kademe_ucret()
    {
      return $this->koli_yuzey_ilk_kademe_ucret;
    }

    /**
     * @param string $koli_yuzey_ilk_kademe_ucret
     * @return \FurkanMeclis\PttKargo\Data\OutputUlke
     */
    public function setKoli_yuzey_ilk_kademe_ucret($koli_yuzey_ilk_kademe_ucret)
    {
      $this->koli_yuzey_ilk_kademe_ucret = $koli_yuzey_ilk_kademe_ucret;
      return $this;
    }

    /**
     * @return string
     */
    public function getKoli_yuzey_kesir_ucret()
    {
      return $this->koli_yuzey_kesir_ucret;
    }

    /**
     * @param string $koli_yuzey_kesir_ucret
     * @return \FurkanMeclis\PttKargo\Data\OutputUlke
     */
    public function setKoli_yuzey_kesir_ucret($koli_yuzey_kesir_ucret)
    {
      $this->koli_yuzey_kesir_ucret = $koli_yuzey_kesir_ucret;
      return $this;
    }

    /**
     * @return string
     */
    public function getKoli_yuzey_max_agirlik()
    {
      return $this->koli_yuzey_max_agirlik;
    }

    /**
     * @param string $koli_yuzey_max_agirlik
     * @return \FurkanMeclis\PttKargo\Data\OutputUlke
     */
    public function setKoli_yuzey_max_agirlik($koli_yuzey_max_agirlik)
    {
      $this->koli_yuzey_max_agirlik = $koli_yuzey_max_agirlik;
      return $this;
    }

    /**
     * @return string
     */
    public function getKoli_yuzey_teslim_sure()
    {
      return $this->koli_yuzey_teslim_sure;
    }

    /**
     * @param string $koli_yuzey_teslim_sure
     * @return \FurkanMeclis\PttKargo\Data\OutputUlke
     */
    public function setKoli_yuzey_teslim_sure($koli_yuzey_teslim_sure)
    {
      $this->koli_yuzey_teslim_sure = $koli_yuzey_teslim_sure;
      return $this;
    }

    /**
     * @return string
     */
    public function getTurpex_teslim_sure()
    {
      return $this->turpex_teslim_sure;
    }

    /**
     * @param string $turpex_teslim_sure
     * @return \FurkanMeclis\PttKargo\Data\OutputUlke
     */
    public function setTurpex_teslim_sure($turpex_teslim_sure)
    {
      $this->turpex_teslim_sure = $turpex_teslim_sure;
      return $this;
    }

    /**
     * @return string
     */
    public function getTurpex_ulke_kod()
    {
      return $this->turpex_ulke_kod;
    }

    /**
     * @param string $turpex_ulke_kod
     * @return \FurkanMeclis\PttKargo\Data\OutputUlke
     */
    public function setTurpex_ulke_kod($turpex_ulke_kod)
    {
      $this->turpex_ulke_kod = $turpex_ulke_kod;
      return $this;
    }

    /**
     * @return int
     */
    public function getTurpex_ulkesi()
    {
      return $this->turpex_ulkesi;
    }

    /**
     * @param int $turpex_ulkesi
     * @return \FurkanMeclis\PttKargo\Data\OutputUlke
     */
    public function setTurpex_ulkesi($turpex_ulkesi)
    {
      $this->turpex_ulkesi = $turpex_ulkesi;
      return $this;
    }

    /**
     * @return string
     */
    public function getUlke_ad()
    {
      return $this->ulke_ad;
    }

    /**
     * @param string $ulke_ad
     * @return \FurkanMeclis\PttKargo\Data\OutputUlke
     */
    public function setUlke_ad($ulke_ad)
    {
      $this->ulke_ad = $ulke_ad;
      return $this;
    }

    /**
     * @return string
     */
    public function getUlke_kod()
    {
      return $this->ulke_kod;
    }

    /**
     * @param string $ulke_kod
     * @return \FurkanMeclis\PttKargo\Data\OutputUlke
     */
    public function setUlke_kod($ulke_kod)
    {
      $this->ulke_kod = $ulke_kod;
      return $this;
    }

}
