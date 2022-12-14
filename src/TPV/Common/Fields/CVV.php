<?php

namespace app2u_articstudio\redsys\TPV\Common\Fields;

use app2u_articstudio\redsys\TPV\Common\Fields\Field;

abstract class CVV extends Field
{
  
  public static function getKey()
  {
    return 'cvv';
  }

  protected function normalize()
  {
    if ($this->isValid())
    {
      $value = intval($this->value);
      $this->normalized = str_pad($value, 3, '0', STR_PAD_LEFT);
    }
    else
    {
      $this->normalized = null;
    }
  }

  protected function validate()
  {
    $this->valid = is_numeric($this->value);
  }
  
}