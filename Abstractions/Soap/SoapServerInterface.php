<?php
namespace Kr\Ws\Abstractions\Soap;

use Kr\Ws\Abstractions\ServerInterface;

interface SoapServerInterface extends ServerInterface
{
    /**
     * Returns the wsdl
     *
     * @return string
     */
    public function getWsdl();
}