<?php
namespace Anup\US3\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
use Magento\Framework\View\Result\Page as ResultPage;
use Psr\Log\LoggerInterface;

class LogProductAndViewPage implements ObserverInterface
{
    /**
     * @var LoggerInterface
     */
    protected $logger;

    /**
     * Constructor
     *
     * @param LoggerInterface $logger
     */
    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    /**
     * Execute observer method.
     *
     * @param Observer $observer
     * @return void
     */


    public function execute(Observer $observer)
    {
        $product = $observer->getEvent()->getProduct();
        if ($product) {
            $this->logger->info('Product Viewed: ' . $product->getName());
            $productName = $product->getName();
            $productSku = $product->getSku();
            $productPrice = $product->getPrice();
            $productQtyPerSource = $product->getExtensionAttributes()->getStockItem()->getQty();
            $productSalableQty = $product->getExtensionAttributes()->getSalableQuantity();

            $this->logger->info(sprintf(
                'Product Viewed: Name: %s, SKU: %s, Price: %s, Qty per Source: %s, Salable Qty: %s',
                $productName,
                $productSku,
                $productPrice,
                $productQtyPerSource,
                $productSalableQty
            ));
        }

        /** @var ResultPage $resultPage */
        $resultPage = $observer->getEvent()->getData('result_page');
        if ($resultPage instanceof ResultPage) {
            $html = $resultPage->getLayout()->getOutput();
            $this->logger->info('Page HTML: ' . $html);
        }
    }

}