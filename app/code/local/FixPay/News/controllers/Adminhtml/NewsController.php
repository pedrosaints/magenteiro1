<?php

class Fixpay_News_Adminhtml_NewsController extends Mage_Adminhtml_controller_Action {

    public function indexAction(){
        $this->_title($this->__('News'));
        $this->_title($this->__('Manage News'));
        
        $this->loadLayout();
        $this->renderLayout();
        // echo "ok controller";exit;
    }
}