<?php
namespace Kr\Ws\Magento\Soap\Authentication;

use Kr\Ws\Abstractions\Authentication\CredentialsInterface;

/**
 * Default username + API key credentials for the Magento soap api
 *
 * Class Credentials
 * @package Kr\Ws\Magento\Soap\Authentication
 */
class Credentials implements CredentialsInterface
{
    protected $username;
    protected $key;

    /**
     * SoapApiCredentials constructor.
     *
     * @param string $username
     * @param string $key
     */
    public function __construct($username, $key)
    {
        $this->username = $username;
        $this->key = $key;
    }

    /**
     * Returns the username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Returns the api key
     *
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }


}