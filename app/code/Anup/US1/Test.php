<?php 

declare(strict_types=1);

namespace Anup\US1;

use \Magento\Catalog\Api\Data\CategoryInterface;

class Test{
    protected array $arrayParam;
    protected string $stringParam;
    protected CategoryInterface $categoryInterface;

    public function __construct(CategoryInterface $categoryInterface, array $arrayParam=[1,2,3], string $stringParam="Anup") {
        $this->categoryInterface = $categoryInterface;
        $this->arrayParam = $arrayParam;
        $this->stringParam = $stringParam;
    }

    public function displayParams(){
        echo "<pre>".print_r($this->arrayParam, true)."</pre>";
        echo "String params: ".print_r($this->stringParam, true);
    }
}