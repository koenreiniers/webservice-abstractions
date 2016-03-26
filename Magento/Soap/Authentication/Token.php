<?php
namespace Kr\Ws\Magento\Soap\Authentication;

use Kr\Ws\Abstractions\Authentication\AbstractToken;

/**
 * Token which, when authenticated, can be used to access the Magento soap api through a Magento Client
 *
 * Class Token
 * @package Kr\Ws\Magento\Soap\Authentication
 */
class Token extends AbstractToken
{
    const DEFAULT_EXPIRATION_TIME = 3600;
}