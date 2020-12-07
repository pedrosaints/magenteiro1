<?php
class FixPay_PrimeiroBloco_Block_Hello extends Mage_Core_Block_Template {

    public function getHello(){
        echo "Hello World";
    }

    public function getEmail(){
        echo Mage::getStoreConfig("fixpay_configs/fixpay_credenciais/fixpay_email");
    }

    public function getSenha(){
        echo Mage::getStoreConfig("fixpay_configs/fixpay_credenciais/fixpay_senha");
    }
}