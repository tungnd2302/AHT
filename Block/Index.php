<?php
namespace Learning\Mycrud\Block;

use Magento\Framework\View\Element\Template;
use Magento\Widget\Block\BlockInterface;
use Magento\Framework\View\Element\Template\Context;
use Learning\Mycrud\Model\Data;
class Index extends Template
{
    public function __construct(Context $context, Data $model)
    {
        $this->model = $model;
        parent::__construct($context);
    }

    public function BlockBlocks()
    {
        $Datas = $this->model->getCollection();
        return $Datas;
    }
}