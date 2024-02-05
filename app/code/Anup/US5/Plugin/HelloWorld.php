<?php

namespace Anup\US5\Plugin;

class HelloWorld
{
    /**
    * Plugin method to modify content on the catalog product view page.
    *
    * @param \Magento\Catalog\Controller\Product\View $subject
    * @param $result
    * @return mixed
    */
   public function afterExecute(
       \Magento\Catalog\Controller\Product\View $subject,
       $result
   ) {
        $subject
   
       return $result;
   }

    private function modifyContent($content)
    {
        // Modify the content as needed, for example:
        echo $content;
        return str_replace('<div class="product-info-main">', '<div class="product-info-main">Hello World: ', $content);
    }
}

