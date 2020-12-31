
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
			<div class="col-sm-10" >
			<span class="form-control" disabled>	<?php echo $contractual->eponymo ?>	</span></div>
		</div>		
		
		
		<div class="form-group">
			<label for="onoma" class="col-sm-2 control-label" >Όνομα</label>
			<div class="col-sm-10">
<span class="form-control"disabled><?php echo $contractual->onoma ?></span>
			</div>
		</div>
		
		<div class="form-group">
			<label for="patronymo" class="col-sm-2 control-label" >Πατρώνυμο</label>
			<div class="col-sm-10">
<span class="form-control"disabled><?php echo $contractual->patronymo ?></span>
			</div>
		</div>		

<hr>	
		
		<div class="form-group">
			<label for="adt" class="col-sm-2 control-label" >Α.Δ.Τ.</label>
			<div class="col-sm-10">
<span class="form-control"disabled><?php echo $contractual->adt ?></span>
			</div>
		</div>	
	
		
		<div class="form-group">
			<label for="afm" class="col-sm-2 control-label" >Α.Φ.Μ.</label>
			<div class="col-sm-10">
<span class="form-control"disabled><?php echo $contractual->afm ?></span>
			</div>
		</div>
		
	
		<div class="form-group">
			<label for="doy" class="col-sm-2 control-label" >Δ.Ο.Υ.</label>
			<div class="col-sm-10">
<span class="form-control"disabled><?php echo $contractual->doy ?></span>
			</div>
		</div>
	
		<div class="form-group">
			<label for="mitroomisthodotoymenoy" class="col-sm-2 control-label" >Μητρώο Μισθοδοτούμενου</label>
			<div class="col-sm-10">
<span class="form-control"disabled><?php echo $contractual->mitroomisthodotoymenoy ?></span>
			</div>
		</div>	
<hr>
		<div class="form-group">
			<label for="anathesiergoy" class="col-sm-2 control-label" >Ανάθεση Έργου</label>
				<div class="col-sm-10">
<span class="form-control"disabled>
				<?php 
echo $contractual->anathesiergoy;
				?>		</span>	

			</div>
		</div>		

		<div class="form-group">
			<label for="katastasi" class="col-sm-2 control-label" >Κατάσταση</label>
				<div class="col-sm-10">
<span class="form-control"disabled>
				<?php 
echo $contractual->katastasi;
				?>	</span>		

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
				<span class="form-control"disabled><?php 
echo $contractual->fylo;
				?></span>
			</div>
		</div>	
		
		
		<div class="form-group">
			<label for="oikogeneiakikatastasi" class="col-sm-2 control-label" >Οικογενειακή Κατάσταση</label>
			<div class="col-sm-10">
		<span class="form-control"disabled>		<?php 
echo $contractual->oikogeneiakikatastasi;
				?>
			</div></span>
		</div>	

		<div class="form-group">
			<label for="stratiotikesypoxreoseis" class="col-sm-2 control-label" >Στρατιωτικές Υποχρεώσεις</label>
			<div class="col-sm-10">
			<span class="form-control"disabled>	<?php 
echo $contractual->stratiotikesypoxreoseis;
				?></span>
			</div>
		</div>			
<hr>		
		<div class="form-group">
			<label for="imerominiagennisis" class="col-sm-2 control-label" >Ημερομηνία Γέννησης</label>
			<div class="col-sm-10">
	<span class="form-control"disabled>	<?php echo $contractual->imerominiagennisis ?>
			</div></span>
		</div>			

		<div class="form-group">
			<label for="ilikia" class="col-sm-2 control-label" >Ηλικία</label>
			<div class="col-sm-10">
<span class="form-control"disabled><?php echo $contractual->ilikia ?></span>
			</div>
		</div>	
<hr>
		<div class="form-group">
			<label for="onomastikieorti" class="col-sm-2 control-label" >Ονομαστική Εορτή</label>
			<div class="col-sm-10">
<span class="form-control"disabled><?php echo $contractual->onomastikieorti ?></span>
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
<span class="form-control"disabled><?php echo $contractual->odos ?></span>
			</div>
		</div>			

		<div class="form-group">
			<label for="arithmos" class="col-sm-2 control-label" >Αριθμός</label>
			<div class="col-sm-10">
