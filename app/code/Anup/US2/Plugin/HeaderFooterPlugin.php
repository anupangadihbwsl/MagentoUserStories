<?php
namespace Anup\US2\Plugin;

class HeaderFooterPlugin
{
    public function afterGetWelcome(\Magento\Theme\Block\Html\Header $subject, $result)
    {
        return "Hello! Welcome to Anup Store";
    }

    public function afterGetCopyright(\Magento\Theme\Block\Html\Footer $subject, $result)
    {
      return '© 2023 Anup All Rights Reserved.';
    }
}