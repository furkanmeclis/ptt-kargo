<?php

namespace FurkanMeclis\PttKargo\Data;

class postaUcret
{

    /**
     * @var InputPostaUcret $input
     */
    protected $input = null;

    /**
     * @param InputPostaUcret $input
     */
    public function __construct($input)
    {
      $this->input = $input;
    }

    /**
     * @return InputPostaUcret
     */
    public function getInput()
    {
      return $this->input;
    }

    /**
     * @param InputPostaUcret $input
     * @return \FurkanMeclis\PttKargo\Data\postaUcret
     */
    public function setInput($input)
    {
      $this->input = $input;
      return $this;
    }

}
