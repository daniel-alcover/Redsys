<?php

namespace app2u_articstudio\redsys\TPV\Redirect\Fields;

use app2u_articstudio\redsys\TPV\Common\Fields\Transaction as AbstractTransaction;

class Transaction extends AbstractTransaction
{
  
  public static function getOutputKey()
  {
    return 'Ds_Merchant_TransactionType';
  }
  
}