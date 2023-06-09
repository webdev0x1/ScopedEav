<?php
namespace Wisepet\ScopedEav\Ui\Component\Entity\Edit\Button;

use Magento\Ui\Component\Control\Container;

class Save extends Generic
{
    /**
     * @var string
     */
    private $formName;

    /**
     * Constructor.
     *
     * @param \Magento\Framework\View\Element\UiComponent\Context $context  Context.
     * @param \Magento\Framework\Registry                         $registry Registry.
     * @param string                                              $formName Name of the form.
     */
    public function __construct(
        \Magento\Framework\View\Element\UiComponent\Context $context,
        \Magento\Framework\Registry $registry,
        $formName
    ) {
        parent::__construct($context, $registry);

        $this->formName = $formName;
    }

    /**
     * {@inheritdoc}
     */
    public function getButtonData()
    {
        if ($this->getEntity()->isReadonly()) {
            return [];
        }

        return [
            'label' => __('Save'),
            'class' => 'save primary',
            'data_attribute' => [
                'mage-init' => [
                    'buttonAdapter' => [
                        'actions' => [
                            ['targetName' => $this->formName, 'actionName' => 'save', 'params' => [false]],
                        ],
                    ],
                ],
            ],
            'class_name' => Container::SPLIT_BUTTON,
            'options' => $this->getOptions(),
            'sort_order' => 30,
        ];
    }

    /**
     * Retrieve options
     *
     * @return array
     */
    protected function getOptions()
    {
        $options[] = [
            'id_hard' => 'save_and_new',
            'label' => __('Save & New'),
            'data_attribute' => [
                'mage-init' => [
                    'buttonAdapter' => [
                        'actions' => [
                            ['targetName' => $this->formName, 'actionName' => 'save', 'params' => [true, ['back' => 'new']]],
                        ],
                    ],
                ],
            ],
        ];

        $options[] = [
            'id_hard' => 'save_and_close',
            'label' => __('Save & Close'),
            'data_attribute' => [
                'mage-init' => [
                    'buttonAdapter' => [
                        'actions' => [
                            ['targetName' => $this->formName, 'actionName' => 'save', 'params' => [true]],
                        ],
                    ],
                ],
            ],
        ];

        return $options;
    }
}
