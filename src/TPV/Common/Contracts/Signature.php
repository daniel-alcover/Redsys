<?php

namespace app2u_articstudio\redsys\TPV\Common\Contracts;

interface Signature
{
  
  public function getVersion();
  public function setVersion($version);
  public function getSecret();
  public function setSecret($secret);
  public function makeDataSignature($order, $data);
  public function checkDataSignature($order, $data, $response_signature);
  
}