<?php
namespace Anup\US7\Block;

use Magento\Framework\View\Element\Template;

class Message extends Template
{
    protected function _toHtml()
    {
        // Custom rendering logic for the message block
        $html = '<div>';
        $html .= 'Your message content goes here...';
        $html .= '</div>';
        
        return $html;
    }

    protected function _afterToHtml($html)
    {
        // Your logic after rendering the message block
        $additionalHtml = '<div>Additional message after the block...</div>';
        
        return $html . $additionalHtml;
    }
}