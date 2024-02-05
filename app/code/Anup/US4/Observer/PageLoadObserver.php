<?php

use Magento\Framework\Event\ObserverInterface;
use Magento\Framework\Event\Observer;
use Psr\Log\LoggerInterface;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\Response\Http;
use Magento\UrlRewrite\Model\UrlRewriteFactory;
use Magento\UrlRewrite\Model\UrlRewrite;

class PageLoadObserver implements ObserverInterface
{
    protected $logger;
    protected $response;
    protected $urlRewriteFactory;

    public function __construct(
        LoggerInterface $logger,
        Context $context,
        UrlRewriteFactory $urlRewriteFactory
    ) {
        $this->logger = $logger;
        $this->response = $context->getResponse();
        $this->urlRewriteFactory = $urlRewriteFactory;
    }

    public function execute(Observer $observer)
    {
        // Log the list of available routers
        $routerList = $observer->getEvent()->getRouterList();
        $this->logger->info('Available routers:', ['routers' => array_keys($routerList)]);

        // Redirect not found page to Contact Us
        /** @var Http $response */
        $response = $observer->getEvent()->getResponse();
        if ($response->isNotFound()) {
            $response->setRedirect('/contact', 301)->sendResponse();
            exit;
        }

        // Create an URL rewrite for the Contact Us page
        /** @var UrlRewrite $urlRewrite */
        $urlRewrite = $this->urlRewriteFactory->create();
        $urlRewrite->setEntityType('custom')
            ->setRequestPath('contactuspage.html')
            ->setTargetPath('contact/index/index')
            ->setRedirectType(301)
            ->save();
    }
}
