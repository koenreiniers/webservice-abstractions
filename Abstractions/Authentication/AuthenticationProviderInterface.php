<?php
namespace Kr\Ws\Abstractions\Authentication;

use Kr\Ws\Exception\AuthenticationFailedException;

interface AuthenticationProviderInterface
{
    /**
     * Try to authenticate the token and return an authenticated version
     *
     * @param TokenInterface $token
     *
     * @return null|$this
     *
     * @throws AuthenticationFailedException
     */
    public function authenticate(TokenInterface $token);

    /**
     * Returns whether or not the given token is supported for authentication
     *
     * @param TokenInterface $token
     *
     * @return bool
     */
    public function supports(TokenInterface $token);
}