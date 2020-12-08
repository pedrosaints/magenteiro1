<?php
$installer = $this;
$installer->startSetup();
$tableName = $installer->getTable('fixpay_integration/queue');

$installer->getConnection()->addColumn($tableName, 'coluna_teste', array(
    'type' => Varien_Db_Ddl_Table::TYPE_TEXT,
    'length' => 200,
    'nullable' => true,
    'comment' => 'coluna teste',
));
$installer->endSetup();