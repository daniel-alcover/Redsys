<?php

namespace app2u_articstudio\redsys\TPV\Redirect\Fields;

use app2u_articstudio\redsys\TPV\Common\Fields\MerchantUrl as AbstractMerchantUrl;

class MerchantUrl extends AbstractMerchantUrl
{
  
  public static function getOutputKey()
  {
    return 'Ds_Merchant_MerchantURL';
  }
  
}