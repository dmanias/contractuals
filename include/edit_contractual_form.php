
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
$('.epeksergasiastoixeion').css('background-color', '#428bca');
$('.epeksergasiastoixeion a').css('color', 'white');
</script>

<script src="js/ESPA_edit.js"></script>

<div class="container">
	<form class="form-horizontal" role="form"  method="POST" action="change_contractual.php">

	
	<ul class="nav nav-tabs" id="contractual-tabs">
		<li class="active"><a href="#genika" data-toggle="tab" >ΓΕΝΙΚΑ</a></li>
		<li><a href="#prosopika" data-toggle="tab">ΠΡΟΣΩΠΙΚΑ</a></li>
		<li><a href="#edraallilografia" data-toggle="tab">ΕΔΡΑ-ΑΛΛΗΛΟΓΡΑΦΙΑ</a></li>
		<li><a href="#katigoriaeidikotita" data-toggle="tab">ΚΑΤΗΓΟΡΙΑ-ΕΙΔΙΚΟΤΗΤΑ</a></li>
		<li><a href="#stoixeiaanathesiergoy" data-toggle="tab">ΑΝΑΘΕΣΗ ΕΡΓΟΥ</a></li>
		<li><a href="#trexoysasymvasi" data-toggle="tab">ΤΡΕΧΟΥΣΑ ΣΥΜΒΑΣΗ</a></li>
		<li><a href="#trexoysasymvasi" data-toggle="tab">ΙΣΤΟΡΙΚΟ ΣΥΜΒΑΣΕΩΝ</a></li>
	</ul>
		
	<div  class="tab-content">
		
			<!----------	Στοιχεία Γενικά ----->
		
	<div id="genika" class="tab-pane fade in active">
	
		<div class="form-group">
		
		</div>

		<div class="form-group">
			<label for="eponymo" class="col-sm-2 control-label" >Επώνυμο</label>
			<div class="col-sm-10">
				<input type="text" name="eponymo" class="form-control" id="eponymo"  value="<?php echo $contractual->eponymo ?>">			</div>
		</div>		
		
		
		<div class="form-group">
			<label for="onoma" class="col-sm-2 control-label" >Όνομα</label>
			<div class="col-sm-10">
				<input type="text" name="onoma" class="form-control" id="onoma" value="<?php echo $contractual->onoma ?>">
			</div>
		</div>
		
		<div class="form-group">
			<label for="patronymo" class="col-sm-2 control-label" >Πατρώνυμο</label>
			<div class="col-sm-10">
				<input type="text" name="patronymo" class="form-control" id="patronymo" value="<?php echo $contractual->patronymo ?>">
			</div>
		</div>		

<hr>	
		
		<div class="form-group">
			<label for="adt" class="col-sm-2 control-label" >Α.Δ.Τ.</label>
			<div class="col-sm-10">
				<input type="text" name="adt" class="form-control" id="adt"  value="<?php echo $contractual->adt ?>">
			</div>
		</div>	
	
		
		<div class="form-group">
			<label for="afm" class="col-sm-2 control-label" >Α.Φ.Μ.</label>
			<div class="col-sm-10">
				<input type="text" name="afm" class="form-control" id="afm"  value="<?php echo $contractual->afm ?>">
			</div>
		</div>
		
	
		<div class="form-group">
			<label for="doy" class="col-sm-2 control-label" >Δ.Ο.Υ.</label>
			<div class="col-sm-10">
				<input type="text" name="doy" class="form-control" id="doy" value="<?php echo $contractual->doy ?>">
			</div>
		</div>
	
		<div class="form-group">
			<label for="mitroomisthodotoymenoy" class="col-sm-2 control-label" >Μητρώο Μισθοδοτούμενου</label>
			<div class="col-sm-10">
				<input type="text" name="mitroomisthodotoymenoy" class="form-control" id="mitroomisthodotoymenoy"  value="<?php echo $contractual->mitroomisthodotoymenoy ?>">
			</div>
		</div>	