<span class="form-control"disabled><?php echo $contractual->arithmos ?></span>
			</div>
		</div>	

		<div class="form-group">
			<label for="tk" class="col-sm-2 control-label" >Τ.Κ.</label>
			<div class="col-sm-10">
<span class="form-control"disabled><?php echo $contractual->tk ?></span>
			</div>
		</div>		
		
		<div class="form-group">
			<label for="perioxi" class="col-sm-2 control-label" >Περιοχή</label>
			<div class="col-sm-10">
<span class="form-control"disabled><?php echo $contractual->perioxi ?></span>
			</div>
		</div>	
		
		<div class="form-group">
			<label for="katoikos" class="col-sm-2 control-label" >Κάτοικος</label>
			<div class="col-sm-10">
<span class="form-control"disabled><?php echo $contractual->katoikos ?></span>
			</div>
		</div>				
		
		<div class="form-group">
			<label for="dimos" class="col-sm-2 control-label" >Δήμος</label>
			<div class="col-sm-10">
<span class="form-control"disabled><?php echo $contractual->dimos ?></span>
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
<span class="form-control"disabled><?php echo $contractual->thesi ?></span>	
			</div>
		</div>	

		<div class="form-group">
			<label for="katigoriaendiaferontos" class="col-sm-2 control-label" >Κατηγορία <br><small>(με βάση την πρόσκληση εκδήλωσης ενδιαφέροντος)</small></label>
				<div class="col-sm-10">
		<span class="form-control"disabled>
				<?php 
echo $contractual->katigoriaendiaferontos
				?>	</span>		
				
			</div>
		</div>	
		
		
		<div class="form-group">
			<label for="eidikotitaendiaferontos" class="col-sm-2 control-label" >Ειδικότητα <br><small>(με βάση την πρόσκληση εκδήλωσης ενδιαφέροντος)</small></label>
				<div class="col-sm-10">
				<textarea id="eidikotitaendiaferontos" class="form-control" name="eidikotitaendiaferontos"disabled> <?php echo $contractual->eidikotitaendiaferontos ?></textarea>
			</div>
		</div>	
<hr>
		<div class="form-group">
			<label for="katigoriafakelos" class="col-sm-2 control-label" >Κατηγορία <br><small>(με βάση το φάκελο υποψηφιότητας)</small></label>
				<div class="col-sm-10">
		<span class="form-control"disabled>
				<?php 
echo $contractual->katigoriafakelos
				?></span>			
			
			</div>
		</div>	

		<div class="form-group">
			<label for="eidikotitafakelos" class="col-sm-2 control-label" >Ειδικότητα <br><small>(με βάση το φάκελο υποψηφιότητας)</small></label>
				<div class="col-sm-10">
				<div class="col-sm-10">
				<textarea id="eidikotitaendiaferontos" class="form-control" name="eidikotitaendiaferontos" disabled> <?php  echo $contractual->eidikotitafakelos ?></textarea>
			</div>

				</div>
		</div>	
<hr>
		
		<div class="form-group">
			<label for="dimosiosypallilos" class="col-sm-2 control-label" >Δημόσιος Υπάλληλος</label>
			<div class="col-sm-10">
				<span class="form-control"disabled><?php 				
echo $contractual->dimosiosypallilos
				?><span>
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
		<span class="form-control"disabled>	<?php 				
echo $contractual->xrisiegkatastaseon
				?></span>
			</div>
		</div>	
		
		
		<div class="form-group">
			<label for="eidosapasxolisis" class="col-sm-2 control-label" >Είδος Ανάθεσης</label>
				<div class="col-sm-10">
				<span class="form-control"disabled>
					<?php 
echo $contractual->eidosapasxolisis
					?>	</span>
					
			</div>
		</div>	

		<div class="form-group">
			<label for="toposapasxolisis" class="col-sm-2 control-label" >Τόπος Ανάθεσης</label>
				<div class="col-sm-10">
				<span class="form-control"disabled>
				<?php 
