<?php
namespace Wisepet\ScopedEav\Block\Adminhtml\Set\Toolbar;

class Main extends \Magento\Backend\Block\Template
{
    /**
     * {@inheritdoc}
     *
     * @SuppressWarnings(PHPMD.CamelCaseMethodName)
     */
    protected function _prepareLayout()
    {
        $this->getToolbar()->addChild(
            'addButton',
            'Magento\Backend\Block\Widget\Button',
            [
                'label' => __('Add Attribute Set'),
                'onclick' => 'setLocation(\'' . $this->getUrl('*/*/add') . '\')',
                'class' => 'add primary add-set',
            ]
        );

        return parent::_prepareLayout();
    }
}
