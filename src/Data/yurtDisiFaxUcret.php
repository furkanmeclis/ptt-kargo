<?php

namespace FurkanMeclis\PttKargo\Data;

class yurtDisiFaxUcret
{

    /**
     * @var InputKargoUcret $input
     */
    protected $input = null;

    /**
     * @param InputKargoUcret $input
     */
    public function __construct($input)
    {
      $this->input = $input;
    }

    /**
     * @return InputKargoUcret
     */
    public function getInput()
    {
      return $this->input;
    }

    /**
     * @param InputKargoUcret $input
     * @return \FurkanMeclis\PttKargo\Data\yurtDisiFaxUcret
     */
    public function setInput($input)
    {
      $this->input = $input;
      return $this;
    }

}
