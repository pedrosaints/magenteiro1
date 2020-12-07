<?php
class FixPay_Integration_Model_Queue extends Mage_Core_Model_Abstract {
    protected function _construct()
    {
        $this->_init('fixpay_integration/queue');
    }
}