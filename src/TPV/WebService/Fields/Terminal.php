<?php

namespace app2u_articstudio\redsys\TPV\Webservice\Fields;

use app2u_articstudio\redsys\TPV\Common\Fields\Terminal as AbstractTerminal;

class Terminal extends AbstractTerminal
{
  
  public static function getOutputKey()
  {
    return 'DS_MERCHANT_TERMINAL';
  }
  
}