<hr>
		<div class="form-group">
			<label for="anathesiergoy" class="col-sm-2 control-label" >Ανάθεση Έργου</label>
				<div class="col-sm-10">
				<select id="anathesiergoy" name="anathesiergoy" Multiple class="form-control">
				
				<option value=" " <?php if($contractual->anathesiergoy==' '){echo 'selected';}?>> </option>				
				
				<?php 
				
					$field_anathesiergoy=Field_anathesiergoy::all();
					
					foreach($field_anathesiergoy as $value){
					
						echo"	<option value='$value->value'";
						if($value->value==$contractual->anathesiergoy){echo'selected';} 
						echo">$value->value</option> ";
					}
				?>			
				</select>
			</div>
		</div>		

		<div class="form-group">
			<label for="katastasi" class="col-sm-2 control-label" >Κατάσταση</label>
				<div class="col-sm-10">
				<select id="katastasi" name="katastasi" Multiple class="form-control">
				
				<option value=" " <?php if($contractual->katastasi==' '){echo 'selected';}?>> </option>	
				
				<?php 
				
					$field_katastasi=Field_katastasi::all();
					
					foreach($field_katastasi as $value){
					
						echo"	<option value='$value->value'";
						if($value->value==$contractual->katastasi){echo'selected';} 
						echo">$value->value</option> ";
					}
				?>			
				</select>
			</div>
		</div>	
</div>
		
		<!----------	Στοιχεία Προσωπικά ----->
		
	<div id="prosopika" class="tab-pane fade">
	

		<div class="form-group">
			
		</div>
		
		<div class="form-group">
			<label for="fylo" class="col-sm-2 control-label" >Φύλο</label>
			<div class="col-sm-10">
				<select name="fylo" id="fylo" Multiple class="form-control">
					<option value=" " <?php if($contractual->fylo==' '){echo 'selected';}?>> </option>	
					<option value="Άνδρας" <?php if($contractual->fylo=='Άνδρας'){echo 'selected';}?>>Άνδρας</option>
					<option value="Γυναίκα" <?php if($contractual->fylo=='Γυναίκα'){echo 'selected';}?>>Γυναίκα</option>
				</select>
			</div>
		</div>	
		
		
		<div class="form-group">
			<label for="oikogeneiakikatastasi" class="col-sm-2 control-label" >Οικογενειακή Κατάσταση</label>
			<div class="col-sm-10">
				<select id="oikogeneiakikatastasi" name="oikogeneiakikatastasi" Multiple class="form-control">
				<option value=" " <?php if($contractual->oikogeneiakikatastasi==' '){echo 'selected';}?>> </option>	
					<option value="Άγαμος" <?php if($contractual->oikogeneiakikatastasi=='Άγαμος'){echo 'selected';}?>>Άγαμος</option>
					<option value="Έγγαμος"<?php if($contractual->oikogeneiakikatastasi=='Έγγαμος'){echo 'selected';}?>>Έγγαμος</option>
					<option value="Διαζευμένος"<?php if($contractual->oikogeneiakikatastasi=='Διαζευμένος'){echo 'selected';}?>>Διαζευμένος</option>
				</select>
			</div>
		</div>	

		<div class="form-group">
			<label for="stratiotikesypoxreoseis" class="col-sm-2 control-label" >Στρατιωτικές Υποχρεώσεις</label>
			<div class="col-sm-10">
				<select name="stratiotikesypoxreoseis" id="stratiotikesypoxreoseis" Multiple class="form-control">
				<option value=" " <?php if($contractual->stratiotikesypoxreoseis==' '){echo 'selected';}?>> </option>	
					<option value="Εκπληρωμένες"<?php if($contractual->stratiotikesypoxreoseis=='Εκπληρωμένες'){echo 'selected';}?>>Εκπληρωμένες</option>
					<option value="Μη εκπληρωμένες"<?php if($contractual->stratiotikesypoxreoseis=='Μη εκπληρωμένες'){echo 'selected';}?>>Μη εκπληρωμένες</option>
					<option value="Δεν απαιτείται"<?php if($contractual->stratiotikesypoxreoseis=='Δεν απαιτείται'){echo 'selected';}?>>Δεν απαιτείται</option>
				</select>
			</div>
		</div>			
<hr>		
		<div class="form-group">
			<label for="imerominiagennisis" class="col-sm-2 control-label" >Ημερομηνία Γέννησης</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="imerominiagennisis" id="imerominiagennisis" value="<?php echo $contractual->imerominiagennisis ?>">
			</div>
		</div>			

		<div class="form-group">
			<label for="ilikia" class="col-sm-2 control-label" >Ηλικία</label>
			<div class="col-sm-10">
				<input type="text" min="17" max="99" class="form-control" id="ilikia" name="ilikia" value="<?php echo $contractual->ilikia ?>">
			</div>
		</div>	
