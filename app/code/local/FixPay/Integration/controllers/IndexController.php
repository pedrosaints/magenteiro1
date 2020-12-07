<?php
class FixPay_Integration_IndexController extends Mage_Core_Controller_Front_Action {

    public function indexAction(){
        $model = Mage::getModel('fixpay_integration/queue');
        $model->load(1);
        echo get_class($model);
    }

    public function insertAction(){
        $model = Mage::getModel('fixpay_integration/queue');
        $model->setEvent('Teste');
        $model->setIntegrationType('log');
        $model->setContent('Hello');
        $model->save();
        echo 'salvando...';
    }

    public function editAction(){
        $model = Mage::getModel('fixpay_integration/queue');
        $model->load(1);
        $model->setEvent('Editado');
        $model->save();
        echo 'editando...';
    }

    public function deleteAction(){
        $model = Mage::getModel('fixpay_integration/queue');
        $model->delete(1);
        $model->save();
        echo 'deletando...';
    }

    public function showLogsAction(){
        $logs = Mage::getModel('fixpay_integration/queue')->getCollection();
        foreach ($logs as $log){
            echo '<h2>' . $log->getEvent() . '</h2>';
        }
    }
}