<?php

namespace Magebit\PageListWidget\Block\Widget;

use Magento\Framework\View\Element\Template;
use Magento\Widget\Block\BlockInterface;

class PageListWidget extends Template implements BlockInterface
{
    protected $_template = "widget/page_list_widget.phtml";

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Cms\Api\PageRepositoryInterface $pageRepositoryInterface,
        \Magento\Framework\Api\SearchCriteriaBuilder $searchCriteriaBuilder,
        \Magento\Framework\ObjectManagerInterface $objectManager,
        array $data = []
    )
    {
        $this->pageRepositoryInterface = $pageRepositoryInterface;
        $this->searchCriteriaBuilder = $searchCriteriaBuilder;
        $this->_objectManager = $objectManager;
        parent::__construct($context, $data);
    }

    /**
     * Get Pages Collection from site.
     */
    public function getPages()
    {
        $searchCriteria = $searchCriteria = $this->searchCriteriaBuilder->create();
        $pages = $this->pageRepositoryInterface->getList($searchCriteria)->getItems();
        return $pages;
    }

    public function getPageUrl($pageId)
    {
        return $this->_objectManager->create('Magento\Cms\Helper\Page')->getPageUrl($pageId);
    }


}