<?php
namespace Wisepet\ScopedEav\Block\Adminhtml\Set\Main;

class Formset extends \Magento\Catalog\Block\Adminhtml\Product\Attribute\Set\Main\Formset
{
    /**
     * {@inheritdoc}
     *
     * @SuppressWarnings(PHPMD.CamelCaseMethodName)
     */
    protected function _prepareForm()
    {
        parent::_prepareForm();

        $this->getForm()->setAction($this->getUrl('*/*/save'));
    }
}
