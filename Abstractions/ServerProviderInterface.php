<?php
namespace Kr\Ws\Abstractions;

/**
 * Provides the client a server to which they can connect
 *
 * Interface ServerProviderInterface
 * @package Kr\Ws\General
 */
interface ServerProviderInterface
{
    /**
     * Returns a server
     *
     * @return ServerInterface
     */
    public function getServer();
}