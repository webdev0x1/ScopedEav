<?php
namespace Wisepet\ScopedEav\Controller\Adminhtml\Entity;

use Magento\Framework\Controller\ResultFactory;

class Reload extends \Wisepet\ScopedEav\Controller\Adminhtml\AbstractEntity
{
    /**
     * {@inheritdoc}
     */
    public function execute()
    {
        if (!$this->getRequest()->getParam('set')) {
            return $this->resultFactory->create(ResultFactory::TYPE_FORWARD)->forward('noroute');
        }

        $this->getEntity();

        $resultLayout = $this->resultFactory->create(ResultFactory::TYPE_LAYOUT);
        $resultLayout->getLayout()->getUpdate()->removeHandle('default');
        $resultLayout->setHeader('Content-Type', 'application/json', true);

        return $resultLayout;
    }
}
