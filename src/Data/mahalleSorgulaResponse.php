<?php

namespace FurkanMeclis\PttKargo\Data;

class mahalleSorgulaResponse
{

    /**
     * @var OutputMahalle $return
     */
    protected $return = null;

    /**
     * @param OutputMahalle $return
     */
    public function __construct($return)
    {
      $this->return = $return;
    }

    /**
     * @return OutputMahalle
     */
    public function getReturn()
    {
      return $this->return;
    }

    /**
     * @param OutputMahalle $return
     * @return \FurkanMeclis\PttKargo\Data\mahalleSorgulaResponse
     */
    public function setReturn($return)
    {
      $this->return = $return;
      return $this;
    }

}
