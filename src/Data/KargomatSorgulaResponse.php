<?php

namespace FurkanMeclis\PttKargo\Data;

class KargomatSorgulaResponse
{

    /**
     * @var OutputKargomatAktiflik $return
     */
    protected $return = null;

    /**
     * @param OutputKargomatAktiflik $return
     */
    public function __construct($return)
    {
      $this->return = $return;
    }

    /**
     * @return OutputKargomatAktiflik
     */
    public function getReturn()
    {
      return $this->return;
    }

    /**
     * @param OutputKargomatAktiflik $return
     * @return \FurkanMeclis\PttKargo\Data\KargomatSorgulaResponse
     */
    public function setReturn($return)
    {
      $this->return = $return;
      return $this;
    }

}
