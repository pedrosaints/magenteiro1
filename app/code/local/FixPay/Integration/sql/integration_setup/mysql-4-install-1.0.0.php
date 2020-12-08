<?php
//die('teste');
$installer = $this;
$installer->startSetup();
$tableName = $installer->getTable('fixpay_integration/queue');

$sql = "CREATE TABLE {$tableName} (
  `log_id` int(8) NOT NULL,
  `event` varchar(100) DEFAULT NULL COMMENT 'Magento Event',
  `integration_type` varchar(100) DEFAULT NULL,
  `content` text,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `integrated_at` timestamp NULL DEFAULT '1970-01-01 03:00:01',
  `debug_info` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Integration Queues';";

//$installer->getConnection()->dropTable($tableName);
$table = $installer->getConnection()->newTable($tableName)
    ->addColumn('log_id',Varien_Db_Ddl_Table::TYPE_INTEGER, null, array(
        'identity'=>true,
        'length' => 8,
        'nullable' => false,
        'primary' => true,
    ), 'Log ID')
    ->addColumn('event',Varien_Db_Ddl_Table::TYPE_TEXT, null, array(
        'length' => 100,
        'default' => 'null',
    ), 'Magento Event')
    ->addColumn('content',Varien_Db_Ddl_Table::TYPE_TEXT, null, array())
    ->addColumn('created_at',Varien_Db_Ddl_Table::TYPE_TIMESTAMP, null, array(
        'nullable' => false,
        'default' => Varien_Db_Ddl_Table::TIMESTAMP_INIT,
    ))
    ->addColumn('integrated_at',Varien_Db_Ddl_Table::TYPE_TIMESTAMP, null, array(
        'nullable' => true,
        'default' => '1970-01-01 03:00:01',
    ))
    ->addColumn('debug_info',Varien_Db_Ddl_Table::TYPE_TEXT, null, array());

$installer->getConnection()->createTable($table);
//die('ok');

//$installer->run($sql);
$installer->endSetup();
