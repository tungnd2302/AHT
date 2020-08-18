<?php 
namespace Learning\Mycrud\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\App\Action\Context;
use Magento\Framework\Filesystem; 
use Learning\Mycrud\Model\DataFactory;
class Update extends Action
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
          $data = $this->getRequest()->getPostValue();
          $model = $this->_dataFactory->create()->load($id);
          $model->setData('fullname',$data['fullname'])
                ->setData('nation',$data['nation'])
                ->setData('class',$data['class'])
                ->setData('sex',$data['sex'])
                ->setData('archive',$data['archive'])
                ->save();
        //   unset($data['hideit']);
        //   unset($data['form_key']);
        //   $model->setData($data);
        //   $model->save();
          return $this->_redirect('learning/index/listitem');
     }
}