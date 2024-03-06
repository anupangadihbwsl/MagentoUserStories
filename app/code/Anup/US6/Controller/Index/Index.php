<?php
namespace Anup\US6\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;
use Anup\US6\Block\CustomBlock;

class CustomBlockController extends Action
{
    protected $resultPageFactory;
    protected $customBlock;

    public function __construct(
        Context $context,
        PageFactory $resultPageFactory,
        CustomBlock $customBlock
    ) {
        $this->resultPageFactory = $resultPageFactory;
        $this->customBlock = $customBlock;
        parent::__construct($context);
    }

    public function execute()
    {
        $resultPage = $this->resultPageFactory->create();
        $layout = $resultPage->getLayout();
        $block = $layout->createBlock(CustomBlock::class);
        $resultPage->getLayout()->getBlock('content')->append($block);
        
        return $resultPage;
    }
}