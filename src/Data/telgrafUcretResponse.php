<?php

namespace FurkanMeclis\PttKargo\Data;

class telgrafUcretResponse
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
     * @return \FurkanMeclis\PttKargo\Data\telgrafUcretResponse
     */
    public function setReturn($return)
    {
      $this->return = $return;
      return $this;
    }

}
