<?php
/**
 * Created by PhpStorm.
 * User: peteriszevalds
 * Date: 21.13.4
 * Time: 11:58
 */

namespace Magebit\StockQty\ViewModel;


class StockQty implements \Magento\Framework\View\Element\Block\ArgumentInterface

{
    /**
     * @var \Magento\InventoryApi\Api\GetSourceItemsBySkuInterface
     */
    private $getSourceItemsBySku;


    public function __construct
    (
        \Magento\InventoryApi\Api\GetSourceItemsBySkuInterface $getSourceItemsBySku

)
    {

        $this->getSourceItemsBySku = $getSourceItemsBySku;
    }

    public function getStockQty(string $sku)
    {

        $stocks = $this->getSourceItemsBySku->execute($sku);
        $qty = 0;
        foreach ($stocks as $stock){
            $qty += $stock->getQuantity();
        }
        return $qty;
    }

}