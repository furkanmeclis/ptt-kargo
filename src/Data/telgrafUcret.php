<?php

namespace FurkanMeclis\PttKargo\Data;

class telgrafUcret
{

    /**
     * @var InputTelgrafUcret $input
     */
    protected $input = null;

    /**
     * @param InputTelgrafUcret $input
     */
    public function __construct($input)
    {
      $this->input = $input;
    }

    /**
     * @return InputTelgrafUcret
     */
    public function getInput()
    {
      return $this->input;
    }

    /**
     * @param InputTelgrafUcret $input
     * @return \FurkanMeclis\PttKargo\Data\telgrafUcret
     */
    public function setInput($input)
    {
      $this->input = $input;
      return $this;
    }

}
