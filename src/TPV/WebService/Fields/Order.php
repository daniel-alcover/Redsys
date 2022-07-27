<?php

namespace app2u_articstudio\redsys\TPV\Webservice\Fields;

use app2u_articstudio\redsys\TPV\Common\Fields\Order as AbstractOrder;

class Order extends AbstractOrder
{
  
  public static function getOutputKey()
  {
    return 'DS_MERCHANT_ORDER';
  }
  
}