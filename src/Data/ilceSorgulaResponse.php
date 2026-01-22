<?php

namespace FurkanMeclis\PttKargo\Data;

class ilceSorgulaResponse
{

    /**
     * @var OutputIlce $return
     */
    protected $return = null;

    /**
     * @param OutputIlce $return
     */
    public function __construct($return)
    {
      $this->return = $return;
    }

    /**
     * @return OutputIlce
     */
    public function getReturn()
    {
      return $this->return;
    }

    /**
     * @param OutputIlce $return
     * @return \FurkanMeclis\PttKargo\Data\ilceSorgulaResponse
     */
    public function setReturn($return)
    {
      $this->return = $return;
      return $this;
    }

}
