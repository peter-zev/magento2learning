<?php
/**
 * Created by PhpStorm.
 * User: peteriszevalds
 * Date: 21.13.4
 * Time: 12:52
 */

namespace Magebit\AttributeAllowed\ViewModel;


class AttributeAllowed implements \Magento\Framework\View\Element\Block\ArgumentInterface
{

    private $allowedAttributes = ["color", "dimensions", "material"];

    public function isAllowed($attribute)
    {
        return in_array($attribute, $this->allowedAttributes);
    }

}