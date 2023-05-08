<?php
namespace Wisepet\ScopedEav\Controller\Adminhtml\Attribute;

class NewAction extends \Wisepet\ScopedEav\Controller\Adminhtml\AbstractAttribute
{
    /**
     * {@inheritDoc}
     */
    public function execute()
    {
        return $this->_forward("edit");
    }
}
