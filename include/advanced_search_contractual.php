
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
$('.anazitisistoixeion').css('background-color', '#428bca');
$('.anazitisistoixeion a').css('color', 'white');
</script>


<?php

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


//$contractuals = Contractual::find('all', array('conditions' => array('eponymo LIKE ? AND katigoriafakelos LIKE ? AND ergopraksi LIKE ?  AND anathesiergoy LIKE ? AND katastasi LIKE ? AND eidikotitafakelos LIKE ? AND arithmosypoergoyolografos LIKE ? AND arithmospaketoyergasias LIKE ? AND onomastikieorti LIKE ? AND fylo LIKE ? AND dimosiosypallilos LIKE ?',$eponymo, $katigoriafakelos, $ergopraksi, $anathesiergoy, $katastasi, $eidikotitafakelos, $arithmosypoergoyolografos, $arithmospaketoyergasias, $onomastikieorti, $fylo, $dimosiosypallilos)));
/*,array('order' => 'onoma asc')*/


$contractuals = Contractual::find_by_sql("SELECT * FROM contractuals WHERE eponymo LIKE '$eponymo' AND katigoriafakelos LIKE '$katigoriafakelos' AND ergopraksi LIKE '$ergopraksi' AND anathesiergoy LIKE '$anathesiergoy' AND katastasi LIKE '$katastasi' AND eidikotitafakelos LIKE '$eidikotitafakelos' AND arithmosypoergoyolografos LIKE '$arithmosypoergoyolografos' AND arithmospaketoyergasias LIKE '$arithmospaketoyergasias' AND onomastikieorti LIKE '$onomastikieorti' AND fylo LIKE '$fylo' AND dimosiosypallilos LIKE '$dimosiosypallilos' ORDER BY eponymo"); 

echo "
<div class='container'>
	<div class='row'>
<!---		<h3> Αναζήτηση στοιχείων</h3>--->";			
		
echo "<div class='col-xs-1 col-md-1'></div>
		<div class='col-xs-2 col-md-2'><h4>Επώνυμο</h4></div> 
		<div class='col-xs-2 col-md-2'><h4> Όνομα </h4></div>";
		
		
		if (isset($_POST['katigoriafakelos'])&& $_POST['katigoriafakelos']!=NUll){
			echo "<div class='col-xs-2 col-md-2'><h4>Κατηγορία</h4></div>";}

		if (isset($_POST['ergopraksi'])&& $_POST['ergopraksi']!=NUll){
			echo "<div class='col-xs-2 col-md-2'><h4>Έργο-Πράξη</h4></div>";}
					
		if (isset($_POST['anathesiergoy'])&&$_POST['anathesiergoy']!=NUll){
			echo "<div class='col-xs-2 col-md-2'><h4>Ανάθεση Έργου</h4></div>";}
		
		if (isset($_POST['katastasi'])&&$_POST['katastasi']!=NUll){
			echo "<div class='col-xs-2 col-md-2'><h4>Κατάσταση</h4></div>";}
		
		if (isset($_POST['eidikotitafakelos'])&&$_POST['eidikotitafakelos']!=NUll){
			echo "<div class='col-xs-2 col-md-2'><h4>Ειδικότητα</h4></div>";}
			
		if (isset($_POST['arithmosypoergoyolografos'])&&$_POST['arithmosypoergoyolografos']!=NUll){
			echo "<div class='col-xs-2 col-md-2'><h4>Αριθμός Υποέργου</h4></div>";}			

		if (isset($_POST['arithmospaketoyergasias'])&&$_POST['arithmospaketoyergasias']!=NUll){
			echo "<div class='col-xs-2 col-md-2'><h4>Αριθμός Πακέτου Εργασίας</h4></div>";}	
			
	
		if (isset($_POST['onomastikieorti'])&&$_POST['onomastikieorti']!=NUll){
			echo "<div class='col-xs-2 col-md-2'><h4>Ονομαστική Εορτή</h4></div>";}

		if (isset($_POST['fylo'])&&$_POST['fylo']!=NUll){
			echo "<div class='col-xs-2 col-md-2'><h4>Φύλο</h4></div>";}
	
		if (isset($_POST['dimosiosypallilos'])&&$_POST['dimosiosypallilos']!=NUll){
			echo "<div class='col-xs-2 col-md-2'><h4>Δημόσιος Υπάλληλος</h4></div>";}
			
			
			
echo "<br><br> </div> </div>";

$i=0;

foreach ($contractuals as $contractual){

$i++;
$id[]=$contractual->id;

	echo "
	
	<div class='container'>

		<div class='row'>
			<div class='col-xs-1 col-md-1'>". $i. "</div>
			<div class='col-xs-2 col-md-2'>". $contractual->eponymo. "</div>
			<div class='col-xs-2 col-md-2'>". $contractual->onoma. "</div>";
			
			if (isset($_POST['katigoriafakelos'])&& $_POST['katigoriafakelos']!=NUll){
				echo "<div class='col-xs-2 col-md-2'>". $contractual->katigoriafakelos. "</div>";}
				
			if (isset($_POST['ergopraksi'])&& $_POST['ergopraksi']!=NUll){
				echo "<div class='col-xs-2 col-md-2'>". $contractual->ergopraksi. "</div>";}

			if (isset($_POST['anathesiergoy'])&& $_POST['anathesiergoy']!=NUll){
				echo "<div class='col-xs-2 col-md-2'>". $contractual->anathesiergoy. "</div>";}

			if (isset($_POST['katastasi'])&&$_POST['katastasi']!=NUll){
				echo "<div class='col-xs-2 col-md-2'>". $contractual->katastasi. "</div>";}

			if (isset($_POST['eidikotitafakelos'])&&$_POST['eidikotitafakelos']!=NUll){
				echo "<div class='col-xs-2 col-md-2'>". $contractual->eidikotitafakelos. "</div>";}

			if (isset($_POST['arithmosypoergoyolografos'])&&$_POST['arithmosypoergoyolografos']!=NUll){
				echo "<div class='col-xs-2 col-md-2'>". $contractual->arithmosypoergoyolografos. "</div>";}

			if (isset($_POST['arithmospaketoyergasias'])&&$_POST['arithmospaketoyergasias']!=NUll){
				echo "<div class='col-xs-2 col-md-2'>". $contractual->arithmospaketoyergasias. "</div>";}
			
			if (isset($_POST['onomastikieorti'])&&$_POST['onomastikieorti']!=NUll){
				echo "<div class='col-xs-2 col-md-2'>". $contractual->onomastikieorti. "</div>";}
			
			if (isset($_POST['fylo'])&&$_POST['fylo']!=NUll){
				echo "<div class='col-xs-2 col-md-2'>". $contractual->fylo. "</div>";}			
			
			if (isset($_POST['dimosiosypallilos'])&&$_POST['dimosiosypallilos']!=NUll){
				echo "<div class='col-xs-2 col-md-2'>". $contractual->dimosiosypallilos. "</div>";}
			
			
echo"

			</div>
	</div>";
	
}

$postid = serialize($id);

echo "
<form class='form-horizontal' role='form'  method='POST' action='anazitisi_excel.php'>
	<div class='col-xs-1 col-md-1'><input type='hidden' name='contractualid' value=". $postid ."> </div>
		<div class='col-xs-12 col-md-12'><button type='submit' class='btn  btn-primary btn-block'>Εξαγωγή σε αρχείο Excel 2007</button> </div>	
</form>

";		

?>


