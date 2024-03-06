<?php
namespace Anup\US6\Plugin;

class SampleDescription
{
    public function afterToHtml(
        \Magento\Catalog\Block\Product\View\Description $subject,
        $result
    ) {
        // Check if the block is for product description
        if ($subject->getNameInLayout() === 'product.info.description') {
            $customDescription = 'sample description';
            $result = str_replace('%description%', $customDescription, $result);
        }
        return $result;
    }
}
