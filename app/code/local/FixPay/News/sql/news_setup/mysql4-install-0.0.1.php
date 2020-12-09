<?php

$installer = $this;
$installer->startSetup();

// // Logic to create table and columns

$table = $installer->getConnection()
        ->newTable($installer->getTable('fixpay_news'))
        ->addColumn('news_id', Varien_Db_Ddl_Table::TYPE_INTEGER, null, array(
            'identity' => true,
            'unsigned' => true,
            'nullable' => false,
            'primary' => true,
        ),'ID')
        ->addColumn('news_title', Varien_Db_Ddl_Table::TYPE_VARCHAR, null, array(
            'nullable' => false,
        ),'NEWS Title')
        ->addColumn('news_content', Varien_Db_Ddl_Table::TYPE_TEXT, null, array(
            'nullable' => false,
        ),'NEWS Content');

$installer->getConnection()->createTable($table);
$installer->endSetup();