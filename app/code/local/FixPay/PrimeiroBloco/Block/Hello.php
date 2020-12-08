<?php
class FixPay_PrimeiroBloco_Block_Hello extends Mage_Core_Block_Template {

    public function getHello(){
        echo "Hello World";
    }

    public function getEmail(){
        if(Mage::getStoreConfigFlag("payment/fixpay_configs/fixpay_habilitado")){
            echo Mage::getStoreConfig("payment/fixpay_credentials/fixpay_email");
        }
    }

    public function getSenha(){
        if(Mage::getStoreConfigFlag("payment/fixpay_configs/fixpay_habilitado")){
            echo Mage::getStoreConfig("payment/fixpay_credentials/fixpay_senha");
        }
    }

    public function getBrand(){
        if(Mage::getStoreConfigFlag("payment/fixpay_configs/fixpay_habilitado")){
            echo Mage::getStoreConfig("payment/fixpay_payment/fixpay_brand");
        }
    }

    public function getMaxParcela(){
        if(Mage::getStoreConfigFlag("payment/fixpay_configs/fixpay_habilitado")){
            echo Mage::getStoreConfig("payment/fixpay_payment/fixpay_maxparcela");
//            echo 'Teste';
        }
    }

    public function getMinParcela(){
        if(Mage::getStoreConfigFlag("payment/fixpay_configs/fixpay_habilitado")){
            echo Mage::getStoreConfig("payment/fixpay_payment/fixpay_minparcela");
        }
    }

    public function getBtnColor(){
        if(Mage::getStoreConfigFlag("payment/fixpay_configs/fixpay_habilitado")){
            if(Mage::getStoreConfigFlag("payment/fixpay_personal/fixpay_btnpers")){
                echo Mage::getStoreConfig("payment/fixpay_personal/fixpay_btnperscolor");
            }
        }
    }

    public function getBackgroundUrl(){
        if(Mage::getStoreConfigFlag("payment/fixpay_configs/fixpay_habilitado")){
            if(Mage::getStoreConfigFlag("payment/fixpay_personal/fixpay_backgroundpers")){
                echo Mage::getStoreConfig("payment/fixpay_personal/fixpay_backgroundpersurl");
            }
        }
    }
}