<?php

namespace app2u_articstudio\redsys\TPV\WebService\Request;

use app2u_articstudio\redsys\TPV\WebService\Request\Request;
use app2u_articstudio\redsys\TPV\WebService\Fields\Transaction;

class AuthorizationRequest extends Request
{

  public function __construct($fields = [])
  {
    parent::__construct($fields);
    $this->addField(new Transaction(Transaction::TYPE_AUTHORIZATION));
  }

}
