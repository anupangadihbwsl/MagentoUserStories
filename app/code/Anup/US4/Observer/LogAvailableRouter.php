<?php

namespace Anup\US4\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
use Psr\Log\LoggerInterface;

class LogAvailableRouter implements ObserverInterface
{
    /**
     * @var LoggerInterface
     */
    private $logger;
    
    /**
     * @var \Magento\Framework\App\RouterList
     */
    private $routerList;

    /**
     * @param LoggerInterface $logger
     * @param \Magento\Framework\App\RouterList $routerList
     */
    public function __construct(
        LoggerInterface $logger,
        \Magento\Framework\App\RouterList $routerList
    ) {
        $this->logger = $logger;
        $this->routerList = $routerList;
    }
    
    /**
     * @param Observer $observer
     */
    public function execute(Observer $observer)
    {
        $logFile = BP . '/var/log/custom.log';
        $this->logger->info('Available routers:');
        
        // Iterate through the router list and log information about each router
        foreach ($this->routerList as $router) {
            $this->logger->info(get_class($router));
        }
    }
}
