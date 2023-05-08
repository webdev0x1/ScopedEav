<?php
namespace Wisepet\ScopedEav\Controller\Adminhtml\Set;

class Add extends \Wisepet\ScopedEav\Controller\Adminhtml\AbstractSet
{
    /**
     * {@inheritDoc}
     */
    public function execute()
    {
        $this->setTypeId();

        return $this->createActionPage(__('New Attribute Set'));
    }
}
