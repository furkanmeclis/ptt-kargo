<?php

namespace FurkanMeclis\PttKargo\Data;

class Sorgu extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'mahalleSorgula' => 'FurkanMeclis\\PttKargo\\Data\\mahalleSorgula',
      'mahalleSorgulaResponse' => 'FurkanMeclis\\PttKargo\\Data\\mahalleSorgulaResponse',
      'ilceSorgula' => 'FurkanMeclis\\PttKargo\\Data\\ilceSorgula',
      'ilceSorgulaResponse' => 'FurkanMeclis\\PttKargo\\Data\\ilceSorgulaResponse',
      'kargomatListesi' => 'FurkanMeclis\\PttKargo\\Data\\kargomatListesi',
      'kargomatListesiResponse' => 'FurkanMeclis\\PttKargo\\Data\\kargomatListesiResponse',
      'postaUcret' => 'FurkanMeclis\\PttKargo\\Data\\postaUcret',
      'postaUcretResponse' => 'FurkanMeclis\\PttKargo\\Data\\postaUcretResponse',
      'gonderiDurumAciklamaSorgula' => 'FurkanMeclis\\PttKargo\\Data\\gonderiDurumAciklamaSorgula',
      'gonderiDurumAciklamaSorgulaResponse' => 'FurkanMeclis\\PttKargo\\Data\\gonderiDurumAciklamaSorgulaResponse',
      'telgrafUcret' => 'FurkanMeclis\\PttKargo\\Data\\telgrafUcret',
      'telgrafUcretResponse' => 'FurkanMeclis\\PttKargo\\Data\\telgrafUcretResponse',
      'ulkeKodGrupSorgulama' => 'FurkanMeclis\\PttKargo\\Data\\ulkeKodGrupSorgulama',
      'ulkeKodGrupSorgulamaResponse' => 'FurkanMeclis\\PttKargo\\Data\\ulkeKodGrupSorgulamaResponse',
      'KargomatSorgula' => 'FurkanMeclis\\PttKargo\\Data\\KargomatSorgula',
      'KargomatSorgulaResponse' => 'FurkanMeclis\\PttKargo\\Data\\KargomatSorgulaResponse',
      'teslimSure' => 'FurkanMeclis\\PttKargo\\Data\\teslimSure',
      'teslimSureResponse' => 'FurkanMeclis\\PttKargo\\Data\\teslimSureResponse',
      'ucretKargo2' => 'FurkanMeclis\\PttKargo\\Data\\ucretKargo2',
      'ucretKargo2Response' => 'FurkanMeclis\\PttKargo\\Data\\ucretKargo2Response',
      'kargoUcret' => 'FurkanMeclis\\PttKargo\\Data\\kargoUcret',
      'kargoUcretResponse' => 'FurkanMeclis\\PttKargo\\Data\\kargoUcretResponse',
      'yurtDisiFaxUcret' => 'FurkanMeclis\\PttKargo\\Data\\yurtDisiFaxUcret',
      'yurtDisiFaxUcretResponse' => 'FurkanMeclis\\PttKargo\\Data\\yurtDisiFaxUcretResponse',
      'ekHizmetSorgula' => 'FurkanMeclis\\PttKargo\\Data\\ekHizmetSorgula',
      'ekHizmetSorgulaResponse' => 'FurkanMeclis\\PttKargo\\Data\\ekHizmetSorgulaResponse',
      'InputMahalle' => 'FurkanMeclis\\PttKargo\\Data\\InputMahalle',
      'OutputMahalle' => 'FurkanMeclis\\PttKargo\\Data\\OutputMahalle',
      'OutputDonguMah' => 'FurkanMeclis\\PttKargo\\Data\\OutputDonguMah',
      'Input' => 'FurkanMeclis\\PttKargo\\Data\\Input',
      'OutputIlce' => 'FurkanMeclis\\PttKargo\\Data\\OutputIlce',
      'OutputDonguIlce' => 'FurkanMeclis\\PttKargo\\Data\\OutputDonguIlce',
      'InputKargomat' => 'FurkanMeclis\\PttKargo\\Data\\InputKargomat',
      'OutputKargomat' => 'FurkanMeclis\\PttKargo\\Data\\OutputKargomat',
      'OutputKargomatDongu' => 'FurkanMeclis\\PttKargo\\Data\\OutputKargomatDongu',
      'InputPostaUcret' => 'FurkanMeclis\\PttKargo\\Data\\InputPostaUcret',
      'OutputUcret' => 'FurkanMeclis\\PttKargo\\Data\\OutputUcret',
      'Output' => 'FurkanMeclis\\PttKargo\\Data\\Output',
      'OutputDongu' => 'FurkanMeclis\\PttKargo\\Data\\OutputDongu',
      'InputTelgrafUcret' => 'FurkanMeclis\\PttKargo\\Data\\InputTelgrafUcret',
      'InputUlkeGrup' => 'FurkanMeclis\\PttKargo\\Data\\InputUlkeGrup',
      'OutputUlkeTum' => 'FurkanMeclis\\PttKargo\\Data\\OutputUlkeTum',
      'OutputUlke' => 'FurkanMeclis\\PttKargo\\Data\\OutputUlke',
      'InputKargomatId' => 'FurkanMeclis\\PttKargo\\Data\\InputKargomatId',
      'OutputKargomatAktiflik' => 'FurkanMeclis\\PttKargo\\Data\\OutputKargomatAktiflik',
      'OutputKargomatDongu2' => 'FurkanMeclis\\PttKargo\\Data\\OutputKargomatDongu2',
      'InputTeslimSure' => 'FurkanMeclis\\PttKargo\\Data\\InputTeslimSure',
      'OutputTeslimSure' => 'FurkanMeclis\\PttKargo\\Data\\OutputTeslimSure',
      'InputKargoUcret2' => 'FurkanMeclis\\PttKargo\\Data\\InputKargoUcret2',
      'InputKargoUcret' => 'FurkanMeclis\\PttKargo\\Data\\InputKargoUcret',
      'OutputEkHizmet' => 'FurkanMeclis\\PttKargo\\Data\\OutputEkHizmet',
      'OutputDonguEkHizmet' => 'FurkanMeclis\\PttKargo\\Data\\OutputDonguEkHizmet',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = null)
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      $options = array_merge(array (
      'features' => 1,
      'connection_timeout' => 60,
    ), $options);
      if (!$wsdl) {
        $wsdl = 'https://pttws.ptt.gov.tr/PttBilgi/services/Sorgu?wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * @param teslimSure $parameters
     * @return teslimSureResponse
     */
    public function teslimSure(teslimSure $parameters)
    {
      return $this->__soapCall('teslimSure', array($parameters));
    }

    /**
     * @param kargoUcret $parameters
     * @return kargoUcretResponse
     */
    public function kargoUcret(kargoUcret $parameters)
    {
      return $this->__soapCall('kargoUcret', array($parameters));
    }

    /**
     * @param telgrafUcret $parameters
     * @return telgrafUcretResponse
     */
    public function telgrafUcret(telgrafUcret $parameters)
    {
      return $this->__soapCall('telgrafUcret', array($parameters));
    }

    /**
     * @param kargomatListesi $parameters
     * @return kargomatListesiResponse
     */
    public function kargomatListesi(kargomatListesi $parameters)
    {
      return $this->__soapCall('kargomatListesi', array($parameters));
    }

    /**
     * @param ilceSorgula $parameters
     * @return ilceSorgulaResponse
     */
    public function ilceSorgula(ilceSorgula $parameters)
    {
      return $this->__soapCall('ilceSorgula', array($parameters));
    }

    /**
     * @param ulkeKodGrupSorgulama $parameters
     * @return ulkeKodGrupSorgulamaResponse
     */
    public function ulkeKodGrupSorgulama(ulkeKodGrupSorgulama $parameters)
    {
      return $this->__soapCall('ulkeKodGrupSorgulama', array($parameters));
    }

    /**
     * @param KargomatSorgula $parameters
     * @return KargomatSorgulaResponse
     */
    public function KargomatSorgula(KargomatSorgula $parameters)
    {
      return $this->__soapCall('KargomatSorgula', array($parameters));
    }

    /**
     * @param gonderiDurumAciklamaSorgula $parameters
     * @return gonderiDurumAciklamaSorgulaResponse
     */
    public function gonderiDurumAciklamaSorgula(gonderiDurumAciklamaSorgula $parameters)
    {
      return $this->__soapCall('gonderiDurumAciklamaSorgula', array($parameters));
    }

    /**
     * @param ucretKargo2 $parameters
     * @return ucretKargo2Response
     */
    public function ucretKargo2(ucretKargo2 $parameters)
    {
      return $this->__soapCall('ucretKargo2', array($parameters));
    }

    /**
     * @param yurtDisiFaxUcret $parameters
     * @return yurtDisiFaxUcretResponse
     */
    public function yurtDisiFaxUcret(yurtDisiFaxUcret $parameters)
    {
      return $this->__soapCall('yurtDisiFaxUcret', array($parameters));
    }

    /**
     * @param postaUcret $parameters
     * @return postaUcretResponse
     */
    public function postaUcret(postaUcret $parameters)
    {
      return $this->__soapCall('postaUcret', array($parameters));
    }

    /**
     * @param ekHizmetSorgula $parameters
     * @return ekHizmetSorgulaResponse
     */
    public function ekHizmetSorgula(ekHizmetSorgula $parameters)
    {
      return $this->__soapCall('ekHizmetSorgula', array($parameters));
    }

    /**
     * @param mahalleSorgula $parameters
     * @return mahalleSorgulaResponse
     */
    public function mahalleSorgula(mahalleSorgula $parameters)
    {
      return $this->__soapCall('mahalleSorgula', array($parameters));
    }

}
