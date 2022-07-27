<?php

namespace app2u_articstudio\redsys\TPV\Common\Environment;

use app2u_articstudio\redsys\TPV\Common\Contracts\Environment as EnvironmentContract;

abstract class Environment implements EnvironmentContract
{

  protected $url;

  public function getURL()
  {
    return $this->url;
  }

  public function setURL($url)
  {
    $this->url = $url;
  }

}
