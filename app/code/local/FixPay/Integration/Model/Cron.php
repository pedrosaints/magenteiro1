<?php
class FixPay_Integration_Model_Cron {
    public function integrate(){
        $orders = Mage::getModel('fixpay_integration/queue')->getCollection()
            ->addFieldToFilter('integrated_at', '1970-01-01 00:00:01')
            ->getItems();
        foreach ($orders as $queue){
            $order = unserialize($queue->getContent());
            Mage::log('Pedido integrado: ' . $order['increment_id'],null,'integration.log',true);
            $queue->setIntegratedAt(date('Y-m-d H:i:s'));
            $queue->setDebugInfo('Registro Integrado');
            $queue->save();
        }
    }
}