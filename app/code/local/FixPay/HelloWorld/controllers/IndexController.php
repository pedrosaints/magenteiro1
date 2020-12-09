<?php

class Fixpay_Helloworld_IndexController extends Mage_Core_Controller_Front_Action {

    public function IndexAction(){
        // echo "Hello World!";exit;
        $this->loadLayout();

        // Add Page Title
        $this->getLayout()->getBlock("head")->setTitle($this->__('Hello World Fix Pay'));

        // Add Bread Crumbs
        $breadcrumbs = $this->getLayout()->getBlock("breadcrumbs");
        $breadcrumbs->addCrumb("home",array(
            "label" => $this->__('Home Page'),
            "title" => $this->__('Home Page'),
            "link" => Mage::getBaseUrl(),
        ));
        $breadcrumbs->addCrumb("helloworld",array(
            "label" => $this->__('Hello World Fix Pay'),
            "title" => $this->__('Hello World Fix Pay'),
        ));

        $this->renderLayout();
    }

}