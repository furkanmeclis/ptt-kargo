<?php

namespace FurkanMeclis\PttKargo\Data;

class mahalleSorgula
{

    /**
     * @var InputMahalle $input
     */
    protected $input = null;

    /**
     * @param InputMahalle $input
     */
    public function __construct($input)
    {
      $this->input = $input;
    }

    /**
     * @return InputMahalle
     */
    public function getInput()
    {
      return $this->input;
    }

    /**
     * @param InputMahalle $input
     * @return \FurkanMeclis\PttKargo\Data\mahalleSorgula
     */
    public function setInput($input)
    {
      $this->input = $input;
      return $this;
    }

}
