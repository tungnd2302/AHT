<?php 
namespace Learning\Mycrud\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\App\Action\Context;
use Magento\Framework\Filesystem; 
use Learning\Mycrud\Model\DataFactory; 
//factory proxy, plugin
class Save extends Action
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
          $model = $this->_dataFactory->create();
          $data = $this->getRequest()->getPostValue();
          unset($data['hideit']);
          unset($data['form_key']);
          $model->addData($data);
          // $model->setId();
          $model->save();
          return $this->_redirect('learning/index/listitem');
     }
}