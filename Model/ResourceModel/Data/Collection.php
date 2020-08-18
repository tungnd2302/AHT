<?php
namespace Learning\Mycrud\Model\ResourceModel\Data;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection 
{
    protected function _construct()
    {
        $this->_init('Learning\Mycrud\Model\Data','Learning\Mycrud\Model\ResourceModel\Data');
    }
}