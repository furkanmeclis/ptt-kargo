<?php

namespace FurkanMeclis\PttKargo\Data;

class teslimSure
{

    /**
     * @var InputTeslimSure $input
     */
    protected $input = null;

    /**
     * @param InputTeslimSure $input
     */
    public function __construct($input)
    {
      $this->input = $input;
    }

    /**
     * @return InputTeslimSure
     */
    public function getInput()
    {
      return $this->input;
    }

    /**
     * @param InputTeslimSure $input
     * @return \FurkanMeclis\PttKargo\Data\teslimSure
     */
    public function setInput($input)
    {
      $this->input = $input;
      return $this;
    }

}
