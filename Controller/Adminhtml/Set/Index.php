<?php
namespace Wisepet\ScopedEav\Controller\Adminhtml\Set;

class Index extends \Wisepet\ScopedEav\Controller\Adminhtml\AbstractSet
{
    /**
     * {@inheritdoc}
     */
    public function execute()
    {
        $this->setTypeId();

        return $this->createActionPage(__('Attribute Sets'));
    }
}
