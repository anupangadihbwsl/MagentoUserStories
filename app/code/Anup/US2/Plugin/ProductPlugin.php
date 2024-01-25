<?php

namespace Anup\US2\Plugin;

class ProductPlugin
{
    /**
     * Append 'On Sale!' to product name if price is less than $60
     *
     * @param \Magento\Catalog\Model\Product $subject
     * @param string $result
     * @return string
     */
    public function afterGetName(\Magento\Catalog\Model\Product $subject, $result)
    {
        if ($subject->getPrice() < 60) {
            $result .= ' On Sale!';
        }
        return $result;
    }
}