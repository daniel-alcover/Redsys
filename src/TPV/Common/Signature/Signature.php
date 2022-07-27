<?php

namespace app2u_articstudio\redsys\TPV\Common\Signature;

use app2u_articstudio\redsys\TPV\Common\Contracts\Signature as SignatureContract;

abstract class Signature implements SignatureContract
{

  protected $version;
  private $secret;

  public function setVersion($version)
  {
    $this->version = $version;
  }

  public function getVersion()
  {
    return $this->version;
  }

  public function getSecret()
  {
    return $this->secret;
  }

  public function setSecret($secret)
  {
    $this->secret = $secret;
  }

}
