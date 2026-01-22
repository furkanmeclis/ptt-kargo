<?php

namespace FurkanMeclis\PttKargo\Data;

class gonderiDurumAciklamaSorgulaResponse
{

    /**
     * @var Output $return
     */
    protected $return = null;

    /**
     * @param Output $return
     */
    public function __construct($return)
    {
      $this->return = $return;
    }

    /**
     * @return Output
     */
    public function getReturn()
    {
      return $this->return;
    }

    /**
     * @param Output $return
     * @return \FurkanMeclis\PttKargo\Data\gonderiDurumAciklamaSorgulaResponse
     */
    public function setReturn($return)
    {
      $this->return = $return;
      return $this;
    }

}
