<?php

namespace app2u_articstudio\redsys\TPV\WebService\Client;

class consultaBIN
{

    /**
     * @var string $datoEntrada
     */
    protected $datoEntrada = null;

    /**
     * @param string $datoEntrada
     */
    public function __construct($datoEntrada)
    {
      $this->datoEntrada = $datoEntrada;
    }

    /**
     * @return string
     */
    public function getDatoEntrada()
    {
      return $this->datoEntrada;
    }

    /**
     * @param string $datoEntrada
     * @return \app2u_articstudio\redsys\TPV\WebService\Client\consultaBIN
     */
    public function setDatoEntrada($datoEntrada)
    {
      $this->datoEntrada = $datoEntrada;
      return $this;
    }

}
