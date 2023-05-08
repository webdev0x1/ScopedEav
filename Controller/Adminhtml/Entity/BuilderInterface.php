<?php
namespace Wisepet\ScopedEav\Controller\Adminhtml\Entity;

interface BuilderInterface
{
    /**
     * Retrieve and init an entity from the request.
     *
     * @param \Magento\Framework\App\RequestInterface $request Request.
     *
     * @return \Wisepet\ScopedEav\Api\Data\EntityInterface
     */
    public function build(\Magento\Framework\App\RequestInterface $request);
}
