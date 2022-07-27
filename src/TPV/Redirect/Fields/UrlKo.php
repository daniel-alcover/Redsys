<?php

namespace app2u_articstudio\redsys\TPV\Redirect\Fields;

use app2u_articstudio\redsys\TPV\Common\Fields\UrlKo as AbstractUrlKo;

class UrlKo extends AbstractUrlKo
{
  
  public static function getOutputKey()
  {
    return 'Ds_Merchant_UrlKO';
  }
  
}