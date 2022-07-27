<?php

namespace app2u_articstudio\redsys\TPV\Redirect\Request;

use app2u_articstudio\redsys\TPV\Redirect\Request\Request;
use app2u_articstudio\redsys\TPV\Redirect\Fields\Transaction;

class AuthorizationRequest extends Request
{

  public function __construct($fields = [])
  {
    parent::__construct($fields);
    $this->addField(new Transaction(Transaction::TYPE_AUTHORIZATION));
  }

}
