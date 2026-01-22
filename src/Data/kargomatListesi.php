<?php

namespace FurkanMeclis\PttKargo\Data;

class kargomatListesi
{

    /**
     * @var InputKargomat $input
     */
    protected $input = null;

    /**
     * @param InputKargomat $input
     */
    public function __construct($input)
    {
      $this->input = $input;
    }

    /**
     * @return InputKargomat
     */
    public function getInput()
    {
      return $this->input;
    }

    /**
     * @param InputKargomat $input
     * @return \FurkanMeclis\PttKargo\Data\kargomatListesi
     */
    public function setInput($input)
    {
      $this->input = $input;
      return $this;
    }

}
