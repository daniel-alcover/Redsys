<?php

namespace app2u_articstudio\redsys\TPV\Webservice\Fields;

use app2u_articstudio\redsys\TPV\Common\Fields\Amount as AbstractAmount;

class Amount extends AbstractAmount
{

  public static function getOutputKey()
  {
    return 'DS_MERCHANT_AMOUNT';
  }

}
