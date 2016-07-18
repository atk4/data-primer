<?php

class Model_Invoice extends Model_Document {

    function init()
    {
        parent::init();
        $this->addCondition('type','invoice');

        $this->join('invoice.document_id')
            ->addFields(['purchase','shipping']);

        $this->addExpression('total','[purchase]+[shipping]');
    }
}
