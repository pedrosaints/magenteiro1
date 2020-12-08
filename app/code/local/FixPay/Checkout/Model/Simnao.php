<?php

class FixPay_Checkout_Model_Simnao
{
    public function toOptionArray()
    {
        return array(
            array('value' => 1, 'label'=>'Sim'),
            array('value' => 0, 'label'=>'Não'),
        );
    }

    public function toArray()
    {
        return array(
            0 => 'Não',
            1 => 'Sim',
        );
    }

}