<hr>
		<div class="form-group">
			<label for="onomastikieorti" class="col-sm-2 control-label" >Ονομαστική Εορτή</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="onomastikieorti" id="onomastikieorti" value="<?php echo $contractual->onomastikieorti ?>">
			</div>
		</div>		
		
		
	</div>
	
	<!----------	Στοιχεία Έδρας-Αλληλογραφίας ----->
	
	<div id="edraallilografia" class="tab-pane fade">
	

		<div class="form-group">
			
		</div>
		

		<div class="form-group">
			<label for="odos" class="col-sm-2 control-label" >Οδός</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="odos" id="odos"  value="<?php echo $contractual->odos ?>">
			</div>
		</div>			

		<div class="form-group">
			<label for="arithmos" class="col-sm-2 control-label" >Αριθμός</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="arithmos" name="arithmos"  value="<?php echo $contractual->arithmos ?>">
			</div>
		</div>	

		<div class="form-group">
			<label for="tk" class="col-sm-2 control-label" >Τ.Κ.</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="tk" id="tk"  value="<?php echo $contractual->tk ?>">
			</div>
		</div>		
		
		<div class="form-group">
			<label for="perioxi" class="col-sm-2 control-label" >Περιοχή</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="perioxi" id="perioxi" value="<?php echo $contractual->perioxi ?>">
			</div>
		</div>	
		
		<div class="form-group">
			<label for="katoikos" class="col-sm-2 control-label" >Κάτοικος</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="katoikos" id="katoikos"  value="<?php echo $contractual->katoikos ?>">
			</div>
		</div>				
		
		<div class="form-group">
			<label for="dimos" class="col-sm-2 control-label" >Δήμος</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="dimos" id="dimos" value="<?php echo $contractual->dimos ?>">
			</div>
		</div>			
		
	</div>
	
	
	<!----------	Στοιχεία Κατηγορίας-Ειδικότητας ----->
	<div id="katigoriaeidikotita" class="tab-pane fade">
	

		<div class="form-group">
			
		</div>
		
		<div class="form-group">
			<label for="thesi" class="col-sm-2 control-label" >Θέση</label>
			<div class="col-sm-10">
				<select id="thesi" name="thesi" Multiple class="form-control">
				<option value=" " <?php if($contractual->thesi==' '){echo 'selected';}?>> </option>	
					<option value="1"<?php if($contractual->thesi=='1'){echo 'selected';}?>>1</option>
					<option value="2"<?php if($contractual->thesi=='2'){echo 'selected';}?>>2</option>
					<option value="3"<?php if($contractual->thesi=='3'){echo 'selected';}?>>3</option>
					<option value="4"<?php if($contractual->thesi=='4'){echo 'selected';}?>>4</option>
					<option value="5"<?php if($contractual->thesi=='5'){echo 'selected';}?>>5</option>
					<option value="6"<?php if($contractual->thesi=='6'){echo 'selected';}?>>6</option>
					<option value="7"<?php if($contractual->thesi=='7'){echo 'selected';}?>>7</option>
					<option value="8"<?php if($contractual->thesi=='8'){echo 'selected';}?>>8</option>
					<option value="9"<?php if($contractual->thesi=='9'){echo 'selected';}?>>9</option>
					<option value="10"<?php if($contractual->thesi=='10'){echo 'selected';}?>>10</option>
					<option value="11"<?php if($contractual->thesi=='11'){echo 'selected';}?>>11</option>
					<option value="12"<?php if($contractual->thesi=='12'){echo 'selected';}?>>12</option>
					<option value="13"<?php if($contractual->thesi=='13'){echo 'selected';}?>>13</option>
					<option value="14"<?php if($contractual->thesi=='14'){echo 'selected';}?>>14</option>
					<option value="15"<?php if($contractual->thesi=='15'){echo 'selected';}?>>15</option>
					<option value="16"<?php if($contractual->thesi=='16'){echo 'selected';}?>>16</option>
					<option value="17"<?php if($contractual->thesi=='17'){echo 'selected';}?>>17</option>
					<option value="18"<?php if($contractual->thesi=='18'){echo 'selected';}?>>18</option>
					<option value="19"<?php if($contractual->thesi=='19'){echo 'selected';}?>>19</option>
					<option value="20"<?php if($contractual->thesi=='20'){echo 'selected';}?>>20</option>			
				</select>
			</div>
		</div>	

		<div class="form-group">
			<label for="katigoriaendiaferontos" class="col-sm-2 control-label" >Κατηγορία <small>(με βάση την πρόσκληση εκδήλωσης ενδιαφέροντος)</small></label>
				<div class="col-sm-10">
				<select id="katigoriaendiaferontos" name="katigoriaendiaferontos" Multiple class="form-control">
				<option value=" " <?php if($contractual->katigoriaendiaferontos==' '){echo 'selected';}?>> </option>
				<?php 
				
					$field_katigoria=Field_katigoria::all();
					
					foreach($field_katigoria as $value){
					
						echo"	<option value='$value->value'";
						if($value->value==$contractual->katigoriaendiaferontos){echo'selected';} 
						echo">$value->value</option> ";
					}
					
				?>		
				</select>
			</div>
		</div>	
		
		
		<div class="form-group">
			<label for="eidikotitaendiaferontos" class="col-sm-2 control-label" >Ειδικότητα <small>(με βάση την πρόσκληση εκδήλωσης ενδιαφέροντος)</small></label>
				<div class="col-sm-10">
					<textarea id="eidikotitaendiaferontos" class="form-control" name="eidikotitaendiaferontos" cols="25" rows="5"><?php echo $contractual->eidikotitaendiaferontos ?></textarea>
			</div>
		</div>	
