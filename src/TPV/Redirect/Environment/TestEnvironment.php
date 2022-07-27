<?php

namespace app2u_articstudio\redsys\TPV\Redirect\Environment;

use app2u_articstudio\redsys\TPV\Common\Environment\Environment as AbstractEnvironment;

class TestEnvironment extends AbstractEnvironment
{
  
  protected $url = 'https://sis-t.redsys.es:25443/sis/realizarPago';
  
}