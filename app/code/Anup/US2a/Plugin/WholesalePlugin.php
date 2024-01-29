<?php
// app/code/Anup/US2a/Plugin/Wholesale.php

namespace Anup\US2a\Plugin;
use Magento\Catalog\Model\Product; 
use Anup\US2\Plugin\ProductPlugin;

class WholesalePlugin extends ProductPlugin
{
        /**
     * Append 'On Sale!' to product name if price is less than $60
     * 
     *
     * @param \Magento\Catalog\Model\Product $subject
     * @param string $result
     * @return string
     */
    public function afterGetName(Product $subject, $result)
    {
        if ($subject->getPrice() < 20) {
            $result .= ' WholeSale !!';
        } elseif ($subject->getPrice()>= 20 && $subject->getPrice() < 50) {
            $discount = $subject->getPrice() * 0.15;
            $discountedPrice = $subject->getPrice() - $discount;
            $result .= ' Super Sale!! Discounted Price: ' . number_format($discountedPrice, 2);
        } elseif ($subject->getPrice() >= 50) {
            $result .= ' Premium !!';
        }
        return $result;
    }
}