<?php

namespace Wisepet\ScopedEav\Controller\Adminhtml\Attribute;

interface BuilderInterface
{
    /**
     * Init attribute from request.
     *
     * @param RequestInterface $request Request.
     *
     * @return \Wisepet\ScopedEav\Api\Data\AttributeInterface
     */
    public function build(\Magento\Framework\App\RequestInterface $request);
}
