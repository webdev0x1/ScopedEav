<?php
namespace Wisepet\ScopedEav\Controller\Adminhtml\Attribute;

class Index extends \Wisepet\ScopedEav\Controller\Adminhtml\AbstractAttribute
{
    /**
     * {@inheritdoc}
     */
    public function execute()
    {
        $resultPage = $this->createActionPage(__('Manage Attributes'));

        return $resultPage;
    }
}
