<?php

declare(strict_types= 1);

namespace Anup\US1\Controller\Index;

use Anup\US1\Test;
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\Controller\Result\JsonFactory;

class Index extends Action
{
    private Test $test;
    private JsonFactory $resultJsonFactory;
    /**
     *
     * @param Context $context
     * @param Test $test
     * @param JsonFactory $resultJsonFactory
     */
    public function __construct($context, $test, $resultJsonFactory)
    {
        parent::__construct($context);
        $this->test = $test;
        $this->resultJsonFactory = $resultJsonFactory;
    }

    public function execute()
    {
        $result = $this->resultJsonFactory->create();
        return $result->setData([$this->test->displayParams()]);
    }
}
