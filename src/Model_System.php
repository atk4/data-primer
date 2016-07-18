<?php
class Model_System extends \atk4\data\Model
{
    public $table = 'system';

    function init() {
        parent::init();

        $this->addField('name');

        $this->hasOne('user_id', 'User');

        $this->hasMany('Client');
        $this->hasMany('Supplier');

    }

}
