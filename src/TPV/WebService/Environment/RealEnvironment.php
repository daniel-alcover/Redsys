<?php

namespace app2u_articstudio\redsys\TPV\Webservice\Environment;

use app2u_articstudio\redsys\TPV\Common\Environment\Environment as AbstractEnvironment;

class RealEnvironment extends AbstractEnvironment
{
  
  protected $url = 'https://sis.redsys.es/sis/services/SerClsWSEntrada';
  
}