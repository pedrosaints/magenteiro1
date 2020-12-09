<?php

class Fixpay_News_Block_Adminhtml_News_Grid extends Mage_Adminhtml_Block_Widget_Grid {

    public function __construct(){
        parent::__construct();
        $this->setId('newsGridView');
        $this->setDefaultSort('news_id');
        $this->setDefaultDir('DESC');
        $this->setSaveParametersInSession(true);
    }

    protected function _prepareCollection(){
        $collection = new Varien_Data_Collection();
        $this->setCollection($collection);
        return parent::_prepareCollection();
    }

    protected function _prepareColumns(){
        $this->addColumn("news_id", array(
            "header" => Mage::helper("news")->__("ID"),
            "type" => "number",
            "index" => "news_id",
        ));
        $this->addColumn("news_title", array(
            "header" => Mage::helper("news")->__("Title"),
            "type" => "text",
            "index" => "news_title",
        ));
        $this->addColumn("news_content", array(
            "header" => Mage::helper("news")->__("Content"),
            "type" => "text",
            "index" => "news_content",
        ));
    }
}