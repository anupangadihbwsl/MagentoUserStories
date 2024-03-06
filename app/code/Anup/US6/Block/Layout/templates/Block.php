<?php
namespace Anup\US6\Block;

use Magento\Framework\View\Element\AbstractBlock;

class CustomBlock extends AbstractBlock
{
    protected function _toHtml()
    {
        // Your custom rendering logic here
        $html = '<div>';
        $html .= 'Your custom block content goes here...';
        $html .= '</div>';
        
        return $html;
    }

    protected function _afterToHtml($html)
    {
        // Your logic after rendering the block
        // For example, appending some additional data
        $additionalHtml = '<div>Additional content after the block...</div>';
        
        return $html . $additionalHtml;
    }
}