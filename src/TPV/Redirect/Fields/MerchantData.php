<?php

namespace app2u_articstudio\redsys\TPV\Redirect\Fields;

use app2u_articstudio\redsys\TPV\Common\Fields\MerchantData as AbstractMerchantData;

class MerchantData extends AbstractMerchantData
{
  
  public static function getOutputKey()
  {
    return 'Ds_Merchant_MerchantData';
  }
  
}