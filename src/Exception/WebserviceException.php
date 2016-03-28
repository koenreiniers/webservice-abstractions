<?php
namespace Kr\Ws\Exception;

class WebserviceException extends \Exception
{
    /**
     * WebserviceException constructor.
     *
     * @param string $message
     * @param null $statusCode
     * @param \Exception|null $previous
     */
    public function __construct($message, $statusCode = null, \Exception $previous = null)
    {
        if($statusCode === null) {
            $statusCode = 500;
        }
        return parent::__construct($message, $statusCode, $previous);
    }
}