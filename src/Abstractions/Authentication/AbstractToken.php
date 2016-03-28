<?php
namespace Kr\Ws\Abstractions\Authentication;

use Kr\Ws\Abstractions\ClientInterface;

abstract class AbstractToken implements TokenInterface
{
    const DEFAULT_EXPIRATION_TIME = 3600;

    protected $client;
    protected $credentials;
    protected $authenticated;
    protected $expiresAt;

    public function __construct(ClientInterface $client, $expiresIn = self::DEFAULT_EXPIRATION_TIME)
    {
        $this->client = $client;
        $this->expiresAt = (new \DateTime())->modify("+{$expiresIn} seconds");
    }

    /**
     * @inheritdoc
     */
    public function setClient(ClientInterface $client)
    {
        $this->client = $client;
    }

    /**
     * @inheritdoc
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * @inheritdoc
     */
    public function isAuthenticated()
    {
        return $this->authenticated && !$this->isExpired();
    }

    /**
     * @inheritdoc
     */
    public function setAuthenticated($authenticated)
    {
        $this->authenticated = $authenticated;
    }

    /**
     * @inheritdoc
     */
    public function getCredentials()
    {
        return $this->credentials;
    }

    /**
     * @inheritdoc
     */
    public function eraseCredentials()
    {
        $this->credentials = null;
    }

    /**
     * Returns whether or not the token is expired
     *
     * @return boolean
     */
    public function isExpired()
    {
        return $this->expiresAt !== null && $this->expiresAt < new \DateTime();
    }
}