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
$('.provolistoixeion').css('background-color', '#428bca');
$('.provolistoixeion a').css('color', 'white');
</script>


<?php
/*
$eponymo="%".$_POST['eponymo']."%";

$katigoriafakelos="%".$_POST['katigoriafakelos']."%";

$ergopraksi="%".$_POST['ergopraksi']."%";

$anathesiergoy="%".$_POST['anathesiergoy']."%";

$katastasi="%".$_POST['katastasi']."%";

$eidikotitafakelos="%".$_POST['eidikotitafakelos']."%";

$arithmosypoergoyolografos="%".$_POST['arithmosypoergoyolografos']."%";

$arithmospaketoyergasias="%".$_POST['arithmospaketoyergasias']."%";

$onomastikieorti="%".$_POST['onomastikieorti']."%";

$fylo="%".$_POST['fylo']."%";

$dimosiosypallilos="%".$_POST['dimosiosypallilos']."%";


$contractuals = Contractual::find('all',

array('conditions' => array('eponymo LIKE ? AND katigoriafakelos LIKE ? AND ergopraksi LIKE ?  AND anathesiergoy LIKE ? AND katastasi LIKE ? AND eidikotitafakelos LIKE ? AND arithmosypoergoyolografos LIKE ? AND arithmospaketoyergasias LIKE ? AND onomastikieorti LIKE ? AND fylo LIKE ? AND dimosiosypallilos LIKE ?', 

$eponymo, $katigoriafakelos, $ergopraksi, $anathesiergoy, $katastasi, $eidikotitafakelos, $arithmosypoergoyolografos, $arithmospaketoyergasias, $onomastikieorti, $fylo, $dimosiosypallilos))

);*/

$contractuals=Contractual::find('all', array('order' => 'eponymo asc'));

if ($contractuals==NULL){

echo"
<div class='container'>
	<div class='row' style='margin-top:-20px'>
		<h4> Δεν υπάρχουν εγγραφές συμβασιούχων.</h4>
		</div>
	</div>
";
}else{


echo "
<div class='container'>
	<div class='row'>
			<div class='col-xs-1 col-md-1'><h4><u>α/α</u></h4></div>
			<div class='col-xs-2 col-md-2'><h4><u>Επώνυμο </u></h4></div>
			<div class='col-xs-2 col-md-2'><h4><u>Όνομα </u></h4></div> <br><br>
	</div>
</div>	
";

$i=0;

foreach ($contractuals as $contractual){

$i++;

	echo "
	
	<div class='container'>
		<form class='form-horizontal' role='form'  method='POST' action='show_contractual.php'>
			<div class='row'>
			<div class='col-xs-1 col-md-1'>". $i. "</div>
			<div class='col-xs-2 col-md-2'>". $contractual->eponymo. "</div>			
			<div class='col-xs-2 col-md-2'>". $contractual->onoma. "</div>

			<div class='col-xs-1 col-md-1'><input type='hidden' name='contractualid' value='$contractual->id'> </div>
			<div class='col-xs-2 col-md-2'><button type='submit' class='btn btn-primary btn-block'>Προβολή</button> </div>
		</form>	
	</div>
</div>";
	
 
}
}


?>