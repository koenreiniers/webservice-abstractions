<?php
namespace Kr\Ws\Abstractions\Soap;

use Kr\Ws\Abstractions\AbstractServer;

abstract class AbstractSoapServer extends AbstractServer implements SoapServerInterface
{
    /**
     * @inheritdoc
     */
    public function getWsdl()
    {
        return $this->accessPoint;
    }
}