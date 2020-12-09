<?php

class Fixpay_News_Block_Adminhtml_News extends Mage_Adminhtml_Block_Widget_Grid_Container {

    public function _construct(){
        echo "ok block";exit;
        $this->_controler = 'adminhtml_news';
        $this->_blockGroup = 'news';
        $this->_headerText = Mage::helper('news')->__("Manage News");
        parent::__construct();
    }
}