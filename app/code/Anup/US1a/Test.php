<?php 

declare(strict_types=1);

namespace Anup\US1a;

use \Magento\Catalog\Api\Data\CategoryInterface;
use Psr\Log\LoggerInterface;

class Test{
    public array $arrayParam;
    public string $stringParam;
    public CategoryInterface $categoryInterface;
    protected LoggerInterface $logger;
    public function __construct(LoggerInterface $logger,CategoryInterface $categoryInterface, array $arrayParam=[[1,2,3],2,3], string $stringParam="Anup") {
        $this->categoryInterface = $categoryInterface;
        $this->arrayParam = $arrayParam;
        $this->stringParam = $stringParam;
        $this->logger = $logger;
    }

    public function displayParams(){
        echo "<pre>".print_r($this->arrayParam, true)."</pre>";
        echo "String params: ".print_r($this->stringParam, true);
        $writer = new \Zend_Log_Writer_Stream(BP . '/var/log/custom.log');
        $logger = new \Zend_Log();
        $logger->addWriter($writer);
        $logger->info(json_encode($this->arrayParam));
    }
}