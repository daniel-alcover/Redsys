<?php

namespace app2u_articstudio\redsys\TPV\Webservice\Fields;

use app2u_articstudio\redsys\TPV\Common\Fields\CardNumber as AbstractCardNumber;

class CardNumber extends AbstractCardNumber
{
  
  public static function getOutputKey()
  {
    return 'DS_MERCHANT_PAN';
  }
  
}