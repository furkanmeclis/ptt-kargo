<?php

namespace FurkanMeclis\PttKargo\Data;

class ulkeKodGrupSorgulama
{

    /**
     * @var InputUlkeGrup $input
     */
    protected $input = null;

    /**
     * @param InputUlkeGrup $input
     */
    public function __construct($input)
    {
      $this->input = $input;
    }

    /**
     * @return InputUlkeGrup
     */
    public function getInput()
    {
      return $this->input;
    }

    /**
     * @param InputUlkeGrup $input
     * @return \FurkanMeclis\PttKargo\Data\ulkeKodGrupSorgulama
     */
    public function setInput($input)
    {
      $this->input = $input;
      return $this;
    }

}
