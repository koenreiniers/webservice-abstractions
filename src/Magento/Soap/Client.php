<?php
namespace Kr\Ws\Magento\Soap;

use Kr\Ws\Abstractions\Authentication\CredentialsInterface;
use Kr\Ws\Abstractions\ServerInterface;
use Kr\Ws\Abstractions\Soap\AbstractSoapClient;

use Kr\Ws\Magento\Soap\Api\CatalogCategoryTrait;
use Kr\Ws\Magento\Soap\Api\CatalogProductTrait;

/**
 * SoapClient wrapper for Magento
 *
 * Class Client
 * @package Channel\Magento\Webservice\Soap
 */
class Client extends AbstractSoapClient
{
    use CatalogCategoryTrait;
    use CatalogProductTrait;

    /**
     * @inheritdoc
     */
    protected function doConnect(ServerInterface $server, CredentialsInterface $credentials)
    {
        parent::doConnect($server, $credentials);

        $this->sessionId = $this->soapClient->login($credentials->getUsername(), $credentials->getKey());
        return $this;
    }

    /**
     * Adds sessionId to the arguments and proxies it to the soap client
     *
     * @inheritdoc
     */
    public function __call($name, $arguments)
    {
        array_unshift($arguments, $this->sessionId);
        return parent::__call($name, $arguments);
    }
}