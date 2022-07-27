<?php

namespace app2u_articstudio\redsys\TPV\Redirect\Fields;

use app2u_articstudio\redsys\TPV\Common\Fields\CVV as AbstractCVV;

class CVV extends AbstractCVV
{
  
  public static function getOutputKey()
  {
    return 'Ds_Merchant_CVV2';
  }
  
}