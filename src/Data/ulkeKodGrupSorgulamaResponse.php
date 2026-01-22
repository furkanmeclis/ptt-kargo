<?php

namespace FurkanMeclis\PttKargo\Data;

class ulkeKodGrupSorgulamaResponse
{

    /**
     * @var OutputUlkeTum $return
     */
    protected $return = null;

    /**
     * @param OutputUlkeTum $return
     */
    public function __construct($return)
    {
      $this->return = $return;
    }

    /**
     * @return OutputUlkeTum
     */
    public function getReturn()
    {
      return $this->return;
    }

    /**
     * @param OutputUlkeTum $return
     * @return \FurkanMeclis\PttKargo\Data\ulkeKodGrupSorgulamaResponse
     */
    public function setReturn($return)
    {
      $this->return = $return;
      return $this;
    }

}
