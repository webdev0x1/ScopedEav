<?php
namespace Wisepet\ScopedEav\Controller\Adminhtml\Set;

class Delete extends \Wisepet\ScopedEav\Controller\Adminhtml\AbstractSet
{
    /**
     * {@inheritdoc}
     */
    public function execute()
    {
        try {
            $this->getAttributeSet()->delete();
            $this->messageManager->addSuccessMessage(__('The attribute set has been removed.'));
        } catch (\Exception $e) {
            $this->messageManager->addErrorMessage(__('We can\'t delete this set right now.'));
        }

        return $this->_redirect('*/*/index');
    }
}
