<?php
namespace Kr\Ws\Exception;

class ConnectionFailedException extends WebserviceException
{
    /**
     * ConnectionFailedException constructor.
     *
     * @param string $message
     * @param \Exception|null $previous
     */
    public function __construct($message = "Failed connecting the client to the server", \Exception $previous = null)
    {
        parent::__construct($message, 500, $previous);
    }
}