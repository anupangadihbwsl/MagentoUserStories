<?php
declare(strict_types=1);

namespace Anup\US17\Setup\Patch\Data;

use Magento\Framework\Setup\Patch\DataPatchInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Review\Model\ResourceModel\Rating\CollectionFactory;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

class ProductRating implements DataPatchInterface
{
    protected $collectionFactory;
    protected $setup;   
    function __construct(
        ModuleDataSetupInterface $setup,
        CollectionFactory $collectionFactory,
    ){
        $this->setup = $setup;
        $this->collectionFactory = $collectionFactory; 
    }
    function apply(){
        $this->setup->startSetup();
        $logFile = BP . '/var/log/custom.log';
        $logger = new Logger('custom');
        $logger->pushHandler(new StreamHandler($logFile, Logger::DEBUG));
        $logger->info(print_r("Hello", true));


        $collection = $this->collectionFactory->create();
        
        $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
        $productCollection = $objectManager->create('Magento\Catalog\Model\ResourceModel\Product\Collection');
        $products = $productCollection->addAttributeToSelect('*')->load();
      
        foreach($products as $product){
            $rating = $product->getRating();
            
            $logger->info(print_r($rating, true));
        }
      
        $this->setup->endSetup();
    }
    function getAliases(){
        return [];
    }
    static function getDependencies(){
        return [];
    }
}