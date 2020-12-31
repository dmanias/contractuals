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

$menu='include/menu.php';
$content='include/add_listsForms.php';
include('master.php');

?>




<?php
 
if(isset($_POST['field_anathesiergoy'])){

	$values = $_POST['field_anathesiergoy'];
	Field_anathesiergoy::delete_all();

foreach($values as $value) {   
	$field_anathesiergoy = new Field_anathesiergoy;
	$field_anathesiergoy->value = $value;
	echo $field_anathesiergoy->value. "<br>";
	$field_anathesiergoy->save();
	}
}

if(isset($_POST['field_katastasi'])){
	$values = $_POST['field_katastasi'];
	Field_katastasi::delete_all();

foreach($values as $value) {
	$field_katastasi = new Field_katastasi;
	$field_katastasi->value = $value;
	echo $field_katastasi->value. "<br>";
	$field_katastasi->save();	
	}
}

if(isset($_POST['field_eidikotita'])){
	$values = $_POST['field_eidikotita'];
	Field_eidikotita::delete_all();

foreach($values as $value) {
	$field_eidikotita = new Field_eidikotita;
	$field_eidikotita->value = $value;
	echo $field_eidikotita->value. "<br>";
	$field_eidikotita->save();	
	}
}

if(isset($_POST['field_katigoria'])){
	$values = $_POST['field_katigoria'];
	Field_katigoria::delete_all();

foreach($values as $value) {
	$field_katigoria = new Field_katigoria;
	$field_katigoria->value = $value;
	echo $field_katigoria->value. "<br>";
	$field_katigoria->save();	
	}
}

if(isset($_POST['field_eidosapasxolisis'])){
	$values = $_POST['field_eidosapasxolisis'];
	Field_eidosapasxolisis::delete_all();

foreach($values as $value) {
	$field_eidosapasxolisis = new Field_eidosapasxolisis;
	$field_eidosapasxolisis->value = $value;
	echo $field_eidosapasxolisis->value. "<br>";
	$field_eidosapasxolisis->save();	
	}
}

if(isset($_POST['field_toposapasxolisis'])){
	$values = $_POST['field_toposapasxolisis'];
	Field_toposapasxolisis::delete_all();

foreach($values as $value) {
	$field_toposapasxolisis = new Field_toposapasxolisis;
	$field_toposapasxolisis->value = $value;
	echo $field_toposapasxolisis->value. "<br>";
	$field_toposapasxolisis->save();	
	}
}

if(isset($_POST['field_xorosapasxolisis'])){
	$values = $_POST['field_xorosapasxolisis'];
	Field_xorosapasxolisis::delete_all();

foreach($values as $value) {
	$field_xorosapasxolisis = new Field_xorosapasxolisis;
	$field_xorosapasxolisis->value = $value;
	echo $field_xorosapasxolisis->value. "<br>";
	$field_xorosapasxolisis->save();	
	}
}

if(isset($_POST['field_dieuthynsiapasxolisis'])){
	$values = $_POST['field_dieuthynsiapasxolisis'];
	Field_dieuthynsiapasxolisis::delete_all();

foreach($values as $value) {
	$field_dieuthynsiapasxolisis = new Field_dieuthynsiapasxolisis;
	$field_dieuthynsiapasxolisis->value = $value;
	echo $field_dieuthynsiapasxolisis->value. "<br>";
	$field_dieuthynsiapasxolisis->save();	
	}
}



?>
