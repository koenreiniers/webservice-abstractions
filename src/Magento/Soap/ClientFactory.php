<?php
namespace Kr\Ws\Magento\Soap;

use Kr\Ws\Abstractions\ServerProviderInterface;
use Kr\Ws\Magento\Soap\Authentication\Token;
use Kr\Ws\Abstractions\Authentication\AuthenticationProviderInterface;
use Kr\Ws\Abstractions\ClientFactoryInterface;

class ClientFactory implements ClientFactoryInterface
{
    /**
     * @inheritdoc
     */
    public static function create(ServerProviderInterface $serverProvider, AuthenticationProviderInterface $authenticationProvider)
    {
        $client = new Client();

        $client->setServer($serverProvider->getServer());

        $token = $authenticationProvider->authenticate(new Token($client));

        /** @var Token $token */
        return $token->getClient();
    }
}