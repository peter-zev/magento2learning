<?php

namespace MageMastery\TestWidget\Block\Widget;

use Magento\Framework\View\Element\Template;
use Magento\Widget\Block\BlockInterface;

class CustomWidget extends Template implements BlockInterface
{
    protected $_template = "widget/custom_widget.phtml";

}