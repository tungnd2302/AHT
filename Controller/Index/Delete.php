<?php 
namespace Learning\Mycrud\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\App\Action\Context;
use Magento\Framework\Filesystem; 
use Learning\Mycrud\Model\DataFactory;
class Delete extends Action
{
     protected $_pageFactory;
     protected $_postFactory;
     protected $_dataFactory;
     public function __construct(Context $context,PageFactory $pageFactory,Filesystem $filesystem,DataFactory $dataFactory)
     {
          $this->_pageFactory = $pageFactory;
          $this->_filesystem = $filesystem;
          $this->_dataFactory = $dataFactory;
          return parent::__construct($context);
     }
 
     public function execute()
     {        

          $id = $this->getRequest()->getParam('id');
          $model = $this->_dataFactory->create();
          $model->setId($id)->delete();
          return $this->_redirect('learning/index/listitem');
     }
}