<hr>
		<div class="form-group">
			<label for="katigoriafakelos" class="col-sm-2 control-label" >Κατηγορία <small>(με βάση το φάκελο υποψηφιότητας)</small></label>
				<div class="col-sm-10">
				<select id="katigoriafakelos" name="katigoriafakelos" Multiple class="form-control">
				<option value=" " <?php if($contractual->katigoriafakelos==' '){echo 'selected';}?>> </option>				
				<?php 
				
					$field_katigoria=Field_katigoria::all();
					
					foreach($field_katigoria as $value){
						echo"	<option value='$value->value'";
						if($value->value==$contractual->katigoriafakelos){echo'selected';} 
						echo">$value->value</option> ";
					}
				?>			
				</select>
			</div>
		</div>	

		<div class="form-group">
			<label for="eidikotitafakelos" class="col-sm-2 control-label" >Ειδικότητα <small>(με βάση το φάκελο υποψηφιότητας)</small></label>
				<div class="col-sm-10">
					<textarea id="eidikotitafakelos" class="form-control" name="eidikotitafakelos" cols="25" rows="5"><?php echo $contractual->eidikotitafakelos ?></textarea>
			</div>
		</div>	
<hr>
		
		<div class="form-group">
			<label for="dimosiosypallilos" class="col-sm-2 control-label" >Δημόσιος Υπάλληλος</label>
			<div class="col-sm-10">
				<select id="dimosiosypallilos" name="dimosiosypallilos" Multiple class="form-control">
				<option value=" " <?php if($contractual->dimosiosypallilos==' '){echo 'selected';}?>> </option>	
					<option value="ΝΑΙ"<?php if($contractual->dimosiosypallilos=='ΝΑΙ'){echo 'selected';}?>>ΝΑΙ</option>
					<option value="ΟΧΙ"<?php if($contractual->dimosiosypallilos=='ΟΧΙ'){echo 'selected';}?>>ΟΧΙ</option>
				</select>
			</div>
		</div>				
	</div>

	
