<?php

namespace app2u_articstudio\redsys\TPV\Webservice\Fields;

use app2u_articstudio\redsys\TPV\Common\Fields\Transaction as AbstractTransaction;

class Transaction extends AbstractTransaction
{
  
  public static function getOutputKey()
  {
    return 'DS_MERCHANT_TRANSACTIONTYPE';
  }
  
}