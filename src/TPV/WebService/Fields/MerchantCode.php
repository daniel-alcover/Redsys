<?php

namespace app2u_articstudio\redsys\TPV\Webservice\Fields;

use app2u_articstudio\redsys\TPV\Common\Fields\MerchantCode as AbstractMerchantCode;

class MerchantCode extends AbstractMerchantCode
{
  
  public static function getOutputKey()
  {
    return 'DS_MERCHANT_MERCHANTCODE';
  }
  
}