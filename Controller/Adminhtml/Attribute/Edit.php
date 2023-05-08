<?php
namespace Wisepet\ScopedEav\Controller\Adminhtml\Attribute;

class Edit extends \Wisepet\ScopedEav\Controller\Adminhtml\AbstractAttribute
{
    /**
     * {@inheritdoc}
     */
    public function execute()
    {
        try {
            $title     = __('New attribute');
            $attribute = $this->getAttribute();
            if ($attribute->getAttributeId()) {
                $title = __('Edit %1', $attribute->getAttributeCode());
            }
            $response = $this->createActionPage($title);
        } catch (\Exception $e) {
            $response = $this->getRedirectError($e->getMessage());
        }

        return $response;
    }
}
