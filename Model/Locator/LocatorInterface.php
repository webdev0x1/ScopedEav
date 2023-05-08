<?php
namespace Wisepet\ScopedEav\Model\Locator;

interface LocatorInterface
{
    /**
     * Returns current entity.
     *
     * @return \Wisepet\ScopedEav\Api\Data\EntityInterface
     */
    public function getEntity();

    /**
     *
     * @return \Magento\Store\Api\Data\StoreInterface
     */
    public function getStore();
}
