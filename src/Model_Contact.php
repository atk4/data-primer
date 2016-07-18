<?php

class Model_Contact extends \atk4\data\Model
{
    public $table = 'contact';

    function init() {
        parent::init();

        $this->addField('name');
        $this->addField('type', ['enum'=>['client','supplier']]);
        $this->addField('status', ['enum'=>['active','suspended']]);

        $this->hasOne('system_id', 'System')
            ->addField('system', 'name');

        $this->hasMany('Invoice');
        $this->hasMany('Payment');

        $j = $this->join('contact_info', 'contact_info_id');
        $j->addField('address_1');
        $j->addField('address_2');
        $j->addField('address_3');
        $j->hasOne('country_id', 'Country')
            ->addField('country', 'name');
    }
}
