<?php 
namespace Learning\Mycrud\Block;
use Magento\Framework\View\Element\Template;
use Magento\Widget\Block\BlockInterface;
use Magento\Framework\View\Element\Template\Context;
use Magento\Framework\View\Result\PageFactory;
class Insert extends Template
{
     protected $_pageFactory;
     public function __construct(Context $context,PageFactory $pageFactory)
     {
          $this->_pageFactory = $pageFactory;
          return parent::__construct($context);
     }
 
     public function execute()
     {
          return $this->_pageFactory->create();
     }
     
     public function showUserForm()
    {
        return 'Thêm mới';
    }
}
//Magento/Framework/View/Element/Template/Context