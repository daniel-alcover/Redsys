<?php

namespace app2u_articstudio\redsys\TPV\Webservice\Contracts;

use app2u_articstudio\redsys\TPV\Common\Contracts\TPV as TPVContract;

interface TPV extends TPVContract
{
  
  public function call();
  
}