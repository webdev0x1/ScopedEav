<?php
namespace Wisepet\ScopedEav\Controller\Adminhtml\Entity;

class NewAction extends \Wisepet\ScopedEav\Controller\Adminhtml\AbstractEntity
{
    /**
     * {@inheritDoc}
     */
    public function execute()
    {
        if (!$this->getRequest()->getParam('set')) {
            return $this->_forward('noroute');
        }

        $this->getEntity();

        return $this->createActionPage(__('New entity'));
    }
}
