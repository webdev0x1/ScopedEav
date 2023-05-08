<?php
namespace Wisepet\ScopedEav\Ui\Component\Entity\Listing\Column;

use Wisepet\ScopedEav\Ui\Component\Model\Listing\Column\AbstractActions;

class Actions extends AbstractActions
{
    /**
     * Return request field name.
     *
     * @return string
     */
    protected function getRequestFieldName(): string
    {
        return 'id';
    }
}
