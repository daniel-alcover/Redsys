<?php

namespace app2u_articstudio\redsys\TPV\Redirect\Fields;

use app2u_articstudio\redsys\TPV\Common\Fields\Currency as AbstractCurrency;

class Currency extends AbstractCurrency
{

  public static function getOutputKey()
  {
    return 'Ds_Merchant_Currency';
  }

}