echo $contractual->toposapasxolisis
				?>	</span>		
			
			</div>
		</div>
		
		<div class="form-group">
			<label for="xorosapasxolisis" class="col-sm-2 control-label" >Χώρος Ανάθεσης</label>
				<div class="col-sm-10">
				<span class="form-control"disabled>
				<?php 
echo $contractual->xorosapasxolisis
				?>	</span>		
			</div>
		</div>			

		
		<div class="form-group">
			<label for="dieuthynsiapasxolisis" class="col-sm-2 control-label" >Διεύθυνση Ανάθεσης</label>
			<div class="col-sm-10">
<span class="form-control"disabled><?php echo $contractual->dieuthynsiapasxolisis ?></span>
			</div>
		</div>	

<hr>		
		
		<div class="form-group">
			<label for="emailergasias" class="col-sm-2 control-label" >Email Εργασίας</label>
			<div class="col-sm-10">
<span class="form-control"disabled><?php echo $contractual->emailergasias ?></span>
			</div>
		</div>	
		
		<div class="form-group">
			<label for="tilefonoergasias" class="col-sm-2 control-label" >Τηλέφωνο Εργασίας</label>
			<div class="col-sm-10">
<span class="form-control"disabled><?php echo $contractual->tilefonoergasias ?></span>
			</div>
		</div>		

		
		<div class="form-group">
			<label for="faxergasias" class="col-sm-2 control-label" >Fax Εργασίας</label>
			<div class="col-sm-10">
<span class="form-control"disabled><?php echo $contractual->faxergasias ?></span>
			</div>
		</div>	

		<div class="form-group">
			<label for="tilefonokinito" class="col-sm-2 control-label" >Τηλέφωνο Κινητό</label>
			<div class="col-sm-10">
<span class="form-control"disabled><?php echo $contractual->tilefonokinito ?></span>
			</div>
		</div>	

<hr>

		<div class="form-group">
			<label for="enarksianathesisergoyeap" class="col-sm-2 control-label" >Έναρξη Ανάθεσης Έργου στο Ε.Α.Π.</label>
			<div class="col-sm-10">
<span class="form-control"disabled><?php echo $contractual->enarksianathesisergoyeap ?></span>
			</div>
		</div>	
		

<hr>
		<div class="form-group">
			<label for="diadikasiaanathesisergoy" class="col-sm-2 control-label" >Διαδικασία Ανάθεσης Έργου στο ΕΣΠΑ <small>(Βάσει οποίας επελέγει)</small></label>
			<div class="col-sm-10">
<span class="form-control"disabled><?php echo $contractual->diadikasiaanathesisergoy ?></span>
			</div>
		</div>	
<hr>		
		
		<div class="form-group">
			<label for="kormosespa" class="col-sm-2 control-label" >ΚΟΡΜΟΣ ΕΣΠΑ <small>(άτομα που <br>είχαν σύμβαση με το ΕΑΠ <br>πριν από ΕΣΠΑ)</small></label>
			<div class="col-sm-10">
<span class="form-control"disabled><?php echo $contractual->kormosespa ?></span>
			</div>
		</div>					
	</div>	
		
<!----------	Στοιχεία Τρέχουσας Σύμβασης ----->
	
	<div id="trexoysasymvasi" class="tab-pane fade">

		<div class="form-group">
			
		</div>
	
		
		<div class="form-group">
			<label for="arithmostrexousassymvasis" class="col-sm-2 control-label" >Αριθμός Τρέχουσας Σύμβασης <br><small> (δεν περιλαμβάνονται χωριστά<br> οι τροποποιητικές)</small></label>
				<div class="col-sm-10">
<span class="form-control"disabled><?php echo $contractual->arithmostrexousassymvasis ?></span>
				</div>
		</div>	
<hr>
		
		<div class="form-group">
			<label for="imerominiaypografistrexoysassymvasis" class="col-sm-2 control-label" >Ημερομηνία Υπογραφής Τρέχουσας Σύμβασης</label>
				<div class="col-sm-10">
<span class="form-control"disabled><?php echo $contractual->imerominiaypografistrexoysassymvasis ?></span>			
				</div>
		</div>
