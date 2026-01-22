<?php

namespace FurkanMeclis\PttKargo\Data;

class kargomatListesiResponse
{

    /**
     * @var OutputKargomat $return
     */
    protected $return = null;

    /**
     * @param OutputKargomat $return
     */
    public function __construct($return)
    {
      $this->return = $return;
    }

    /**
     * @return OutputKargomat
     */
    public function getReturn()
    {
      return $this->return;
    }

    /**
     * @param OutputKargomat $return
     * @return \FurkanMeclis\PttKargo\Data\kargomatListesiResponse
     */
    public function setReturn($return)
    {
      $this->return = $return;
      return $this;
    }

}
