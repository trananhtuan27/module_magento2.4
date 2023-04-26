<?php
namespace Mageplaza\HelloWorld\Controller\Index;

use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;
use Magento\TestFramework\Utility\ChildrenClassesSearch\D;

class Index extends \Magento\Framework\App\Action\Action
{
    private $pageFactory;

    public function __construct(Context $context, PageFactory $pageFactory)
    {
        $this->pageFactory = $pageFactory;
        parent::__construct($context);
    }

    public function execute()
    {
      $resultPage = $this->pageFactory->create();
      $resultPage->getConfig()->getTitle()->set(__('Welcome to my Hello world'));

      return $resultPage;
    }
}
