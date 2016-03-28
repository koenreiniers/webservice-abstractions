<?php
namespace Kr\Ws\Abstractions\Rest;

use Kr\Ws\Abstractions\ClientInterface;

interface RestClientInterface extends ClientInterface
{
    /**
     * GET request
     *
     * @param string $uri
     *
     * @return mixed
     */
    public function get($uri);

    /**
     * POST request
     *
     * @param string $uri
     * @param array $parameters
     *
     * @return mixed
     */
    public function post($uri, array $parameters = []);

    /**
     * PUT request
     *
     * @param string $uri
     * @param array $parameters
     *
     * @return mixed
     */
    public function put($uri, array $parameters = []);

    /**
     * DELETE request
     *
     * @param string $uri
     *
     * @return mixed
     */
    public function delete($uri);
}