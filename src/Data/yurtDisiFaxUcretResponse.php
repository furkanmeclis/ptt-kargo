<?php

namespace FurkanMeclis\PttKargo\Data;

class yurtDisiFaxUcretResponse
{

    /**
     * @var OutputUcret $return
     */
    protected $return = null;

    /**
     * @param OutputUcret $return
     */
    public function __construct($return)
    {
      $this->return = $return;
    }

    /**
     * @return OutputUcret
     */
    public function getReturn()
    {
      return $this->return;
    }

    /**
     * @param OutputUcret $return
     * @return \FurkanMeclis\PttKargo\Data\yurtDisiFaxUcretResponse
     */
    public function setReturn($return)
    {
      $this->return = $return;
      return $this;
    }

}
