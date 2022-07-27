<?php

namespace app2u_articstudio\redsys\TPV\Redirect\Contracts;

use app2u_articstudio\redsys\TPV\Common\Contracts\TPV as TPVContract;

interface TPV extends TPVContract
{
  public function prepareForm();

  public function getForm();

  public function displayForm($print, $id, $name, $text, $cssclass);
}
