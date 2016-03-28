<?php
namespace Kr\Ws\Abstractions;

use Kr\Ws\Abstractions\Authentication\CredentialsInterface;

class AbstractServer implements ServerInterface
{
    /** @var CredentialsInterface */
    protected $credentials;

    /** @var string */
    protected $accessPoint;

    /**
     * AbstractServer constructor.
     *
     * @param $accessPoint
     * @param CredentialsInterface $credentials
     */
    public function __construct($accessPoint, CredentialsInterface $credentials)
    {
        $this->accessPoint = $accessPoint;
        $this->credentials = $credentials;
    }

    /**
     * @inheritdoc
     */
    public function getAccessPoint()
    {
        return $this->accessPoint;
    }

    /**
     * @inheritdoc
     */
    public function getCredentials()
    {
        return $this->credentials;
    }
}