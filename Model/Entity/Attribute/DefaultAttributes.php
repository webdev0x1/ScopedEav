<?php
namespace Wisepet\ScopedEav\Model\Entity\Attribute;

use Magento\Eav\Model\ResourceModel\Attribute\DefaultEntityAttributes\ProviderInterface;
use Wisepet\ScopedEav\Api\Data\EntityInterface;

class DefaultAttributes implements ProviderInterface
{
    /**
     * List of default entity attributes.
     *
     * @return array
     */
    public function getDefaultAttributes()
    {
        return [
            EntityInterface::CREATED_AT,
            EntityInterface::UPDATED_AT,
	    EntityInterface::CONTENT,
            EntityInterface::ATTRIBUTE_SET_ID,
        ];
    }
}
