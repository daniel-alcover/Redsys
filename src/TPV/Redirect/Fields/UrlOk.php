<?php

namespace app2u_articstudio\redsys\TPV\Redirect\Fields;

use app2u_articstudio\redsys\TPV\Common\Fields\UrlOk as AbstractUrlOk;

class UrlOk extends AbstractUrlOk
{
  
  public static function getOutputKey()
  {
    return 'Ds_Merchant_UrlOK';
  }
  
}