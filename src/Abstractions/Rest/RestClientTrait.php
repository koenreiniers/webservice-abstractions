<?php
namespace Kr\Ws\Abstractions\Rest;

/**
 * Basic REST client interface implementation
 *
 * Class RestClientTrait
 * @package Kr\Ws\Abstractions\Rest
 */
trait RestClientTrait
{
    /**
     * GET request
     *
     * @param string $uri
     *
     * @return mixed
     */
    public function get($uri)
    {
        return $this->request("GET", $uri);
    }

    /**
     * POST request
     *
     * @param string $uri
     * @param array $parameters
     *
     * @return mixed
     */
    public function post($uri, array $parameters = [])
    {
        return $this->request("POST", $uri, $parameters);
    }

    /**
     * PUT request
     *
     * @param string $uri
     * @param array $parameters
     *
     * @return mixed
     */
    public function put($uri, array $parameters = [])
    {
        return $this->request("PUT", $uri, $parameters);
    }

    /**
     * DELETE request
     *
     * @param string $uri
     *
     * @return mixed
     */
    public function delete($uri)
    {
        return $this->request("DELETE", $uri);
    }

    /**
     * Any HTTP request
     *
     * @param string $method
     * @param string $uri
     * @param array $parameters
     *
     * @return mixed
     */
    abstract protected function request($method, $uri, array $parameters = []);
}