<?php

namespace MageMastery\TestWidget\Model\Config\Source;

use Magento\Framework\Option\ArrayInterface;

class DataOptions implements ArrayInterface
{
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