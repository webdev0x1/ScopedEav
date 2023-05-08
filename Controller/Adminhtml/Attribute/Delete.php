<?php
namespace Wisepet\ScopedEav\Controller\Adminhtml\Attribute;

use Magento\Framework\Exception\NoSuchEntityException;

class Delete extends \Wisepet\ScopedEav\Controller\Adminhtml\AbstractAttribute
{
    /**
     * {@inheritdoc}
     */
    public function execute()
    {
        try {
            $attribute = $this->getAttribute();

            if (!$attribute || !$attribute->getId()) {
                throw new NoSuchEntityException(__('Attribute does not exists'));
            }

            $attribute->delete();

            $this->messageManager->addSuccessMessage(__('Attribute has been deleted'));
            $response = $this->_redirect("*/*/index");
        } catch (\Exception $e) {
            $response = $this->getRedirectError($e->getMessage());
        }

        return $response;
    }
}
