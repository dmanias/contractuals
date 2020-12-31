<?php

 require_once ('libs/php-activerecord/ActiveRecord.php');

 ActiveRecord\Config::initialize(function($cfg)
 {
    $cfg->set_model_directory('models');
    $cfg->set_connections(array(
        'development' => 'mysql://contractual:contractual@localhost/contractuals?charset=utf8'));
});
?>

<?php 

$contractual_id=$_POST['contractualid'];

$contractual=Contractual::find($contractual_id);

include ('show_contractual_form.php');

?>