<!----------	Στοιχεία Ανάθεσης Έργου ----->
	
	<div id="stoixeiaanathesiergoy" class="tab-pane fade">

		<div class="form-group">
		
		</div>

		<div class="form-group">
			<label for="xrisiegkatastaseon" class="col-sm-2 control-label" >Χρήση Εγκαταστάσεων </label>
				<div class="col-sm-10">
				<select id="xrisiegkatastaseon" name="xrisiegkatastaseon" Multiple class="form-control">
				<option value=" " <?php if($contractual->xrisiegkatastaseon==' '){echo 'selected';}?>> </option>
					<option value="ΝΑΙ"<?php if($contractual->xrisiegkatastaseon=='ΝΑΙ'){echo 'selected';}?>>ΝΑΙ</option>
					<option value="ΟΧΙ" <?php if($contractual->xrisiegkatastaseon=='ΟΧΙ'){echo 'selected';}?>>ΟΧΙ</option>
				</select>
			</div>
		</div>	
		
		
		<div class="form-group">
			<label for="eidosapasxolisis" class="col-sm-2 control-label" >Είδος Ανάθεσης</label>
				<div class="col-sm-10">
				 <select id="eidosapasxolisis" name="eidosapasxolisis" Multiple class="form-control">
				<option value=" " <?php if($contractual->eidosapasxolisis==' '){echo 'selected';}?>> </option>
					<?php 
				
						$field_eidosapasxolisis=Field_eidosapasxolisis::all();
					
						foreach($field_eidosapasxolisis as $value){
					
						echo"	<option value='$value->value'";
						if($value->value==$contractual->eidosapasxolisis){echo'selected';} 
						echo">$value->value</option> ";
						}
					?>	
				</select>	
			</div>
		</div>	

		<div class="form-group">
			<label for="toposapasxolisis" class="col-sm-2 control-label" >Τόπος Ανάθεσης</label>
				<div class="col-sm-10">
				<select id="toposapasxolisis" name="toposapasxolisis" Multiple class="form-control">
				<option value=" " <?php if($contractual->toposapasxolisis==' '){echo 'selected';}?>> </option>				
				<?php 
				
					$field_toposapasxolisis=Field_toposapasxolisis::all();
					
					foreach($field_toposapasxolisis as $value){
						echo"	<option value='$value->value'";
						if($value->value==$contractual->toposapasxolisis){echo'selected';} 
						echo">$value->value</option> ";
					}
				?>			
				</select>
			</div>
		</div>
		
		<div class="form-group">
			<label for="xorosapasxolisis" class="col-sm-2 control-label" >Χώρος Ανάθεσης</label>
				<div class="col-sm-10">
				<select id="xorosapasxolisis" name="xorosapasxolisis" Multiple class="form-control">
				<option value=" " <?php if($contractual->xorosapasxolisis==' '){echo 'selected';}?>> </option>					
				
				<?php 
				
					$field_xorosapasxolisis=Field_xorosapasxolisis::all();
					
					foreach($field_xorosapasxolisis as $value){
						echo"	<option value='$value->value'";
						if($value->value==$contractual->xorosapasxolisis){echo'selected';} 
						echo">$value->value</option> ";
					}
				?>			
				</select>
			</div>
		</div>			

		
		<div class="form-group">
			<label for="dieuthynsiapasxolisis" class="col-sm-2 control-label" >Διεύθυνση Ανάθεσης</label>
			<div class="col-sm-10">
				<select id="dieuthynsiapasxolisis" name="dieuthynsiapasxolisis" Multiple class="form-control">
				<option value=" " <?php if($contractual->dieuthynsiapasxolisis==' '){echo 'selected';}?>> </option>					
				
				<?php 
				
					$field_dieuthynsiapasxolisis=Field_dieuthynsiapasxolisis::all();
					
					foreach($field_dieuthynsiapasxolisis as $value){
						echo"	<option value='$value->value'";
						if($value->value==$contractual->dieuthynsiapasxolisis){echo'selected';} 
						echo">$value->value</option> ";
					}
				?>			
				</select>
			</div>
		</div>	

<hr>		
		
		<div class="form-group">
			<label for="emailergasias" class="col-sm-2 control-label" >Email Εργασίας</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="emailergasias" id="emailergasias" value="<?php echo $contractual->emailergasias ?>">
			</div>
		</div>	
		
		<div class="form-group">
			<label for="tilefonoergasias" class="col-sm-2 control-label" >Τηλέφωνο Εργασίας</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="tilefonoergasias" id="tilefonoergasias" value="<?php echo $contractual->tilefonoergasias ?>">
			</div>
		</div>		

		
		<div class="form-group">
			<label for="faxergasias" class="col-sm-2 control-label" >Fax Εργασίας</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="faxergasias" id="faxergasias" value="<?php echo $contractual->faxergasias ?>">
			</div>
		</div>	

		<div class="form-group">
			<label for="tilefonokinito" class="col-sm-2 control-label" >Τηλέφωνο Κινητό</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="tilefonokinito" id="tilefonokinito" value="<?php echo $contractual->tilefonokinito ?>">
			</div>
		</div>	

