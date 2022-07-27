<?php

namespace app2u_articstudio\redsys\TPV\Redirect\Fields;

use app2u_articstudio\redsys\TPV\Common\Fields\MerchantName as AbstractMerchantName;

class MerchantName extends AbstractMerchantName
{
  
  public static function getOutputKey()
  {
    return 'Ds_Merchant_MerchantName';
  }
  
}