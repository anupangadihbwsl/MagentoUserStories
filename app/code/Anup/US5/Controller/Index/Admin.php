<?php
namespace Anup\US6\Controller\Index;

class Admin extends \Magento\Framework\App\Action\Action
{
    protected $resultRedirectFactory;
    
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\Controller\Result\RedirectFactory $resultRedirectFactory
    ) {
        $this->resultRedirectFactory = $resultRedirectFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        $access = $this->getRequest()->getParam('access', false);
        $productId = $this->getRequest()->getParam('product_id', false);
        
        if ($access == 'True') {
            // Assuming you have the target product's ID
             // Replace with the specific product ID
            $resultRedirect = $this->resultRedirectFactory->create();
            $resultRedirect->setPath('catalog/product/view', ['id' => $productId]);
            return $resultRedirect;
        } else {
            // Redirect to the home page if "access" parameter is not "True"
            $resultRedirect = $this->resultRedirectFactory->create();
            $resultRedirect->setPath('cms/index/index');
            return $resultRedirect;
        }
    }
}


