<?php
namespace Learning\Mycrud\Model;

use Magento\Framework\Model\AbstractModel;

    class Data extends AbstractModel
    {   
        protected function _construct()
        {
            $this->_init('Learning\Mycrud\Model\ResourceModel\Data');
        }
}