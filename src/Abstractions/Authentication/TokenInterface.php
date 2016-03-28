<?php
namespace Kr\Ws\Abstractions\Authentication;

use Kr\Ws\Abstractions\ClientInterface;

/**
 * Interface for a typical webservice token implementation. All you need is a client.
 *
 * Interface TokenInterface
 * @package Kr\Ws\Abstractions\Authentication
 */
interface TokenInterface
{
    /**
     * Returns whether or not the token is authenticated
     *
     * @return boolean
     */
    public function isAuthenticated();

    /**
     * Sets authenticated state
     *
     * @param boolean $authenticated
     */
    public function setAuthenticated($authenticated);

    /**
     * Returns a webservice client representation
     *
     * @return ClientInterface
     */
    public function getClient();

    /**
     * Sets the client
     *
     * @param ClientInterface $client
     */
    public function setClient(ClientInterface $client);

}