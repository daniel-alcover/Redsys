<?php

namespace app2u_articstudio\redsys\TPV\Webservice\Fields;

use app2u_articstudio\redsys\TPV\Common\Fields\CardExpire as AbstractCardExpire;

class CardExpire extends AbstractCardExpire
{
  
  public static function getOutputKey()
  {
    return 'DS_MERCHANT_EXPIRYDATE';
  }
  
}