<hr>

		
		<div class="form-group">
			<label for="aksonasproteraiotitas" class="col-sm-2 control-label" >Άξονας Προτεραιότητας</label>
				<div class="col-sm-10">
<span class="form-control"disabled><?php echo $contractual->aksonasproteraiotitas ?></span>
			</div>
		</div>			

		
		<div class="form-group">
			<label for="titlosaksonaproteraiotitas" class="col-sm-2 control-label" >Τίτλος <br>Άξονα προτεραιότητας</label>
			<div class="col-sm-10">
				<textarea id="titlosaksonaproteraiotitas" class="form-control" name="titlosaksonaproteraiotitas" disabled><?php echo $contractual->titlosaksonaproteraiotitas ?>  </textarea>
			</div>			
			</div>
		
<hr>
		<div class="form-group">
			<label for="ergopraksi" class="col-sm-2 control-label" >Έργο-Πράξη</label>
			<div class="col-sm-10">
<span class="form-control"disabled>

 <?php 
 if($contractual->ergopraksi==' '){echo 'selected';}
 if($contractual->ergopraksi=='1'){echo 'ΕΛΛΗΝΙΚΟ ΑΝΟΙΚΤΟ ΠΑΝΕΠΙΣΤΗΜΙΟ';}
 if($contractual->ergopraksi=='2'){echo 'ΓΡΑΦΕΙΟ ΔΙΑΣΥΝΔΕΣΗΣ ΕΛΛΗΝΙΚΟΥ ΑΝΟΙΚΤΟΥ ΠΑΝΕΠΙΣΤΗΜΙΟΥ';}
 if($contractual->ergopraksi=='3'){echo 'ΔΟΜΗ ΑΠΑΣΧΟΛΗΣΗΣ ΚΑΙ ΣΤΑΔΙΟΔΡΟΜΙΑΣ (ΔΑΣΤΑ) ΕΑΠ';} 
 if($contractual->ergopraksi=='4'){echo 'ΜΟΝΑΔΑ ΚΑΙΝΟΤΟΜΙΑΣ ΚΑΙ ΕΠΙΧΕΙΡΗΜΑΤΙΚΟΤΗΤΑΣ (ΜΚΕ) ΤΟΥ ΕΛΛΗΝΙΚΟΥ ΑΝΟΙΚΤΟΥ ΠΑΝΕΠΙΣΤΗΜΙΟΥ';}
 if($contractual->ergopraksi=='5'){echo 'ΜΟΔΙΠ ΤΟΥ ΕΑΠ';}?> 					
			
</span>
			</div>
		</div>	
		
		<div class="form-group">
			<label for="misops" class="col-sm-2 control-label" >MIS-ΟΠΣ</label>
			<div  class="col-sm-10">
<span class="form-control"disabled><?php echo $contractual->misops ?></span>
			</div>
		</div>		
<hr>
		<div class="form-group">
			<label for="arithmosypoergoyolografos" class="col-sm-2 control-label" >Αριθμός Υποέργου Ολογράφως</label>
			<div class="col-sm-10">
<span class="form-control"disabled><?php echo $contractual->arithmosypoergoyolografos ?></span>
				</select>
			</div>
		</div>	

		<div class="form-group">
			<label for="arithmosypoergoy" class="col-sm-2 control-label" >Αριθμός Υποέργου</label>
			<div class="col-sm-10">
<span class="form-control"disabled><?php echo $contractual->arithmosypoergoy ?></span>
			</div>
		</div>	

		<div class="form-group">
			<label for="titlosypoergoy" class="col-sm-2 control-label" >Τίτλος Υποέργου </label>
			<div class="col-sm-10">
		<textarea class="form-control"disabled><?php echo $contractual->titlosypoergoy ?></textarea>
			</div>
		</div>	
<hr>		
		<div class="form-group">
			<label for="arithmospaketoyergasias" class="col-sm-2 control-label" >Αριθμός <br>Πακέτου Εργασίας</label>
			<div class="col-sm-10">
