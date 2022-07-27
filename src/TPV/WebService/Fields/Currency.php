<?php

namespace app2u_articstudio\redsys\TPV\Webservice\Fields;

use app2u_articstudio\redsys\TPV\Common\Fields\Currency as AbstractCurrency;

class Currency extends AbstractCurrency
{

  public static function getOutputKey()
  {
    return 'DS_MERCHANT_CURRENCY';
  }

}
