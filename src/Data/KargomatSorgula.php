<?php

namespace FurkanMeclis\PttKargo\Data;

class KargomatSorgula
{

    /**
     * @var InputKargomatId $input
     */
    protected $input = null;

    /**
     * @param InputKargomatId $input
     */
    public function __construct($input)
    {
      $this->input = $input;
    }

    /**
     * @return InputKargomatId
     */
    public function getInput()
    {
      return $this->input;
    }

    /**
     * @param InputKargomatId $input
     * @return \FurkanMeclis\PttKargo\Data\KargomatSorgula
     */
    public function setInput($input)
    {
      $this->input = $input;
      return $this;
    }

}
