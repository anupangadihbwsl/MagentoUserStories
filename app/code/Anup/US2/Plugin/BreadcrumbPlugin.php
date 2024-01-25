<?php

namespace Anup\US2\Plugin;

class BreadcrumbPlugin
{
    /**
     * Append 'Hummingbird' to the beginning of each breadcrumb name
     *
     * @param \Magento\Theme\Block\Html\Breadcrumbs $subject
     * @param array $crumbs
     * @return array
     */
    public function beforeAddCrumb(\Magento\Theme\Block\Html\Breadcrumbs $subject, $crumbName, $crumbInfo)
    {
        $crumbInfo['label'] = 'Hummingbird ' . $crumbInfo['label'];
        // dump($crumbInfo);
        return [$crumbName, $crumbInfo];
    }
}