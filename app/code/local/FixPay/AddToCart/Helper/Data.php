<?php

class FixPay_AddToCart_Helper_Data extends Mage_Core_Helper_Abstract {

    public function logToFile($msg){
        Mage::log($msg, null, 'fixpay.log', true);
    }
}
