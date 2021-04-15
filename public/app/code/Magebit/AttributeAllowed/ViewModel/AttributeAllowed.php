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

    /**
     * @var array
     */
    private $allowedAttributes = ["color", "dimensions", "material"];

    /**
     * @param $productAttributes
     * @return array
     */
    public function getAttributes($productAttributes)
    {
        $attributes = [];

        foreach ($this->allowedAttributes as $attribute) {
            if (isset($productAttributes[$attribute])) {
                $attributes[] = $productAttributes[$attribute];
                unset($productAttributes[$attribute]);
            }
        }

        if (sizeof($attributes) == sizeof($this->allowedAttributes)) {
            return $attributes;
        }

        $arrayDifference = sizeof($this->allowedAttributes) - sizeof($attributes);
        return array_merge($attributes, array_slice($productAttributes, 0, $arrayDifference));

    }

}