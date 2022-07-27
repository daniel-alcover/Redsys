<?php

namespace app2u_articstudio\redsys\TPV\WebService\Client;

class trataPeticionResponse
{

    /**
     * @var string $trataPeticionReturn
     */
    protected $trataPeticionReturn = null;

    /**
     * @param string $trataPeticionReturn
     */
    public function __construct($trataPeticionReturn)
    {
      $this->trataPeticionReturn = $trataPeticionReturn;
    }

    /**
     * @return string
     */
    public function getTrataPeticionReturn()
    {
      return $this->trataPeticionReturn;
    }

    /**
     * @param string $trataPeticionReturn
     * @return \app2u_articstudio\redsys\TPV\WebService\Client\trataPeticionResponse
     */
    public function setTrataPeticionReturn($trataPeticionReturn)
    {
      $this->trataPeticionReturn = $trataPeticionReturn;
      return $this;
    }

}
