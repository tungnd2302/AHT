<?php
/**
 * Copyright © 2016 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Learning\Mycrud\Setup;

use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

/**
 * @codeCoverageIgnore
 */
class InstallData implements InstallDataInterface
{

    /**
     * {@inheritdoc}
     * @SuppressWarnings(PHPMD.CyclomaticComplexity)
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     * @SuppressWarnings(PHPMD.NPathComplexity)
     */
    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
          /**
           * Install messages
           */
          $data = [
              ['fullname' => 'Nguyễn Đức Tùng','class' => 'AT13i','sex' =>'Nam'],
              ['fullname' => 'Nguyễn Hồng Quân','class' => 'AT13e','sex' =>'Nam'],
              ['fullname' => 'Hoàng Thu Trang','class' => 'AT13c','sex' =>'Nữ'],
          ];
          foreach ($data as $bind) {
              $setup->getConnection()
                ->insertForce($setup->getTable('Learning_Mycrud'), $bind);
          }
    }
}
