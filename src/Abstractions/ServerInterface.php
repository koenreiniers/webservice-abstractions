<?php
namespace Kr\Ws\Abstractions;

use Kr\Ws\Abstractions\Authentication\CredentialsInterface;

/**
 *
 * Interface ServerInterface
 * @package Kr\Ws\General
 */
interface ServerInterface
{
    /**
     * Returns the absolute access point to the server
     *
     * @return mixed
     */
    public function getAccessPoint();

    /**
     * Returns the credentials required to connect to the server
     *
     * @return CredentialsInterface
     */
    public function getCredentials();
}