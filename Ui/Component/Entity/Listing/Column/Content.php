<?php
namespace Wisepet\ScopedEav\Ui\Component\Entity\Listing\Column;

use Magento\Ui\Component\Listing\Columns\Column;

class Content extends Column
{


    /**
     * @var \Magento\Framework\UrlInterface
     */
    private $urlBuilder;

    /**
     * Constructor.
     *
     * @param \Magento\Framework\View\Element\UiComponent\ContextInterface $context            Context.
     * @param \Magento\Framework\View\Element\UiComponentFactory           $uiComponentFactory UI Components factory.
     * @param \Magento\Framework\UrlInterface                              $urlBuilder         URL Builder.
     * @param array                                                        $components         UI Components.
     * @param array                                                        $data               Additional data.
     */
    public function __construct(
        \Magento\Framework\View\Element\UiComponent\ContextInterface $context,
        \Magento\Framework\View\Element\UiComponentFactory $uiComponentFactory,
        \Magento\Framework\UrlInterface $urlBuilder,
        array $components = [],
        array $data = []
    ) {
        $this->urlBuilder = $urlBuilder;
        parent::__construct($context, $uiComponentFactory, $components, $data);
    }

    /**
     * Prepare action column content.
     *
     * @param array $dataSource Row data.
     *
     * @return array
     */
    public function prepareDataSource(array $dataSource)
    {
        if (isset($dataSource['data']['items'])) {
            foreach ($dataSource['data']['items'] as &$item) {
                    $item[$this->getData('name')] = strlen($item['content']) > 50 ? substr($item['content'],0,50)."..." : $item['content']; //$item['content'];
            }
        }

        return $dataSource;
    }


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
