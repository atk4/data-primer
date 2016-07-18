<?php

class Model_Client extends Model_Contact {
    function init()
    {
        parent::init();
        $this->addCondition('type','client');
    }
}
