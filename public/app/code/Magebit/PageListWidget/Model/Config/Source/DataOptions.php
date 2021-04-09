<?php

namespace Magebit\PageListWidget\Model\Config\Source;

Class DataOptions implements \Magento\Framework\Option\ArrayInterface
{

//    public function __construct(
//        \Magento\Framework\View\Element\Template\Context $context,
//        \Magento\Cms\Api\PageRepositoryInterface $pageRepositoryInterface,
//        \Magento\Framework\Api\SearchCriteriaBuilder $searchCriteriaBuilder,
//        array $data = []
//    )
//    {
//        $this->pageRepositoryInterface = $pageRepositoryInterface;
//        $this->searchCriteriaBuilder = $searchCriteriaBuilder;
//        parent::__construct($context, $data);
//    }
//
//
//    public function toOptionArray()
//    {
//        $options = [];
//        $searchCriteria = $searchCriteria = $this->searchCriteriaBuilder->create();
//        $pages = $this->pageRepositoryInterface->getList($searchCriteria)->getItems();
//
//        foreach ($pages as $page) {
//            $options[] = [
//                'ļabel' => __($page->getTitle()),
//                'value' => $page->getId()
//            ];
//        }
//
//        return $options;
//    }




    public function toOptionArray()
    {
        $options = [
            [
                'value' => 'option1',
                'label' => __('Option-1')
            ],
            [
                'value' => 'option2',
                'label' => __('Option-2')
            ],
            [
                'value' => 'option3',
                'label' => __('Option-3')
            ],
        ];

        return $options;
    }


}