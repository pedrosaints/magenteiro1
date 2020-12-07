<?php
class FixPay_PrimeiroBloco_Block_Hello extends Mage_Core_Block_Template {

    public function getHello(){
        echo "Hello World";
    }

    public function getEmail(){
        if(Mage::getStoreConfigFlag("fixpay_configs/fixpay_credenciais/fixpay_habilitado")){
            echo Mage::getStoreConfig("fixpay_configs/fixpay_credenciais/fixpay_email");
        }
    }

    public function getSenha(){
        if(Mage::getStoreConfigFlag("fixpay_configs/fixpay_credenciais/fixpay_habilitado")){
            echo Mage::getStoreConfig("fixpay_configs/fixpay_credenciais/fixpay_senha");
        }
    }

    public function getBrand(){
        if(Mage::getStoreConfigFlag("fixpay_configs/fixpay_credenciais/fixpay_habilitado")){
            echo Mage::getStoreConfig("fixpay_configs/fixpay_credenciais/fixpay_brand");
        }
    }

    public function getMaxParcela(){
        if(Mage::getStoreConfigFlag("fixpay_configs/fixpay_credenciais/fixpay_habilitado")){
            echo Mage::getStoreConfig("fixpay_configs/fixpay_credenciais/fixpay_maxparcela");
//            echo 'Teste';
        }
    }

    public function getMinParcela(){
        if(Mage::getStoreConfigFlag("fixpay_configs/fixpay_credenciais/fixpay_habilitado")){
            echo Mage::getStoreConfig("fixpay_configs/fixpay_credenciais/fixpay_minparcela");
        }
    }

    public function getBtnColor(){
        if(Mage::getStoreConfigFlag("fixpay_configs/fixpay_credenciais/fixpay_habilitado")){
            if(Mage::getStoreConfigFlag("fixpay_configs/fixpay_credenciais/fixpay_btnpers")){
                echo Mage::getStoreConfig("fixpay_configs/fixpay_credenciais/fixpay_btnperscolor");
            }
        }
    }

    public function getBackgroundUrl(){
        if(Mage::getStoreConfigFlag("fixpay_configs/fixpay_credenciais/fixpay_habilitado")){
            if(Mage::getStoreConfigFlag("fixpay_configs/fixpay_credenciais/fixpay_backgroundpers")){
                echo Mage::getStoreConfig("fixpay_configs/fixpay_credenciais/fixpay_backgroundpersurl");
            }
        }
    }
}