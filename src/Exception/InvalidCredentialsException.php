<?php
namespace Kr\Ws\Exception;

class InvalidCredentialsException extends WebserviceException
{
    /**
     * AuthenticationFailedException constructor.
     *
     * @param string $message
     * @param \Exception|null $previous
     */
    public function __construct($message, \Exception $previous = null)
    {
        $statusCode = 500;
        parent::__construct($message, $statusCode, $previous);
    }
}