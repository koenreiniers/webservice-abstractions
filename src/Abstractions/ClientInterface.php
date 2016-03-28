<?php
namespace Kr\Ws\Abstractions;

use Kr\Ws\Abstractions\Authentication\CredentialsInterface;
use Kr\Ws\Exception\ConnectionFailedException;

interface ClientInterface
{
    /**
     * Sets the server to which the client will be connecting
     *
     * @param ServerInterface $server
     */
    public function setServer(ServerInterface $server);

    /**
     * Returns the server to which the client will connect
     *
     * @return ServerInterface
     */
    public function getServer();

    /**
     * Makes the actual connection to the server.
     * Returns an authenticated client
     *
     * @return ClientInterface
     *
     * @throws ConnectionFailedException
     */
    public function connect();
}