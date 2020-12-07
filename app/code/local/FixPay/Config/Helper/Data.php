<?php

class FixPay_Config_Helper_Data extends Mage_Core_Helper_Abstract {

    public function getName(){
        $store = Mage::app()->getStore();
        $name = $store->getName();
        return $name;
//        echo 'alo';
    }
}
