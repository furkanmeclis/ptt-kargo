<?php

namespace FurkanMeclis\PttKargo\Data;

class ilceSorgula
{

    /**
     * @var Input $input
     */
    protected $input = null;

    /**
     * @param Input $input
     */
    public function __construct($input)
    {
      $this->input = $input;
    }

    /**
     * @return Input
     */
    public function getInput()
    {
      return $this->input;
    }

    /**
     * @param Input $input
     * @return \FurkanMeclis\PttKargo\Data\ilceSorgula
     */
    public function setInput($input)
    {
      $this->input = $input;
      return $this;
    }

}
