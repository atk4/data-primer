<?php

class Model_Document extends \atk4\data\Model
{
    public $table = 'document';

    function init() {
        parent::init();

        $this->addField('ref_no');
        $this->addField('date', ['default'=>date('Y-m-d')]);
        $this->addField('type', ['enum'=>['invoice','payment']]);

        $this->hasOne('contact_id', 'Contact');

        $this->addField('is_archived', ['type'=>'boolean']);

    }

}
