<?php

namespace FurkanMeclis\PttKargo\Data;

class OutputTeslimSure
{

    /**
     * @var string $cut_off_time
     */
    protected $cut_off_time = null;

    /**
     * @var string $hata_aciklama
     */
    protected $hata_aciklama = null;

    /**
     * @var int $r_code
     */
    protected $r_code = null;

    /**
     * @var int $sql_code
     */
    protected $sql_code = null;

    /**
     * @var boolean $state
     */
    protected $state = null;

    /**
     * @var string $teslim_sure
     */
    protected $teslim_sure = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getCut_off_time()
    {
      return $this->cut_off_time;
    }

    /**
     * @param string $cut_off_time
     * @return \FurkanMeclis\PttKargo\Data\OutputTeslimSure
     */
    public function setCut_off_time($cut_off_time)
    {
      $this->cut_off_time = $cut_off_time;
      return $this;
    }

    /**
     * @return string
     */
    public function getHata_aciklama()
    {
      return $this->hata_aciklama;
    }

    /**
     * @param string $hata_aciklama
     * @return \FurkanMeclis\PttKargo\Data\OutputTeslimSure
     */
    public function setHata_aciklama($hata_aciklama)
    {
      $this->hata_aciklama = $hata_aciklama;
      return $this;
    }

    /**
     * @return int
     */
    public function getR_code()
    {
      return $this->r_code;
    }

    /**
     * @param int $r_code
     * @return \FurkanMeclis\PttKargo\Data\OutputTeslimSure
     */
    public function setR_code($r_code)
    {
      $this->r_code = $r_code;
      return $this;
    }

    /**
     * @return int
     */
    public function getSql_code()
    {
      return $this->sql_code;
    }

    /**
     * @param int $sql_code
     * @return \FurkanMeclis\PttKargo\Data\OutputTeslimSure
     */
    public function setSql_code($sql_code)
    {
      $this->sql_code = $sql_code;
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
     * @return \FurkanMeclis\PttKargo\Data\OutputTeslimSure
     */
    public function setState($state)
    {
      $this->state = $state;
      return $this;
    }

    /**
     * @return string
     */
    public function getTeslim_sure()
    {
      return $this->teslim_sure;
    }

    /**
     * @param string $teslim_sure
     * @return \FurkanMeclis\PttKargo\Data\OutputTeslimSure
     */
    public function setTeslim_sure($teslim_sure)
    {
      $this->teslim_sure = $teslim_sure;
      return $this;
    }

}
