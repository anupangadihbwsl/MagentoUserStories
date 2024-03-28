<?php

namespace Anup\US6\Block;

use Magento\Framework\View\Element\Template;

class CustomBlock extends Template
{
    protected function _toHtml()
    {
        return '<div>Hello from CustomBlock!</div>';
    }

    protected function _afterToHtml($html)
    {
        
        return '<h1> Anup </h1>'. $html;
    }
}