<hr>

		<div class="form-group">
			<label for="enarksianathesisergoyeap" class="col-sm-2 control-label" >Έναρξη Ανάθεσης Έργου στο Ε.Α.Π.</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="enarksianathesisergoyeap" id="enarksianathesisergoyeap" value="<?php echo $contractual->enarksianathesisergoyeap ?>">
			</div>
		</div>	
		
		<div class="form-group">
			<label for="enarksianathesisergoyespa" class="col-sm-2 control-label" >Έναρξη Ανάθεσης Έργου στο ΕΣΠΑ</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="enarksianathesisergoyespa" id="enarksianathesisergoyespa" value="<?php echo $contractual->enarksianathesisergoyespa ?>">
			</div>
		</div>		
<hr>
		<div class="form-group">
			<label for="diadikasiaanathesisergoy" class="col-sm-2 control-label" >Διαδικασία Ανάθεσης Έργου στο ΕΣΠΑ <small>(Βάσει οποίας επελέγει)</small></label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="diadikasiaanathesisergoy" id="diadikasiaanathesisergoy"  value="<?php echo $contractual->diadikasiaanathesisergoy ?>">
			</div>
		</div>	
<hr>		
		
		<div class="form-group">
			<label for="kormosespa" class="col-sm-2 control-label" >ΚΟΡΜΟΣ ΕΣΠΑ <small>(άτομα που <br>είχαν σύμβαση με το ΕΑΠ <br>πριν από ΕΣΠΑ)</small></label>
			<div class="col-sm-10">
				<select id="kormosespa" name="kormosespa" Multiple class="form-control">
				<option value=" " <?php if($contractual->kormosespa==' '){echo 'selected';}?>> </option>				
					<option value="ΝΑΙ" <?php if($contractual->kormosespa=='ΝΑΙ'){echo 'selected';}?> >ΝΑΙ</option>
					<option value="ΟΧΙ"  <?php if($contractual->kormosespa=='ΟΧΙ'){echo 'selected';}?>>ΟΧΙ</option>
				</select>
			</div>
		</div>					
	</div>	
		
<!----------	Στοιχεία Τρέχουσας Σύμβασης ----->
	
	<div id="trexoysasymvasi" class="tab-pane fade">


		<div class="form-group">
		
		</div>


		
		<div class="form-group">
			<label for="arithmostrexousassymvasis" class="col-sm-2 control-label" >Αριθμός Τρέχουσας Σύμβασης<small> (δεν περιλαμβάνονται χωριστά <br>οι τροποποιητικές)</small></label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="arithmostrexousassymvasis" id="arithmostrexousassymvasis" value="<?php echo $contractual->arithmostrexousassymvasis ?>">	
				</div>
		</div>	
<hr>
		
		<div class="form-group">
			<label for="imerominiaypografistrexoysassymvasis" class="col-sm-2 control-label" >Ημερομηνία Υπογραφής Τρέχουσας Σύμβασης</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="imerominiaypografistrexoysassymvasis" id="imerominiaypografistrexoysassymvasis" value="<?php echo $contractual->imerominiaypografistrexoysassymvasis ?>">			
				</div>
		</div>
<hr>

		
		<div class="form-group">
			<label for="aksonasproteraiotitas" class="col-sm-2 control-label" >Άξονας Προτεραιότητας</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="aksonasproteraiotitas" id="aksonasproteraiotitas" value="<?php echo $contractual->aksonasproteraiotitas ?>">
			</div>
		</div>			

		
		<div class="form-group">
			<label for="titlosaksonaproteraiotitas" class="col-sm-2 control-label" >Τίτλος <br>Άξονα προτεραιότητας</label>
			<div class="col-sm-10">
				<textarea id="titlosaksonaproteraiotitas" class="form-control" name="titlosaksonaproteraiotitas" ><?php echo $contractual->titlosaksonaproteraiotitas ?></textarea>
			</div>
		</div>	
