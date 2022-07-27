<?php

namespace app2u_articstudio\redsys\TPV\Redirect\Fields;

use app2u_articstudio\redsys\TPV\Common\Fields\Terminal as AbstractTerminal;

class Terminal extends AbstractTerminal
{
  
  public static function getOutputKey()
  {
    return 'Ds_Merchant_Terminal';
  }
  
}