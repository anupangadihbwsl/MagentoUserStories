<?php

declare(strict_types= 1);

namespace Anup\US18\Plugin;

class ProductPlugin
{
    public function afterGetPrice(\Magento\Catalog\Model\Product $subject, $result)
    {
        $result = $result + 1.79;
        return $result;
    }
}