<hr>
		<div class="form-group">
			<label for="ergopraksi" class="col-sm-2 control-label" >Έργο-Πράξη</label>
			<div class="col-sm-10">
				<select id="ergopraksi" name="ergopraksi" Multiple class="form-control">
				<option value=" " <?php if($contractual->ergopraksi==' '){echo 'selected';}?>> </option>				
					<option value="1" <?php if($contractual->ergopraksi=='1'){echo 'selected';}?> >ΕΛΛΗΝΙΚΟ ΑΝΟΙΚΤΟ ΠΑΝΕΠΙΣΤΗΜΙΟ</option>
					<option value="2" <?php if($contractual->ergopraksi=='2'){echo 'selected';}?>>ΓΡΑΦΕΙΟ ΔΙΑΣΥΝΔΕΣΗΣ ΕΛΛΗΝΙΚΟΥ ΑΝΟΙΚΤΟΥ ΠΑΝΕΠΙΣΤΗΜΙΟΥ</option>
					<option value="3" <?php if($contractual->ergopraksi=='3'){echo 'selected';}?>>ΔΟΜΗ ΑΠΑΣΧΟΛΗΣΗΣ ΚΑΙ ΣΤΑΔΙΟΔΡΟΜΙΑΣ (ΔΑΣΤΑ) ΕΑΠ</option>					
					<option value="4" <?php if($contractual->ergopraksi=='4'){echo 'selected';}?>>ΜΟΝΑΔΑ ΚΑΙΝΟΤΟΜΙΑΣ ΚΑΙ ΕΠΙΧΕΙΡΗΜΑΤΙΚΟΤΗΤΑΣ (ΜΚΕ) ΤΟΥ ΕΛΛΗΝΙΚΟΥ ΑΝΟΙΚΤΟΥ ΠΑΝΕΠΙΣΤΗΜΙΟΥ </option>					
					<option value="5"<?php if($contractual->ergopraksi=='5'){echo 'selected';}?> >ΜΟΔΙΠ ΤΟΥ ΕΑΠ</option>					
				</select>
			</div>
		</div>	
		
		<div class="form-group">
			<label for="misops" class="col-sm-2 control-label" >MIS-ΟΠΣ</label>
			<div  class="col-sm-10">
				<input type="text" class="form-control" id="misops" name="misops"  >
			</div>
		</div>		
<hr>
		<div class="form-group">
			<label for="arithmosypoergoyolografos" class="col-sm-2 control-label" >Αριθμός Υποέργου Ολογράφως</label>
			<div class="col-sm-10">
				<select id="arithmosypoergoyolografos" name="arithmosypoergoyolografos" Multiple class="form-control">
				
				</select>
			</div>
		</div>	

		<div class="form-group">
			<label for="arithmosypoergoy" class="col-sm-2 control-label" >Αριθμός Υποέργου</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="arithmosypoergoy" id="arithmosypoergoy" placeholder="Αριθμός Υποέργου" value="<?php echo $contractual->arithmosypoergoy ?>">
			</div>
		</div>	

		<div class="form-group">
			<label for="titlosypoergoy" class="col-sm-2 control-label" >Τίτλος Υποέργου </label>
			<div class="col-sm-10">
				<textarea type="text" class="form-control" name="titlosypoergoy" id="titlosypoergoy" placeholder="Τίτλος Υποέργου" ></textarea>
			</div>
		</div>	
<hr>		
		<div class="form-group">
			<label for="arithmospaketoyergasias" class="col-sm-2 control-label" >Αριθμός <br>Πακέτου Εργασίας</label>
			<div class="col-sm-10">
				<select id="arithmospaketoyergasias" name="arithmospaketoyergasias" Multiple class="form-control">
				</select>
			</div>
		</div>		

		<div class="form-group">
			<label for="titlospaketoyergasias" class="col-sm-2 control-label" >Τίτλος <br>Πακέτου Εργασίας</label>
			<div class="col-sm-10">
				<textarea class="form-control" name="titlospaketoyergasias" id="titlospaketoyergasias" > </textarea>
			</div>
		</div>	
<hr>		
		<div class="form-group">
			<label for="apofasientaksisergoypraksis" class="col-sm-2 control-label" >Απόφαση Ένταξης Έργου-Πράξης</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="apofasientaksisergoypraksis" id="apofasientaksisergoypraksis"  placeholder="Απόφαση Ένταξης Έργου-Πράξης" value="<?php echo $contractual->apofasientaksisergoypraksis ?>">
			</div>
		</div>			
		
		
		<div class="form-group">
			<label for="apofasiylopoiisisypoergoymetaidiamesa" class="col-sm-2 control-label" >Απόφαση Υλοποίησης Υποέργου <br>Με Τα Ίδια Μέσα</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="apofasiylopoiisisypoergoymetaidiamesa" id="apofasiylopoiisisypoergoymetaidiamesa"  placeholder="Απόφαση Υλοποίησης Υποέργου Με Τα Ίδια Μέσα" value="<?php echo $contractual->apofasiylopoiisisypoergoymetaidiamesa ?>">
			</div>
		</div>	

		<div class="form-group">
			<label for="apofaside" class="col-sm-2 control-label" >Απόφαση ΔΕ</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="apofaside" id="apofaside"  value="<?php echo $contractual->apofaside ?>">
			</div>
		</div>	
		
		<div class="form-group">
			<label for="apofasiedel" class="col-sm-2 control-label" >Απόφαση ΕΔΕΛ</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="apofasiedel" id="apofasiedel"  value="<?php echo $contractual->apofasiedel ?>">
			</div>
		</div>	
