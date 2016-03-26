<?php
namespace Kr\Ws\Abstractions;

use Kr\Ws\Exception\ConnectionFailedException;
use Kr\Ws\Abstractions\Authentication\CredentialsInterface;

abstract class AbstractClient implements ClientInterface
{
    /** @var ServerInterface */
    protected $server;

    /**
     * @inheritdoc
     */
    public function getServer()
    {
        return $this->server;
    }

    /**
     * @inheritdoc
     */
    public function setServer(ServerInterface $server)
    {
        $this->server = $server;
    }

    /**
     * @inheritdoc
     */
    public function connect()
    {
        if(!$this->getServer() === null) {
            throw new ConnectionFailedException("Client is not connected to any server");
        }
        $authenticatedClient = $this->doConnect($this->getServer(), $this->getServer()->getCredentials());
        return $authenticatedClient;
    }

    /**
     * Override this method with your own connecting logic
     *
     * Must return an authenticated client
     *
     * @param ServerInterface $server
     * @param CredentialsInterface $credentials
     *
     * @return mixed
     */
    abstract protected function doConnect(ServerInterface $server, CredentialsInterface $credentials);
}