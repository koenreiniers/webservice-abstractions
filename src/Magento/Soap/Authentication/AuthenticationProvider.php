<?php
namespace Kr\Ws\Magento\Soap\Authentication;



use Kr\Ws\Abstractions\Authentication\AuthenticationProviderInterface;
use Kr\Ws\Abstractions\Authentication\TokenInterface;
use Kr\Ws\Exception\AuthenticationFailedException;
use Kr\Ws\Magento\Soap\Client;

class AuthenticationProvider implements AuthenticationProviderInterface
{
    /**
     * Authenticate by username/key
     *
     * @inheritdoc
     */
    public function authenticate(TokenInterface $token)
    {
        if(!$this->supports($token)) {
            return;
        }

        // Try to login
        $authenticatedClient = $token->getClient()->connect();
        if(!$authenticatedClient) {
            throw new AuthenticationFailedException("Magento authentication failed");
        }
        /** @var Client $authenticatedClient */

        // Return authenticated token
        $authenticatedToken = new Token($authenticatedClient);
        $authenticatedToken->setAuthenticated(true);
        return $authenticatedToken;
    }

    /**
     * This provider only supports Magento's soap tokens
     *
     * @inheritdoc
     */
    public function supports(TokenInterface $token)
    {
        return $token instanceof Token;
    }
}