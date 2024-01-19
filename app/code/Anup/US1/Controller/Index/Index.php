<?php 
namespace Anup\US1\Controller\Index;

use Anup\US1\Test;
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;


class Index extends Action{
    /** 
     * @var Test 
     */
    protected $test;

    /**
     * @param Context $context
     * @param Test $test
     */
    public function __construct(Context $context, Test $test) {
        $this->test = $test;
        return parent::__construct($context, $test);
    }

    public function execute(){
        $this->test->displayParams();
    }
}