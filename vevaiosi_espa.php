<?php
session_start();

//Check whether the session variable SESS_MEMBER_ID is present or not
if(!isset($_SESSION['sess_username']) || (trim($_SESSION['sess_username']) == '')) {
	header("location: index.php");
	exit();
}
?>

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
$eggrafo=Eggrafo::first(array('conditions' => array('contractual_id = ?', $contractual_id)));

//include ('edit_contractual_form.php');

?>


<!DOCTYPE html>
<html>

<html lang="en">
  <head>
    <meta charset="utf-8">
	
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<link rel="stylesheet" href="css/custom.css">
	
	<!-- JS -->	
	<script src="js/jquery.js"></script>
	<script src="js/date.js"></script>
	
  </head>	

<body>

<div class="row" style="font-family:Verdana">
	<div class="col-md-8 col-md-offset-2 col-xs-8 col-xs-offset-2 col-sm-8 col-sm-offset-2 ">

		<table>
			<tr>
				<td  rowspan="2"><img src="imgs/eap_logo.png" alt="Ε.Α.Π." width="38" height="38"></td>
				<td style="font-size:12pt; color:#001A77"><strong>ΕΛΛΗΝΙΚΗ ΔΗΜΟΚΡΑΤΙΑ</strong> </td>
			</tr>
			<tr>
				<td style="font-size:12pt; color:#001A77"><strong>ΕΛΛΗΝΙΚΟ ΑΝΟΙΚΤΟ ΠΑΝΕΠΙΣΤΗΜΙΟ</strong></td>
			</tr>
			<tr>
				<td  style="border-top:5px double #001A77; font-size:9pt; color:#001A77" colspan="2">ΕΠΙΤΡΟΠΗ ΔΙΑΧΕΙΡΙΣΗΣ ΕΙΔΙΚΟΥ ΛΟΓΑΡΙΑΣΜΟΥ (Ε.Δ.Ε.Λ.)</td>
			</tr>
			<tr>
				<td  colspan="2" style="font-size:9pt; color:#001A77">Παρ. Αριστοτέλους 18, 263 35  ΠΑΤΡΑ</td>
			</tr>
			<tr>
				<td  colspan="2" style="font-size:9pt; color:#001A77; text-decoration: underline;">Τηλ: 2610 367.665/367.664,  Fax: 2610 367.662,  E-mail: kalogir@eap.gr/vkatsina@eap.gr</td>
			</tr>
		</table>
	</div>
</div>

<div style="font-family:Candara">

<div class="row" >
	<div id="date" style="font-size:10pt;" class="col-md-4 col-md-offset-8 col-xs-4 col-xs-offset-8 col-sm-4 col-sm-offset-8 ">

	</div>
</div>

<div class="row">
	<div class="col-md-4 col-md-offset-5 col-xs-4 col-xs-offset-5 col-sm-4 col-sm-offset-5 ">
		<br>
		<p style="font-size:12pt; text-decoration: underline; "><strong>ΒΕΒΑΙΩΣΗ</strong></p>
  </div>
</div>

<div class="row">
  <div style="font-size:11pt; text-align: justify; text-justify: inter-word;" class="col-md-8 col-md-offset-2 col-xs-8 col-xs-offset-2 col-sm-8 col-sm-offset-2 ">
  <p>Βεβαιώνεται ότι, από τα στοιχεία που τηρεί η υπηρεσία μας,
  
	<?php
		if ($contractual->fylo=="Άνδρας"){
			echo "στον κ. ".$eggrafo->symvasioyxosseaitiatiki; }else{
			echo "στην κα.".$eggrafo->symvasioyxosseaitiatiki;}
	?>
 έγινε: </p>

 <p>
 
στο πλαίσιο του Υποέργου <?php echo $contractual->arithmosypoergoy ?> με τίτλο «<?php echo $contractual->titlosypoergoy ?>»  και επιστημονικό υπεύθυνο τον <?php echo $eggrafo->epistimonikosypeythinosypoergoyseaitiatiki ?>, της Πράξης 


	<?php 
		$praksi=$contractual->ergopraksi; 
		if ($praksi=='1'){
			echo "«Ελληνικό Ανοικτό Πανεπιστήμιο»";}
		if ($praksi=='2'){
			echo "«Γραφείο Διασύνδεσης Ελληνικού Ανοικτού Πανεπιστημίου»";}
		if ($praksi=='3'){
			echo "«Δομή Απασχόλησης και Σταδιοδρομίας (ΔΑΣΤΑ) ΕΑΠ»";}
		if ($praksi=='4'){
			echo "«Μονάδα Καινοτομίας και Επιχειρηματικότητας (ΜΚΕ) του Ελληνικού Ανοικτού Πανεπιστημίου»";	}
		if ($praksi=='5'){
			echo "ΜΟΔΙΠ του ΕΑΠ»";	}		
			
 ?>, η οποία έχει ενταχθεί στον Άξονα Προτεραιότητας <?php echo $contractual->aksonasproteraiotitas ?> του ΕΠΕΔΒΜ του ΕΣΠΑ (2007-2013) με κωδικό MIS <?php echo $contractual->misops ?> και η οποία συγχρηματοδοτείται από την Ευρωπαϊκή Ένωση (Ευρωπαϊκό Κοινωνικό Ταμείο-ΕΚΤ) & από εθνικούς πόρους, μέσω του προγράμματος Δημοσίων Επενδύσεων (ΠΔΕ) του <?php echo $eggrafo->lektikoypoyrgeioypaideias ?>, με επιστημονικό υπεύθυνο τον <?php  echo $eggrafo->epistimonikosypeythinosergoyseaitiatiki ?>, η παρακάτω ανάθεση έργου:


<br>
(Ι) Συμμετοχή στην υλοποίηση του Πακέτου Εργασίας <?php echo $contractual->arithmospaketoyergasias ?>: «<?php echo $contractual->titlospaketoyergasias ?>» για το χρονικό διάστημα από <?php echo $contractual->enarksitrexoysassymvasis ?> έως <?php echo $contractual->liksitrexoysassymvasis ?>.

<p>
	<?php
		if ($contractual->fylo=="Άνδρας"){
			echo "O"; }else{
			echo "Η";}
	?> ανωτέρω παρέχει έργο στο πλαίσιο της παραπάνω σύμβασης έως και σήμερα.
</p>
Η παρούσα βεβαίωση χορηγείται μετά από αίτηση 

	<?php
		if ($contractual->fylo=="Άνδρας"){
			echo "του ενδιαφερόμενου "; }else{
			echo "της ενδιαφερόμενης ";}
	?>για κάθε νόμιμη χρήση.

 
  </p>
  </div>
</div>


<div class="row">
  <div  class="col-md-4 col-md-offset-8 col-xs-4 col-xs-offset-8 col-sm-4 col-sm-offset-8 ">
  <br>
  <p style="font-size:11pt;">Ο Προϊστάμενος της ΕΔΕΛ</p>
	<br>
  <p style="font-size:11pt;">Χαράλαμπος Ροδόπουλος</p>
  </div>
</div>
</div>

</body>
</html>