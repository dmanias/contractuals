<?php

 require_once ('libs/php-activerecord/ActiveRecord.php');

 ActiveRecord\Config::initialize(function($cfg)
 {
    $cfg->set_model_directory('models');
    $cfg->set_connections(array(
        'development' => 'mysql://contractual:contractual@localhost/contractuals?charset=utf8'));
});


?>


<script>
$('.ekdosieggrafon').css('background-color', '#428bca');
$('.ekdosieggrafon a').css('color', 'white');
</script> 


<?php


# fetch all 
$contractuals=Contractual::find('all', array('order' => 'eponymo asc'));


echo "
<div class='container'>
	<div class='row'>
		
		<div class='col-xs-1 col-md-1'></div><div class='col-xs-2 col-md-2'><h4> Επώνυμο </h4></div><div class='col-xs-2 col-md-2'><h4>Όνομα</h4></div> <br><br>
	</div>
</div>	
";

$i=0;

foreach ($contractuals as $contractual){

$i++;

	





	echo "
	
	<div class='container'>
		<form class='form-horizontal' role='form'  method='POST' action='stoixeia_eggrafon.php'>
			<div class='row'>
			<div class='col-xs-1 col-md-1'>". $i. "</div>
			<div class='col-xs-2 col-md-2'>". $contractual->eponymo. "</div>
			<div class='col-xs-2 col-md-2'>". $contractual->onoma. "</div>
			<input type='hidden' name='contractualid' value='$contractual->id'> 
			<div class='col-xs-2 col-md-2'><button type='submit' class='btn btn-primary btn-block'>Στοιχεία Έκδοσης</button> </div>
		</form>";

	
	echo "
	
		<form class='form-horizontal' role='form'  method='POST' action='vevaiosi_espa.php'>
			<input type='hidden' name='contractualid' value='$contractual->id'> 
			<div class='col-xs-2 col-md-2'><button type='submit' class='btn btn-primary btn-block'>Βεβαίωση ΕΣΠΑ</button> </div>
		</form>
	
";


	echo "
	
		<form class='form-horizontal' role='form'  method='POST' action='simvasi_espa.php'>
			<input type='hidden' name='contractualid' value='$contractual->id'> 
			<div class='col-xs-2 col-md-2'><button type='submit' class='btn btn-primary btn-block'>Σύμβαση ΕΣΠΑ</button> </div>
		</form>
	</div>
</div>";
	
 
}

?>