<?php
/**
 * Copyright © 2016 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Learning\Mycrud\Setup;

use Magento\Framework\Setup\UpgradeSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

/**
 * Upgrade the Catalog module DB scheme
 */
class UpgradeSchema implements UpgradeSchemaInterface
{
    /**
     * {@inheritdoc}
     */
    public function upgrade(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();
        if (version_compare($context->getVersion(), '1.0.8', '<')) {
            $setup->getConnection()->addColumn(
                $setup->getTable('Learning_Mycrud'),
                'age',
                [
                    'type' => \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                    'length' => 10,
                    'nullable' => false,
                    'default' => '',
                    'comment' => 'Tuổi'
                ],
            );

            $setup->getConnection()->addColumn(
                $setup->getTable('Learning_Mycrud'),
                'archive',
                [
                    'type' => \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                    'length' => 10,
                    'nullable' => false,
                    'default' => '',
                    'comment' => 'Thành tích'
                ],
            );

            $setup->getConnection()->dropColumn($setup->getTable('Learning_Mycrud'), 'age');
            $setup->getConnection()->changeColumn(
                $setup->getTable('Learning_Mycrud'),
                'address',
                'nation',
                [
                    'type' => \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                    'length' => 255,
                    'comment' => 'Quốc gia'
                ]
            );
        }

        if (version_compare($context->getVersion(), '1.0.9', '<')) {
            $setup->getConnection()->changeColumn(
                $setup->getTable('Learning_Mycrud'),
                'address',
                'nation',
                [
                    'type' => \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                    'length' => 255,
                    'comment' => 'Quốc gia'
                ]
            );
        }
        $setup->endSetup();
    }
}
