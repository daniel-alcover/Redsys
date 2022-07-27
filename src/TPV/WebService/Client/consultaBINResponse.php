<?php

namespace app2u_articstudio\redsys\TPV\WebService\Client;

class consultaBINResponse
{

    /**
     * @var string $consultaBINReturn
     */
    protected $consultaBINReturn = null;

    /**
     * @param string $consultaBINReturn
     */
    public function __construct($consultaBINReturn)
    {
      $this->consultaBINReturn = $consultaBINReturn;
    }

    /**
     * @return string
     */
    public function getConsultaBINReturn()
    {
      return $this->consultaBINReturn;
    }

    /**
     * @param string $consultaBINReturn
     * @return \app2u_articstudio\redsys\TPV\WebService\Client\consultaBINResponse
     */
    public function setConsultaBINReturn($consultaBINReturn)
    {
      $this->consultaBINReturn = $consultaBINReturn;
      return $this;
    }

}
