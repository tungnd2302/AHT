<?php
namespace Learning\Mycrud\Model\ResourceModel;

class Data extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    public function _construct()
    {
        $this->_init('Learning_Mycrud', 'id');
    }
}