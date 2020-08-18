<?php 
namespace Learning\Mycrud\Block;
use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\Registry;
use Learning\Mycrud\Model\DataFactory;
class Edit extends Template
{
    protected $_pageFactory;
    protected $_coreRegistry;
    protected $_dataLoader;
     public function __construct(Context $context,PageFactory $pageFactory,Registry $coreRegistry,DataFactory $dataloader, array $data = [])
     {
        $this->_pageFactory = $pageFactory;
        $this->_coreRegistry = $coreRegistry;
        $this->_dataLoader = $dataloader;
        return parent::__construct($context,$data);
     }
 
     public function execute()
     {
        return $this->_pageFactory->create();   
     }

     public function getEditRecord()
     {  
        $id = $this->_coreRegistry->registry('editRecordId');
        $data = $this->_dataLoader->create();
        $result = $data->load($id);
        $result = $result->getData();
        return $result;
     }

     public function showUserForm(){
         return "Sửa thông tin";
     }

}
//Magento/Framework/View/Element/Template/Context