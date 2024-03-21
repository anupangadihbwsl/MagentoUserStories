<?php

namespace Anup\US1;

use Magento\Catalog\Api\Data\CategoryInterface;

class Test
{
    protected CategoryInterface $category;
    protected string $string;
    protected array $array;

    /**
     *
     *
     * @param CategoryInterface $category
     * @param string $string
     * @param array<int> $array
     */
    public function __construct(CategoryInterface $category, $string='Anup', $array=[1,2,3])
    {
        $this->category = $category;
        $this->string = $string;
        $this->array = $array;
    }

    public function displayParams()
    {
        print_r("Array: ");
        print_r($this->array);
        print_r("String: " . $this->string);
    }
}
