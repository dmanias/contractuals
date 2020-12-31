
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
<script src="js/ESPA-withoutselected.js"></script> 

<div class='container'>

	<form class='form-horizontal' role='form'  method='POST' action='advanced_search_contractual.php'>
		
		<div class='row'>
			<div class="col-sm-12 col-md-12 form-group">
			
				<label for="eponymo" class="col-sm-2 col-md-2 control-label" >Επώνυμο</label>
				<div class="col-sm-2 col-md-2">
					<input type="text" name="eponymo" class="form-control" id="eponymo" placeholder="Επώνυμο" value="">
				</div>
				
				<label for="katigoriafakelos" class="col-sm-2 col-md-2 control-label" >Κατηγορία <br><small>(με βάση το φάκελο υποψηφιότητας)</small></label>
				<div class="col-sm-2 col-md-2">
				<select id="katigoriafakelos" name="katigoriafakelos" Multiple class="form-control">
				<?php 
				
					$field_katigoria=Field_katigoria::all();
					
					foreach($field_katigoria as $value){
					
						echo"	<option value='".$value->value."' default>".$value->value."</option> ";
					}
				?>			
				</select>
				</div>	
				
			<label for="egropraksi" class="col-sm-2 col-md-2 control-label" >Έργο-<br>Πράξη</label>
				<div class="col-sm-2 col-md-2">
				<select id="ergopraksi" name="ergopraksi" Multiple class="form-control">
					<option value="1" >ΕΛΛΗΝΙΚΟ ΑΝΟΙΚΤΟ ΠΑΝΕΠΙΣΤΗΜΙΟ</option>
					<option value="2" >ΓΡΑΦΕΙΟ ΔΙΑΣΥΝΔΕΣΗΣ ΕΛΛΗΝΙΚΟΥ ΑΝΟΙΚΤΟΥ ΠΑΝΕΠΙΣΤΗΜΙΟΥ</option>
					<option value="3" >ΔΟΜΗ ΑΠΑΣΧΟΛΗΣΗΣ ΚΑΙ ΣΤΑΔΙΟΔΡΟΜΙΑΣ (ΔΑΣΤΑ) ΕΑΠ</option>					
					<option value="4" >ΜΟΝΑΔΑ ΚΑΙΝΟΤΟΜΙΑΣ ΚΑΙ ΕΠΙΧΕΙΡΗΜΑΤΙΚΟΤΗΤΑΣ (ΜΚΕ) ΤΟΥ ΕΛΛΗΝΙΚΟΥ ΑΝΟΙΚΤΟΥ ΠΑΝΕΠΙΣΤΗΜΙΟΥ </option>					
					<option value="5" >ΜΟΔΙΠ ΤΟΥ ΕΑΠ</option>					
				</select>
				</div>				
			
		</div>
		</div>
		

		<div class='row'>
			<div class="col-sm-12 col-md-12 form-group">			

			<label for="anathesiergoy" class="col-sm-2 col-md-2 control-label" >Ανάθεση<br>Έργου</label>
				<div class="col-sm-2 col-md-2">
				<select id="anathesiergoy" name="anathesiergoy" Multiple class="form-control">
				<?php 
				
					$field_anathesiergoy=Field_anathesiergoy::all();
					
					foreach($field_anathesiergoy as $value){
					
						echo"	<option value='".$value->value."' default>".$value->value."</option> ";
					}
				?>			
				</select>
				</div>	
				
			<label for="eidikotitafakelos" class="col-sm-2 col-md-2 control-label" >Ειδικότητα <br><small>(με βάση το φάκελο υποψηφιότητας)</small></label>
				<div class="col-sm-2 col-md-2">
				<select id="eidikotitafakelos" name="eidikotitafakelos" Multiple class="form-control">
				<?php 
				
					$field_eidikotita=Field_eidikotita::all();
					
					foreach($field_eidikotita as $value){
					
						echo"	<option value='".$value->value."' default>".$value->value."</option> ";
					}
				?>			
				</select>
				</div>
				
				
				<label for="arithmosypoergoyolografos" class="col-sm-2 control-label" >Αριθμός <br>Υποέργου <br>Ολογράφως</label>
					<div class="col-sm-2" >
						<select id="arithmosypoergoyolografos" name="arithmosypoergoyolografos" Multiple class="form-control">
						</select>
					</div>			
			</div>			
		
		</div>
		

		<div class='row'>
			<div class="col-sm-12 col-md-12 form-group">
			
				<label for="katastasi" class="col-sm-2 col-md-2 control-label" >Κατάσταση</label>
				<div class="col-sm-2 col-md-2">
				<select id="katastasi" name="katastasi" Multiple class="form-control">
				<?php 
				
					$field_katastasi=Field_katastasi::all();
					
					foreach($field_katastasi as $value){
					
						echo"	<option value='".$value->value."' default>".$value->value."</option> ";
					}
				?>			
				</select>
				</div>	
				
				<label for="arithmospaketoyergasias" class="col-sm-2 col-md-offset-4 control-label" >Αριθμός <br>Πακέτου <br>Εργασίας</label>
					<div class="col-sm-2">
						<select id="arithmospaketoyergasias" name="arithmospaketoyergasias" Multiple class="form-control">
						</select>
					</div>

			</div>			
		</div>	

		<div class='row'>
			<div class="col-sm-12 col-md-12 form-group">
			
			<label for="onomastikieorti" class="col-sm-2 col-md-2 control-label" >Ονομαστική<br> Εορτή</label>
			<div class="col-sm-2 col-md-2 ">
				<input type="text" class="form-control" name="onomastikieorti" id="onomastikieorti" placeholder="Ονομαστική Εορτή" value="">
			</div>			

			</div>			
		</div>	
		
		<div class='row'>
			<div class="col-sm-12 col-md-12 form-group">

				<label for="fylo" class="col-sm-2 col-md-2 control-label" >Φύλο</label>
				<div class="col-sm-2 col-md-2">
				<select name="fylo" id="fylo" Multiple class="form-control">
					<option value="Άνδρας" default>Άνδρας</option>
					<option value="Γυναίκα">Γυναίκα</option>
				</select>
			</div>	

		</div>
		</div>
		
		<div class='row'>
			<div class="col-sm-12 col-md-12 form-group">
							
				<label for="dimosiosypallilos" class="col-sm-2 col-md-2 control-label" >Δημόσιος <br>Υπάλληλος</label>
				<div class="col-sm-2 col-md-2">
				<select id="dimosiosypallilos" name="dimosiosypallilos" Multiple class="form-control">
					<option value="ΝΑΙ">ΝΑΙ</option>
					<option value="ΟΧΙ">ΟΧΙ</option>
				</select>
				</div>				
			</div>
		</div>		
		

		<div class='row'>
			<div class="col-sm-12 col-md-12 form-group">
							
		<div class='col-xs-12 col-md-12 '><button type='submit' class='btn btn-lg btn-primary btn-block'>Αναζήτηση</button> </div>				
			
		</div>
		</div>	
		
	</form>
	
</div>	





<!---

$contractuals=Contractual::find('all', array('order' => 'onoma asc'));

echo "
<div class='container'>

	<form class='form-horizontal' role='form'  method='POST' action='edit_contractual.php'>

	<div class='row'>
		<h3> Συμβασιούχοι </h3>
		<div class='col-xs-1 col-md-1'></div><div class='col-xs-2 col-md-2'><h4> Όνομα </h4></div><div class='col-xs-2 col-md-2'><h4>Επώνυμο</h4></div> <br><br>
	</div>	
";

$i=0;

foreach ($contractuals as $contractual){

$i++;

	echo "
		<div class='row'>
		<div class='col-xs-1 col-md-1'>". $i. "</div>
		<div class='col-xs-2 col-md-2'>". $contractual->onoma. "</div>
		<div class='col-xs-2 col-md-2'>". $contractual->eponymo. "</div>
		<div class='col-xs-1 col-md-1'><input type='hidden' name='contractualid' value='$contractual->id'> </div>
		<div class='col-xs-2 col-md-2'><button type='submit' class='btn btn-lg btn-primary btn-block'>Επεξεργασία</button> </div>
		</div>";
 
}
echo"
</form></div>";
?>--->