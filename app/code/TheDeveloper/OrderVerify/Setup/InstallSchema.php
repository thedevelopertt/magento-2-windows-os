<?php

namespace TheDeveloper\OrderVerify\Setup;

use Magento\Framework\DB\Ddl\Table;
use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

class InstallSchema implements InstallSchemaInterface{

    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $installer = $setup;

        $installer->startSetup();

        $_tableName = 'thedeveloper_orderverify';
        $tableName = $_tableName;

        if(!$installer->tableExists($tableName)){
            $connection = $installer->getConnection();
            $table = $connection->newTable($tableName)->addColumn(
                'post_id',
                Table::TYPE_INTEGER,
                null,
                [
                    'identity' => true,
                    'nullable' => false,
                    'primary' => true,
                    'unsigned' => true
                ],
                'This is post id'
            )->addColumn(
                'post_title',
                Table::TYPE_TEXT,
                255,
                [
                    'nullable' => false
                ],
                'This is the post title'
            );

            $connection->createTable($table);
        }

        $installer->endSetup();
    }
}
