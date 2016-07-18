<?php
include'vendor/autoload.php';

$db = atk4\data\Persistence::connect('dumper:mysql:dbname=data-primer;host=localhost','root','root');


try {
    $s = new Model_System($db);
    $s->load(10);
    var_dump($s->ref('Supplier')->export());

    /*
    $u->insert([
        'username'=>'John', 'email'=>'me@nearly.guru', 
        'country_id'=>(new Model_Country($db))->addCondition('name','Ireland')->action('field',['id']),
        'address_1'=>'John Street']);

     */

    eval(\Psy\sh());


    //$system->load(10);

   // echo $system->action('select')->render();

    //var_dump($u->export());



} catch (\atk4\core\Exception $e) {
    echo $e->getColorfulText();
    exit(1);
}
 