<hr>	
		<div class="form-group">
			<label for="posotrexoysassymvasisolografos" class="col-sm-2 control-label" >Ποσό Τρέχουσας Σύμβασης Ολογράφως </label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="posotrexoysassymvasisolografos" id="posotrexoysassymvasisolografos"  value="<?php echo $contractual->posotrexoysassymvasisolografos ?>">
			</div>
		</div>			
		
		<div class="form-group">
			<label for="posotrexoysassymvasis" class="col-sm-2 control-label" >Ποσό Τρέχουσας Σύμβασης</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="posotrexoysassymvasis" id="posotrexoysassymvasis"  value="<?php echo $contractual->posotrexoysassymvasis ?>">
			</div>
		</div>	
<hr>
		<div class="form-group">
			<label for="diarkeiatrexoysassymvasis" class="col-sm-2 control-label" >Διάρκεια Τρέχουσας Σύμβασης Σε Μήνες</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="diarkeiatrexoysassymvasis" id="diarkeiatrexoysassymvasis"  value="<?php echo $contractual->diarkeiatrexoysassymvasis ?>">
			</div>
		</div>	

		<div class="form-group">
			<label for="enarksitrexoysassymvasis" class="col-sm-2 control-label" >Έναρξη Τρέχουσας Σύμβασης </label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="enarksitrexoysassymvasis" id="enarksitrexoysassymvasis"  value="<?php echo $contractual->enarksitrexoysassymvasis ?>">
			</div>
		</div>	

		<div class="form-group">
			<label for="liksitrexoysassymvasis" class="col-sm-2 control-label" >Λήξη Τρέχουσας Σύμβασης </label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="liksitrexoysassymvasis" id="liksitrexoysassymvasis"  value="<?php echo $contractual->liksitrexoysassymvasis ?>">
			</div>
		</div>	
<hr>		
		<div class="form-group">
			<label for="epistimonikosypeythinosergoypraksis" class="col-sm-2 control-label" >Επιστημονικός Υπεύθυνος Έργου-Πράξης</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="epistimonikosypeythinosergoypraksis" id="epistimonikosypeythinosergoypraksis"  placeholder="Επιστημονικός Υπεύθυνος Έργου-Πράξης" value="">
			</div>
		</div>
		
		<div class="form-group">
			<label for="epistimonikosypeythinosypoergoy" class="col-sm-2 control-label" >Επιστημονικός Υπεύθυνος Υποέργου</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="epistimonikosypeythinosypoergoy" id="epistimonikosypeythinosypoergoy"  placeholder="Επιστημονικός Υπεύθυνος Υποέργου" value="">
			</div>
		</div>	
	
	
		
	 </div>	
	 
		
	<div class="row">
	
		<div class='col-xs-2 col-md-2'>
				<input type='hidden' name='contractualid' value="<?php echo $contractual->id ?>"> 
				<input type='hidden' name='deletecontractual' value='FALSE'> 
		</div>

		<div class='col-xs-3 col-md-3'>
			<button type="submit" class="btn btn-primary btn-block">Επικαιροποίηση</button>
		</div>

</form>

<form class="form-horizontal" role="form"  method="POST" action="change_contractual.php">


			<div class='arithmospaketou'>  <!--BOHTHITIKO--->
				<input type='hidden' name='arithmospaketou'id="arithmospaketou" value="<?php echo $contractual->arithmospaketoyergasias ?>"> 

			</div>	
		
			<div class='col-xs-1 col-md-1'>
				<input type='hidden' name='contractualid' value="<?php echo $contractual->id ?>"> 
				<input type='hidden' name='deletecontractual' value='TRUE'> 
			</div>
			<div class='col-xs-3 col-md-3'>
				<button type="submit" class="btn btn-primary btn-block">Διαγραφή</button>
			</div>
	</div>
</form>

</div>