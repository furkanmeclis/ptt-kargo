<?php

namespace FurkanMeclis\PttKargo\Data;

class ekHizmetSorgulaResponse
{

    /**
     * @var OutputEkHizmet $return
     */
    protected $return = null;

    /**
     * @param OutputEkHizmet $return
     */
    public function __construct($return)
    {
      $this->return = $return;
    }

    /**
     * @return OutputEkHizmet
     */
    public function getReturn()
    {
      return $this->return;
    }

    /**
     * @param OutputEkHizmet $return
     * @return \FurkanMeclis\PttKargo\Data\ekHizmetSorgulaResponse
     */
    public function setReturn($return)
    {
      $this->return = $return;
      return $this;
    }

}
