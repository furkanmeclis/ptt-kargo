<?php

namespace FurkanMeclis\PttKargo\Data;

class ucretKargo2
{

    /**
     * @var InputKargoUcret2 $input
     */
    protected $input = null;

    /**
     * @param InputKargoUcret2 $input
     */
    public function __construct($input)
    {
      $this->input = $input;
    }

    /**
     * @return InputKargoUcret2
     */
    public function getInput()
    {
      return $this->input;
    }

    /**
     * @param InputKargoUcret2 $input
     * @return \FurkanMeclis\PttKargo\Data\ucretKargo2
     */
    public function setInput($input)
    {
      $this->input = $input;
      return $this;
    }

}
