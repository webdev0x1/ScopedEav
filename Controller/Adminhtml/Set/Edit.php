<?php

namespace Wisepet\ScopedEav\Controller\Adminhtml\Set;

class Edit extends \Wisepet\ScopedEav\Controller\Adminhtml\AbstractSet
{
    /**
     * {@inheritdoc}
     */
    public function execute()
    {
        $this->setTypeId();
        try {
            $attributeSet = $this->getAttributeSet();
            $result = $this->createActionPage($attributeSet->getId() ? $attributeSet->getAttributeSetName() : __('New Set'));
        } catch (\Magento\Framework\Exception\NoSuchEntityException $e) {
            $this->messageManager->addErrorMessage(__('No such attribute set.'));
            $result = $this->resultRedirectFactory->create()->setPath('*/*/index');
        }

        return $result;
    }
}
