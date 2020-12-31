	<!----------	Στοιχεία Έκδοσης Εγγράφων ----->

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

$contractual_id=$_POST['contractualid'];

$contractual=Contractual::find($contractual_id);

?>

<?php 

$eggrafo=Eggrafo::first(array('conditions' => array('contractual_id = ?', $contractual_id)));
?>
	
<div class='container'>
	
	<form class='form-horizontal' role='form'  method='POST' action='add_stoixeia_eggrafon_data.php'>
	
		<div class="form-group">
			<label for="name"  ><h4><u>Βεβαίωση ΕΣΠΑ</u></h4></label>
		</div>
			
		
		<div class="form-group">
			<label for="symvasioyxosseaitiatiki" class="col-sm-2 control-label" >Συμβασιούχος σε Αιτιατική</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="symvasioyxosseaitiatiki" id="symvasioyxosseaitiatiki" placeholder="Για παράδειγμα 'Δημοσθένη Μανιά'" value='<?php echo $eggrafo->symvasioyxosseaitiatiki ?>'>
			</div>
		</div>			



		<div class="form-group">
			<label for="epistimonikosypeythinosergoyseaitiatiki" class="col-sm-2 control-label" >Επιστημονικός Υπεύθυνος 'Εργου σε Αιτιατική</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="epistimonikosypeythinosergoyseaitiatiki" id="epistimonikosypeythinosergoyseaitiatiki" placeholder="Για παράδειγμα 'Καθηγητή κ. Χαράλαμπο Κοκκώση'" value='<?php echo $eggrafo->epistimonikosypeythinosergoyseaitiatiki ?>'>
			</div>
		</div>

		<div class="form-group">
			<label for="epistimonikosypeythinosypoergoyseaitiatiki" class="col-sm-2 control-label" >Επιστημονικός Υπεύθυνος Υποέργου σε Αιτιατική</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="epistimonikosypeythinosypoergoyseaitiatiki" id="epistimonikosypeythinosypoergoyseaitiatiki" placeholder="Για παράδειγμα 'Αναπληρωτή Καθηγητή κ. Αχιλλέα Καμέα'" value='<?php echo $eggrafo->epistimonikosypeythinosypoergoyseaitiatiki ?>'>
			</div>
		</div>	
		
		<div class="form-group">
			<label for="lektikoypoyrgeioypaideias" class="col-sm-2 control-label" >Λεκτικό Υπουργείου Παιδείας</label>
			<div class="col-sm-10">
				<select id="lektikoypoyrgeioypaideias" name="lektikoypoyrgeioypaideias" Multiple class="form-control">
					<option value="ΥΠΑΙΘ" selected >ΥΠΑΙΘ</option>
					<option value="ΥΠΑΙΘΠΑ" >ΥΠΑΙΘΠΑ</option>
					<option value="ΥΠΔΒΜΘ" >ΥΠΔΒΜΘ</option>					
				
				</select>
			</div>
		</div>
		
		<div class="form-group">
			<label for="name"  ><h4><u>Σύμβαση ΕΣΠΑ</u></h4></label>
		</div>
		
		<div class="form-group">
			<label for="apofasientaksisergoypraksismetropopoiisi" class="col-sm-2 control-label" >Απόφαση Ένταξης Έργου-Πράξης (με τροποποίηση)</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="apofasientaksisergoypraksismetropopoiisi" id="apofasientaksisergoypraksismetropopoiisi" placeholder="Για παράδειγμα 'δεκατεσσάρων χιλιάδων'" value='<?php echo $eggrafo->apofasientaksisergoypraksismetropopoiisi ?>'>
			</div>
		</div>	

		<div class="form-group">
			<label for="apofasiylopoiisisypoergoymetaidiamesametropopoiisi" class="col-sm-2 control-label" >Απόφαση Υλοποίησης Υποέργου 
			Με Τα Ίδια Μέσα (με τροποποίηση)</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="apofasiylopoiisisypoergoymetaidiamesametropopoiisi" id="apofasiylopoiisisypoergoymetaidiamesametropopoiisi" placeholder="Για παράδειγμα 'δεκατεσσάρων χιλιάδων'" value='<?php echo $eggrafo->apofasiylopoiisisypoergoymetaidiamesametropopoiisi ?>'>
			</div>
		</div>			
		
		
		
		<div class="form-group">
			<label for="pososimvasisolografosseaitiatiki" class="col-sm-2 control-label" >Ποσό Σύμβασης Ολογράφως σε Αιτιατική</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="pososimvasisolografosseaitiatiki" id="pososimvasisolografosseaitiatiki" placeholder="Για παράδειγμα 'δεκατεσσάρων χιλιάδων'" value='<?php echo $eggrafo->pososimvasisolografosseaitiatiki ?>'>
			</div>
		</div>			
		
	<input type='hidden' name='contractualid' value='<?php echo $contractual->id ?>'> 	
	<input type='hidden' name='onoma' value='<?php echo $contractual->onoma ?>'> 	
	<input type='hidden' name='eponymo' value='<?php echo $contractual->eponymo ?>'> 	
	<button type="submit" class="btn btn-lg btn-primary btn-block">Καταχώρηση</button>

</form>
		
	</div>	 