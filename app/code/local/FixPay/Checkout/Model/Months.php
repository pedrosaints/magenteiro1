<?php
class FixPay_Checkout_Model_Months {

    public function toOptionArray() {
        return array(
            array('value' => 1, 'label'=>1),
            array('value' => 2, 'label'=>2),
            array('value' => 3, 'label'=>3),
            array('value' => 4, 'label'=>4),
            array('value' => 5, 'label'=>5),
            array('value' => 6, 'label'=>6),
            array('value' => 7, 'label'=>7),
            array('value' => 8, 'label'=>8),
            array('value' => 9, 'label'=>9),
            array('value' => 10, 'label'=>10),
            array('value' => 11, 'label'=>11),
            array('value' => 12, 'label'=>12),

        );
    }
    public function toArray() {
        return array(
            1 => 1,
            2 => 2,
            3 => 3,
            4 => 4,
            5 => 5,
            6 => 6,
            7 => 7,
            8 => 8,
            9 => 9,
            10 => 10,
            11 => 11,
            12 => 12,
        );
    }

}