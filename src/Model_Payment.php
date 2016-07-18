<?php

class Model_Payment extends Model_Document {

    function init()
    {
        parent::init();
        $this->addCondition('type','payment');

        $this->join('payment.document_id')
            ->addFields(['amount']);
    }
}
