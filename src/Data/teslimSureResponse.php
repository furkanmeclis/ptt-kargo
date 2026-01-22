<?php

namespace FurkanMeclis\PttKargo\Data;

class teslimSureResponse
{

    /**
     * @var OutputTeslimSure $return
     */
    protected $return = null;

    /**
     * @param OutputTeslimSure $return
     */
    public function __construct($return)
    {
      $this->return = $return;
    }

    /**
     * @return OutputTeslimSure
     */
    public function getReturn()
    {
      return $this->return;
    }

    /**
     * @param OutputTeslimSure $return
     * @return \FurkanMeclis\PttKargo\Data\teslimSureResponse
     */
    public function setReturn($return)
    {
      $this->return = $return;
      return $this;
    }

}
