<?php
namespace Kr\Ws\Abstractions\Soap;

use Kr\Ws\Abstractions\AbstractClient;
use Kr\Ws\Abstractions\Authentication\CredentialsInterface;
use Kr\Ws\Abstractions\ServerInterface;

/**
 * Class AbstractSoapClient
 * @package Kr\Ws\Abstractions\Soap\AbstractSoapClient
 */
abstract class AbstractSoapClient extends AbstractClient
{
    /** @var string */
    protected $sessionId;

    /** @var \SoapClient  */
    protected $soapClient;

    /**
     * @inheritdoc
     */
    protected function doConnect(ServerInterface $server, CredentialsInterface $credentials)
    {
        $this->soapClient = new \SoapClient($server->getAccessPoint(), ['cache_wsdl' => WSDL_CACHE_NONE]);
        return $this;
    }

    /**
     * Proxies function call through to the actual soap client
     *
     * @param string $name
     * @param array $arguments
     *
     * @return mixed
     */
    public function __call($name, $arguments)
    {
        return $this->soapClient->__call($name, $arguments);
    }
}