<?php

namespace app2u_articstudio\redsys\TPV\Redirect\Fields;

use app2u_articstudio\redsys\TPV\Common\Fields\MerchantCode as AbstractMerchantCode;

class MerchantCode extends AbstractMerchantCode
{
  
  public static function getOutputKey()
  {
    return 'Ds_Merchant_MerchantCode';
  }
  
}