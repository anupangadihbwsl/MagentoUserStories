<?php

namespace Anup\US2\Plugin;

class CopyrightPlugin
{
    /**
     * Change the copyright text to custom text
     *
     * @param \Magento\Theme\Block\Html\Footer $subject
     * @param string $result
     * @return string
     */
    public function afterGetCopyright(\Magento\Theme\Block\Html\Footer $subject, $result)
    {
        return '© Anup HummingBird Custom Copyright Text';
    }

    /**
     * Change the welcome message to custom text
     *
     * @param \Magento\Theme\Block\Html\Header $subject
     * @param string $result
     * @return string
     */
    public function afterGetWelcome(\Magento\Theme\Block\Html\Header $subject, $result)
    {
        return 'Anup HummingBird Welcome Message';
    }
}