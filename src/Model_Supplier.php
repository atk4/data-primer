<?php

class Model_Supplier extends Model_Contact {
    function init()
    {
        parent::init();
        $this->addCondition('type','supplier');
    }
}
