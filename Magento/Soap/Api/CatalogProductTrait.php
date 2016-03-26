<?php
namespace Kr\Ws\Magento\Soap\Api;

trait CatalogProductTrait
{
    /**
     * Returns array of products
     *
     * @param array $filters
     * @param null $storeView
     *
     * @return array
     */
    public function catalogProductList(array $filters = [], $storeView = null)
    {
        return $this->__call("catalogProductList", $filters, $storeView);
    }
}