<span class="form-control"disabled><?php echo $contractual->arithmospaketoyergasias ?></span>
			</div>
		</div>		

		<div class="form-group">
			<label for="titlospaketoyergasias" class="col-sm-2 control-label" >Τίτλος <br>Πακέτου Εργασίας</label>
			<div class="col-sm-10">
			<textarea class="form-control"disabled><?php echo $contractual->titlospaketoyergasias ?></textarea>
			</div>
		</div>	
<hr>		
		<div class="form-group">
			<label for="apofasientaksisergoypraksis" class="col-sm-2 control-label" >Απόφαση Ένταξης Έργου-Πράξης</label>
			<div class="col-sm-10">
<span class="form-control"disabled><?php echo $contractual->apofasientaksisergoypraksis ?></span>
			</div>
		</div>			
		
		<div class="form-group">
			<label for="apofasiylopoiisisypoergoymetaidiamesa" class="col-sm-2 control-label" >Απόφαση Υλοποίησης Υποέργου <br>Με Τα Ίδια Μέσα</label>
			<div class="col-sm-10">
<span class="form-control"disabled><?php echo $contractual->apofasiylopoiisisypoergoymetaidiamesa ?></span>
			</div>
		</div>	

		<div class="form-group">
			<label for="apofaside" class="col-sm-2 control-label" >Απόφαση ΔΕ</label>
			<div class="col-sm-10">
<span class="form-control"disabled><?php echo $contractual->apofaside ?></span>
			</div>
		</div>	
		
		<div class="form-group">
			<label for="apofasiedel" class="col-sm-2 control-label" >Απόφαση ΕΔΕΛ</label>
			<div class="col-sm-10">
<span class="form-control"disabled><?php echo $contractual->apofasiedel ?></span>
			</div>
		</div>	
<hr>	
		<div class="form-group">
			<label for="posotrexoysassymvasisolografos" class="col-sm-2 control-label" >Ποσό Τρέχουσας Σύμβασης Ολογράφως </label>
			<div class="col-sm-10">
<span class="form-control"disabled><?php echo $contractual->posotrexoysassymvasisolografos ?></span>
			</div>
		</div>			
		
		<div class="form-group">
			<label for="posotrexoysassymvasis" class="col-sm-2 control-label" >Ποσό Τρέχουσας Σύμβασης</label>
			<div class="col-sm-10">
<span class="form-control"disabled><?php echo $contractual->posotrexoysassymvasis ?></span>
			</div>
		</div>	
<hr>
		<div class="form-group">
			<label for="diarkeiatrexoysassymvasis" class="col-sm-2 control-label" >Διάρκεια Τρέχουσας Σύμβασης Σε Μήνες</label>
			<div class="col-sm-10">
<span class="form-control"disabled><?php echo $contractual->diarkeiatrexoysassymvasis ?></span>
			</div>
		</div>	

		<div class="form-group">
			<label for="enarksitrexoysassymvasis" class="col-sm-2 control-label" >Έναρξη Τρέχουσας Σύμβασης </label>
			<div class="col-sm-10">
<span class="form-control"disabled><?php echo $contractual->enarksitrexoysassymvasis ?></span>
			</div>
		</div>	

		<div class="form-group">
			<label for="liksitrexoysassymvasis" class="col-sm-2 control-label" >Λήξη Τρέχουσας Σύμβασης </label>
			<div class="col-sm-10">
<span class="form-control"disabled><?php echo $contractual->liksitrexoysassymvasis ?></span>
			</div>
		</div>	
<hr>		
		<div class="form-group">
			<label for="epistimonikosypeythinosergoypraksis" class="col-sm-2 control-label" >Επιστημονικός Υπεύθυνος Έργου-Πράξης</label>
			<div class="col-sm-10">
<span class="form-control"disabled><?php echo $contractual->epistimonikosypeythinosergoypraksis ?></span>
			</div>
		</div>
		
		<div class="form-group">
			<label for="epistimonikosypeythinosypoergoy" class="col-sm-2 control-label" >Επιστημονικός Υπεύθυνος Υποέργου</label>
			<div class="col-sm-10">
<span class="form-control"disabled><?php echo $contractual->epistimonikosypeythinosypoergoy ?></span>

			</div>
		</div>	
	

		
	 </div>	
	 
		
</form>


</div>