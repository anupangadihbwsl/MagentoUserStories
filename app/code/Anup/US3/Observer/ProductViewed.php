<?php
declare(strict_types= 1);

namespace Anup\US3\Observer;

use Magento\Framework\Event\ObserverInterface;
use Magento\Framework\Event\Observer;
use Psr\Log\LoggerInterface;

class ProductViewed implements ObserverInterface
{
    private $logger;
    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
    public function execute(Observer $observer)
    {
        $product = $observer->getEvent()->getProduct();
        $this->logger->info($product->getName());
        $this->logger->info($product->getSku());
        $this->logger->info($product->getFinalPrice());
        $this->logger->info($product->getQty());
        $this->logger->info($product->getSellableQty());
        return $observer;
    }
}