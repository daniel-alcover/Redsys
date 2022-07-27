<?php

namespace app2u_articstudio\redsys\TPV\WebService\Client;

class SerClsWSEntradaService extends \SoapClient
{

  /**
   * @var array $classmap The defined classes
   */
  private static $classmap = array(
    'trataPeticion' => 'app2u_articstudio\\redsys\\TPV\\WebService\\Client\\trataPeticion',
    'trataPeticionResponse' => 'app2u_articstudio\\redsys\\TPV\\WebService\\Client\\trataPeticionResponse',
    'trataPeticion3DES' => 'app2u_articstudio\\redsys\\TPV\\WebService\\Client\\trataPeticion3DES',
    'trataPeticionResponse3DES' => 'app2u_articstudio\\redsys\\TPV\\WebService\\Client\\trataPeticionResponse3DES',
    'consultaDCC' => 'app2u_articstudio\\redsys\\TPV\\WebService\\Client\\consultaDCC',
    'consultaDCCResponse' => 'app2u_articstudio\\redsys\\TPV\\WebService\\Client\\consultaDCCResponse',
    'consultaBIN' => 'app2u_articstudio\\redsys\\TPV\\WebService\\Client\\consultaBIN',
    'consultaBINResponse' => 'app2u_articstudio\\redsys\\TPV\\WebService\\Client\\consultaBINResponse',
  );

  /**
   * @param array $options A array of config values
   * @param string $wsdl The wsdl file to use
   */
  public function __construct(array $options = array(), $wsdl = null)
  {

    foreach (self::$classmap as $key => $value)
    {
      if (!isset($options['classmap'][$key]))
      {
        $options['classmap'][$key] = $value;
      }
    }
    $options = array_merge(array(
      'features' => 1,
      ), $options);
    if (!$wsdl)
    {
      $wsdl = 'https://sis.redsys.es/sis/services/SerClsWSEntrada/wsdl/SerClsWSEntrada.wsdl';
    }
    parent::__construct($wsdl, $options);
  }

  /**
   * @param trataPeticion $parameters
   * @return trataPeticionResponse
   */
  public function trataPeticion(trataPeticion $parameters)
  {
    return $this->__soapCall('trataPeticion', array($parameters));
  }

  /**
   * @param trataPeticion3DES $parameters
   * @return trataPeticionResponse3DES
   */
  public function trataPeticion3DES(trataPeticion3DES $parameters)
  {
    return $this->__soapCall('trataPeticion3DES', array($parameters));
  }

  /**
   * @param consultaDCC $parameters
   * @return consultaDCCResponse
   */
  public function consultaDCC(consultaDCC $parameters)
  {
    return $this->__soapCall('consultaDCC', array($parameters));
  }

  /**
   * @param consultaBIN $parameters
   * @return consultaBINResponse
   */
  public function consultaBIN(consultaBIN $parameters)
  {
    return $this->__soapCall('consultaBIN', array($parameters));
  }

}
