<?php
namespace Kr\Ws\Magento\Soap\Api;

trait CatalogCategoryTrait
{
    /**
     * Returns the attribute id of the created category
     *
     * @param integer $parentId
     * @param array $categoryData
     * @param string|null $storeView
     *
     * @return integer
     */
    public function catalogCategoryCreate($parentId, array $categoryData, $storeView = null)
    {
        return $this->__call("catalogCategoryCreate", $parentId, $categoryData, $storeView);
    }

    /**
     * Returns true if the category has been updated
     *
     * @param integer $parentId
     * @param array $categoryData
     * @param string|null $storeView
     *
     * @return boolean
     */
    public function catalogCategoryUpdate($parentId, array $categoryData, $storeView = null)
    {
        return $this->__call("catalogCategoryUpdate", $parentId, $categoryData, $storeView);
    }

    /**
     * Returns true if the category has been moved
     *
     * @param integer $categoryId
     * @param integer $parentId
     * @param string|null $afterId
     *
     * @return boolean
     */
    public function catalogCategoryMove($categoryId, $parentId, $afterId = null)
    {
        return $this->__call("catalogCategoryMove", $categoryId, $parentId, $afterId);
    }

    /**
     * Returns true if the category has been deleted
     *
     * @param integer $categoryId
     *
     * @return boolean
     */
    public function catalogCategoryDelete($categoryId)
    {
        return $this->__call("catalogCategoryMove", $categoryId);
    }
}