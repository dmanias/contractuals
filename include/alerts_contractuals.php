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
$('.eidopoiiseis').css('background-color', '#428bca');
$('.eidopoiiseis a').css('color', 'white');
</script> 


<?php
////GREEK LOCALIZATION

  date_default_timezone_set('Europe/Athens');

  setlocale(LC_TIME, 'el_GR.UTF-8');
/*  echo strftime('%A ');
  $greekMonths = array('Ιανουαρίου','Φεβρουαρίου','Μαρτίου','Απριλίου','Μαΐου','Ιουνίου','Ιουλίου','Αυγούστου','Σεπτεμβρίου','Οκτωβρίου','Νοεμβρίου','Δεκεμβρίου');
 $greekDate = date('j') . ' ' . $greekMonths[intval(date('m'))-1] . ' ' . date('Y');
echo $greekDate;*/
?>


<?php

$currentdate=date("d/m");

echo "
<div class='container'>
	<div class='row'>
		<div >
		<h3> <u>Συμβασιούχοι που εορτάζουν σήμερα ".date("d/m/Y") ."</u></h3>
		</div>
	</div>
</div>	
";

# FIND WHO HAS NAME DAY TODAY 
//$contractuals=Contractual::all(array('conditions' => array('onomastikieorti = ?', $currentdate)));

$contractuals = Contractual::find_by_sql("SELECT * FROM contractuals WHERE onomastikieorti=$currentdate ORDER BY eponymo"); 

if ($contractuals==NULL){

echo"
<div class='container'>
	<div class='row' style='margin-top:-20px'>
		<h4> Δεν υπάρχουν συμβασιούχοι που να εορτάζουν σήμερα.</h4>
		</div>
	</div>
";
}else{
echo "
<div class='container'>
	<div class='row' style='margin-top:-20px'>
		<div class='col-xs-1 col-md-1'></div>
		<div class='col-xs-2 col-md-2'><h4>Επώνυμο </h4></div>
		<div class='col-xs-2 col-md-2'><h4>Όνομα</h4></div>
		<br><br>
	</div>

";

$i=0;

foreach ($contractuals as $contractual){

$i++;

	echo "
			<div class='row'>
				<div class='col-xs-1 col-md-1'>". $i. "</div>
				<div class='col-xs-2 col-md-2'>". $contractual->eponymo. "</div>
				<div class='col-xs-2 col-md-2'>". $contractual->onoma. "</div>

				
				<div class='col-xs-2 col-md-2'> <a class='btn btn-primary' href='mailto:".$contractual->emailergasias."?subject=Θερμές ευχές για ονομαστική εορτή&body=Αγαπητέ ,%0A%0AΜε αφορμή την ονομαστική εορτή σου, το Γραφείο Διοικητικού Προσωπικού του Ε.Α.Π. στέλνει τις θερμότερες ευχές του για υγεία και ευτυχία! %0A%0A'>Αποστολή email</a></div>
	";
}

echo "

				</div>
			</div>

";

}
//$greekMonths = array('Ιανουάριος','Φεβρουάριος','Μάρτιος','Απρίλιος','Μάιος','Ιούνιος','Ιούλιος','Αύγουστος','Σεπτέμβριος','Οκτώβριος','Νοέμβριος','Δεκέμβριος');

$greekMonths = array('Ιανουαρίου','Φεβρουαρίου','Μαρτίου','Απριλίου','Μαΐου','Ιουνίου','Ιουλίου','Αυγούστου','Σεπτεμβρίου','Οκτωβρίου','Νοεμβρίου','Δεκεμβρίου');

 $greekDate =  $greekMonths[intval(date('m'))-1] . ' ' . date('Y');
 
echo "
<div class='container'>
	<div class='row'>
		<div >
<br><br><br><p></p><h3><u> Συμβάσεις που θα προωθηθούν σε Διοικούσα Επιτροπή ".$greekDate ."</u></h3>

		</div>
	</div>
</div>
";

$twomonths=date('m')+2;

$monthName = date('m', mktime(0, 0, 0, $twomonths, 10));



# FIND WHOM CONTRACT EXPIRES IN 2 MONTHS 
//$contractuals=Contractual::all(array('conditions' => array('liksitrexoysassymvasis LIKE ?', '%/'.$monthName.'/%')));

$contractuals = Contractual::find_by_sql("SELECT * FROM contractuals WHERE liksitrexoysassymvasis LIKE '%/$monthName/%' ORDER BY eponymo"); 

if ($contractuals==NULL){

echo"
<div class='container'>
	<div class='row' style='margin-top:-20px'>
		<br>
		<h4> Δεν υπάρχουν συμβάσεις για να προωθηθούν σε Διοικούσα Επιτροπή αυτό το μήνα.</h4>
		</div>	
";
}else{
echo "
<div class='container'>
	<div class='row'>
		<div class='col-xs-1 col-md-1'></div>
		<div class='col-xs-2 col-md-2'><h4>Επώνυμο</h4></div>
		<div class='col-xs-2 col-md-2'><h4> Όνομα </h4></div>
		<div class='col-xs-2 col-md-2'><h4>Έργο-Πράξη</h4></div>
		<div class='col-xs-2 col-md-2'><h4>Έναρξη Σύμβασης</h4></div>
		<div class='col-xs-2 col-md-2'><h4>Λήξη Σύμβασης</h4></div>
		<br><br>
	</div>

";

$i=0;

foreach ($contractuals as $contractual){

$i++;
$id[]=$contractual->id;

	echo "
			<div class='row'>
				<div class='col-xs-1 col-md-1'>". $i. "</div>
				<div class='col-xs-2 col-md-2'>". $contractual->eponymo. "</div>
				<div class='col-xs-2 col-md-2'>". $contractual->onoma. "</div>
				<div class='col-xs-2 col-md-2'>"; 
					$praksi=$contractual->ergopraksi; 
					if ($praksi=='1'){
						echo "Ελληνικό Ανοικτό Πανεπιστήμιο";}
					if ($praksi=='2'){
						echo "Γραφείο Διασύνδεσης Ελληνικού Ανοικτού Πανεπιστημίου";}
					if ($praksi=='3'){
						echo "Δομή Απασχόλησης και Σταδιοδρομίας (ΔΑΣΤΑ) ΕΑΠ";}
					if ($praksi=='4'){
						echo "Μονάδα Καινοτομίας και Επιχειρηματικότητας (ΜΚΕ) του Ελληνικού Ανοικτού Πανεπιστημίου";	}
					if ($praksi=='5'){
						echo "ΜΟΔΙΠ του ΕΑΠ";	}					
echo "			</div>
				<div class='col-xs-2 col-md-2'>". $contractual->enarksitrexoysassymvasis. "</div>
				<div class='col-xs-2 col-md-2'>". $contractual->liksitrexoysassymvasis. "</div>

</div>
	";
}

echo "

				</div>
			</div>

";
}

$postid = serialize($id);

echo "
<form class='form-horizontal' role='form'  method='POST' action='simvaseis_excel.php'>
	<div class='col-xs-1 col-md-1'><input type='hidden' name='contractualid' value=". $postid ."> </div>
		<div class='col-xs-12 col-md-12'><button type='submit' class='btn  btn-primary btn-block'>Εξαγωγή σε αρχείο Excel 2007</button> </div>	
</form>

";


?>