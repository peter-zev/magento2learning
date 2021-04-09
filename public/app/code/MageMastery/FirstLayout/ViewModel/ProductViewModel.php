<?php

namespace MageMastery\FirstLayout\ViewModel;

use Magento\Framework\View\Element\Block\ArgumentInterface;

class ProductViewModel implements ArgumentInterface
{
    public function __construct()
    {

    }

    public function getSomething()
    {
        return "Some text here";
    }
}