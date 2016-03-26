<?php
namespace Kr\Ws\Abstractions;

use Kr\Ws\Abstractions\Authentication\AuthenticationProviderInterface;
use Kr\Ws\Abstractions\ClientInterface;
use Kr\Ws\Abstractions\ServerProviderInterface;

interface ClientFactoryInterface
{
    /**
     * Provisions all over:
     * 1. You are provided a server through the server provider
     * 2. The server provides you with credentials
     * 3. The authentication provider provides you with an authenticated client
     *
     * @param ServerProviderInterface $serverProvider
     * @param AuthenticationProviderInterface $authenticationProvider
     *
     * @return ClientInterface
     */
    public static function create(ServerProviderInterface $serverProvider, AuthenticationProviderInterface $authenticationProvider);
}