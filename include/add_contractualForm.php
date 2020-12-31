
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
$('.eisagogistoixeion').css('background-color', '#428bca');
$('.eisagogistoixeion a').css('color', 'white');
</script>


<script src="js/ESPA.js"></script>


<div class="container">
	<form class="form-horizontal" role="form"  method="POST" action="confirm_newcontractual.php">

	
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
		<!--	<label for="name"  >Γενικά</label> -->
		</div>

		<div class="form-group">
			<label for="eponymo" class="col-sm-2 control-label" >Επώνυμο</label>
			<div class="col-sm-10">
				<input type="text" name="eponymo" class="form-control" id="eponymo" placeholder="Επώνυμο" value=" ">
			</div>
		</div>		
		
		
		<div class="form-group">
			<label for="onoma" class="col-sm-2 control-label" >Όνομα</label>
			<div class="col-sm-10">
				<input type="text" name="onoma" class="form-control" id="onoma" placeholder="Όνομα" value=" ">
			</div>
		</div>
		
		<div class="form-group">
			<label for="patronymo" class="col-sm-2 control-label" >Πατρώνυμο</label>
			<div class="col-sm-10">
				<input type="text" name="patronymo" class="form-control" id="patronymo" placeholder="Πατρώνυμο" value=" ">
			</div>
		</div>		

<hr>	
		
		<div class="form-group">
			<label for="adt" class="col-sm-2 control-label" >Α.Δ.Τ.</label>
			<div class="col-sm-10">
				<input type="text" name="adt" class="form-control" id="adt" placeholder="Α.Δ.Τ." value=" ">
			</div>
		</div>	
	
		
		<div class="form-group">
			<label for="afm" class="col-sm-2 control-label" >Α.Φ.Μ.</label>
			<div class="col-sm-10">
				<input type="text" name="afm" class="form-control" id="afm" placeholder="Α.Φ.Μ." value=" ">
			</div>
		</div>
		
	
		<div class="form-group">
			<label for="doy" class="col-sm-2 control-label" >Δ.Ο.Υ.</label>
			<div class="col-sm-10">
				<input type="text" name="doy" class="form-control" id="doy" placeholder="Δ.Ο.Υ." value=" ">
			</div>
		</div>
	
		<div class="form-group">
			<label for="mitroomisthodotoymenoy" class="col-sm-2 control-label" >Μητρώο Μισθοδοτούμενου</label>
			<div class="col-sm-10">
				<input type="text" name="mitroomisthodotoymenoy" class="form-control" id="mitroomisthodotoymenoy" placeholder="Μητρώο Μισθοδοτούμενου" value=" ">
			</div>
		</div>	
<hr>
		<div class="form-group">
			<label for="anathesiergoy" class="col-sm-2 control-label" >Ανάθεση <br> Έργου</label>
				<div class="col-sm-10">
				<select id="anathesiergoy" name="anathesiergoy" Multiple class="form-control">
				<option value=" " selected> </option>
				
				<?php 
				
					$field_anathesiergoy=Field_anathesiergoy::all();
					
					foreach($field_anathesiergoy as $value){
					
						echo"	<option value='".$value->value."' >".$value->value."</option> ";
					}
				?>			
				</select>
			</div>
		</div>		

		<div class="form-group">
			<label for="katastasi" class="col-sm-2 control-label" >Κατάσταση</label>
				<div class="col-sm-10">
				<select id="katastasi" name="katastasi" Multiple class="form-control">
				<option value=" " selected> </option>
				
				<?php 
				
					$field_katastasi=Field_katastasi::all();
					
					foreach($field_katastasi as $value){
					
						echo"	<option value='".$value->value."' >".$value->value."</option> ";
					}
				?>			
				</select>
			</div>
		</div>	
</div>
		
		<!----------	Στοιχεία Προσωπικά ----->
		
	<div id="prosopika" class="tab-pane fade">
	

		<div class="form-group">
		<!--		<label for="name"  >Προσωπικά</label>-->
		</div>
		
		<div class="form-group">
			<label for="fylo" class="col-sm-2 control-label" >Φύλο</label>
			<div class="col-sm-10">
				<select name="fylo" id="fylo" Multiple class="form-control">
					<option value=" " selected> </option>
					<option value="Άνδρας" >Άνδρας</option>
					<option value="Γυναίκα">Γυναίκα</option>
				</select>
			</div>
		</div>	
		
		
		<div class="form-group">
			<label for="oikogeneiakikatastasi" class="col-sm-2 control-label" >Οικογενειακή Κατάσταση</label>
			<div class="col-sm-10">
				<select id="oikogeneiakikatastasi" name="oikogeneiakikatastasi" Multiple class="form-control">
					<option value=" " selected> </option>
					<option value="Άγαμος" >Άγαμος</option>
					<option value="Έγγαμος">Έγγαμος</option>
					<option value="Διαζευμένος">Διαζευμένος</option>
				</select>
			</div>
		</div>	

		<div class="form-group">
			<label for="stratiotikesypoxreoseis" class="col-sm-2 control-label" >Στρατιωτικές Υποχρεώσεις</label>
			<div class="col-sm-10">
				<select name="stratiotikesypoxreoseis" id="stratiotikesypoxreoseis" Multiple class="form-control">
					<option value=" " selected> </option>
					<option value="Εκπληρωμένες" >Εκπληρωμένες</option>
					<option value="Μη εκπληρωμένες">Μη εκπληρωμένες</option>
					<option value="Δεν απαιτείται">Δεν απαιτείται</option>
				</select>
			</div>
		</div>			
<hr>		
		<div class="form-group">
			<label for="imerominiagennisis" class="col-sm-2 control-label" >Ημερομηνία Γέννησης</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="imerominiagennisis" id="imerominiagennisis" placeholder="Ημερομηνία Γέννησης" value=" ">
			</div>
		</div>			

		<div class="form-group">
			<label for="ilikia" class="col-sm-2 control-label" >Ηλικία</label>
			<div class="col-sm-10">
				<input type="text" min="17" max="99" class="form-control" id="ilikia" name="ilikia" placeholder="Ηλικία" value=" ">
			</div>
		</div>	
<hr>
		<div class="form-group">
			<label for="onomastikieorti" class="col-sm-2 control-label" >Ονομαστική<br> Εορτή</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="onomastikieorti" id="onomastikieorti" placeholder="Ονομαστική Εορτή" value=" ">
			</div>
		</div>		
		
		
	</div>
	
	<!----------	Στοιχεία Έδρας-Αλληλογραφίας ----->
	
	<div id="edraallilografia" class="tab-pane fade">
	

		<div class="form-group">
		<!--		<label for="name"  >Έδρα-Αλληλογραφία</label>-->
		</div>
		

		<div class="form-group">
			<label for="odos" class="col-sm-2 control-label" >Οδός</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="odos" id="odos" placeholder="Οδός" value=" ">
			</div>
		</div>			

		<div class="form-group">
			<label for="arithmos" class="col-sm-2 control-label" >Αριθμός</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="arithmos" name="arithmos" placeholder="Αριθμός" value=" ">
			</div>
		</div>	

		<div class="form-group">
			<label for="tk" class="col-sm-2 control-label" >Τ.Κ.</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="tk" id="tk" placeholder="Τ.Κ." value=" ">
			</div>
		</div>		
		
		<div class="form-group">
			<label for="perioxi" class="col-sm-2 control-label" >Περιοχή</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="perioxi" id="perioxi" placeholder="Περιοχή" value=" ">
			</div>
		</div>	
		
		<div class="form-group">
			<label for="katoikos" class="col-sm-2 control-label" >Κάτοικος</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="katoikos" id="katoikos" placeholder="Κάτοικος" value=" ">
			</div>
		</div>				
		
		<div class="form-group">
			<label for="dimos" class="col-sm-2 control-label" >Δήμος</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="dimos" id="dimos" placeholder="Δήμος" value=" ">
			</div>
		</div>			
		
	</div>
	
	
	<!----------	Στοιχεία Κατηγορίας-Ειδικότητας ----->
	<div id="katigoriaeidikotita" class="tab-pane fade">
	

		<div class="form-group">
		<!--		<label for="name"  >Κατηγορίας-Ειδικότητας</label>-->
		</div>
		
		<div class="form-group">
			<label for="thesi" class="col-sm-2 control-label" >Θέση</label>
			<div class="col-sm-10">
				<select id="thesi" name="thesi" Multiple class="form-control">
				<option value=" " selected> </option>
					<option value="1" >1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
					<option value="7">7</option>
					<option value="8">8</option>
					<option value="9">9</option>
					<option value="10">10</option>
					<option value="11">11</option>
					<option value="12">12</option>
					<option value="13">13</option>
					<option value="14">14</option>
					<option value="15">15</option>
					<option value="16">16</option>
					<option value="17">17</option>
					<option value="18">18</option>
					<option value="19">19</option>
					<option value="20">20</option>			
				</select>
			</div>
		</div>	

		<div class="form-group">
			<label for="katigoriaendiaferontos" class="col-sm-2 control-label" >Κατηγορία <br><small>(με βάση την πρόσκληση εκδήλωσης ενδιαφέροντος)</small></label>
				<div class="col-sm-10">
				<select id="katigoriaendiaferontos" name="katigoriaendiaferontos" Multiple class="form-control">
				<option value=" " selected> </option>
				<?php 
				
					$field_katigoria=Field_katigoria::all();
					
					foreach($field_katigoria as $value){
					
						echo"	<option value='".$value->value."'  >".$value->value."</option> ";
					}
				?>			
				</select>
			</div>
		</div>	
		
		
		<div class="form-group">
			<label for="eidikotitaendiaferontos" class="col-sm-2 control-label" >Ειδικότητα <br><small>(με βάση την πρόσκληση εκδήλωσης ενδιαφέροντος)</small></label>
				<div class="col-sm-10">
					<textarea id="eidikotitaendiaferontos" class="form-control" name="eidikotitaendiaferontos" cols="25" rows="5"> </textarea>
			</div>
		</div>	
<hr>
		<div class="form-group">
			<label for="katigoriafakelos" class="col-sm-2 control-label" >Κατηγορία <br><small>(με βάση το φάκελο υποψηφιότητας)</small></label>
				<div class="col-sm-10">
				<select id="katigoriafakelos" name="katigoriafakelos" Multiple class="form-control">
				<option value=" " selected> </option>
				<?php 
				
					$field_katigoria=Field_katigoria::all();
					
					foreach($field_katigoria as $value){
					
						echo"	<option value='".$value->value."'  >".$value->value."</option> ";
					}
				?>			
				</select>
			</div>
		</div>	

		<div class="form-group">
			<label for="eidikotitafakelos" class="col-sm-2 control-label" >Ειδικότητα <br><small>(με βάση το φάκελο υποψηφιότητας)</small></label>
				<div class="col-sm-10">
				
				<textarea id="eidikotitafakelos" class="form-control" name="eidikotitafakelos" cols="25" rows="5">  </textarea>
			</div>
		</div>	
<hr>
		
		<div class="form-group">
			<label for="dimosiosypallilos" class="col-sm-2 control-label" >Δημόσιος <br>Υπάλληλος</label>
			<div class="col-sm-10">
				<select id="dimosiosypallilos" name="dimosiosypallilos" Multiple class="form-control">
				<option value=" " selected> </option>
					<option value="ΝΑΙ" >ΝΑΙ</option>
					<option value="ΟΧΙ">ΟΧΙ</option>
				</select>
			</div>
		</div>				
	</div>

	
<!----------	Στοιχεία Ανάθεσης Έργου ----->
	
	<div id="stoixeiaanathesiergoy" class="tab-pane fade">

		<div class="form-group">
			<!--	<label for="name"  >Ανάθεσης Έργου</label>-->
		</div>

		<div class="form-group">
			<label for="xrisiegkatastaseon" class="col-sm-2 control-label" >Χρήση Εγκαταστάσεων </label>
				<div class="col-sm-10">
				<select id="xrisiegkatastaseon" name="xrisiegkatastaseon" Multiple class="form-control">
				<option value=" " selected> </option>
					<option value="ΝΑΙ" >ΝΑΙ</option>
					<option value="ΟΧΙ" >ΟΧΙ</option>
				</select>
			</div>
		</div>	
		
		
		<div class="form-group">
			<label for="eidosapasxolisis" class="col-sm-2 control-label" >Είδος Ανάθεσης</label>
				<div class="col-sm-10">
				 <select id="eidosapasxolisis" name="eidosapasxolisis" Multiple class="form-control">
				 <option value=" " selected> </option>
					<?php 
				
						$field_eidosapasxolisis=Field_eidosapasxolisis::all();
					
						foreach($field_eidosapasxolisis as $value){
					
							echo"	<option value='".$value->value."'  >".$value->value."</option> ";
						}
					?>	
				</select>	
			</div>
		</div>	

		<div class="form-group">
			<label for="toposapasxolisis" class="col-sm-2 control-label" >Τόπος Ανάθεσης</label>
				<div class="col-sm-10">
				<select id="toposapasxolisis" name="toposapasxolisis" Multiple class="form-control">
				<option value=" " selected> </option>
				<?php 
				
					$field_toposapasxolisis=Field_toposapasxolisis::all();
					
					foreach($field_toposapasxolisis as $value){
					
						echo"	<option value='".$value->value."'  >".$value->value."</option> ";
					}
				?>			
				</select>
			</div>
		</div>
		
		<div class="form-group">
			<label for="xorosapasxolisis" class="col-sm-2 control-label" >Χώρος Ανάθεσης</label>
				<div class="col-sm-10">
				<select id="xorosapasxolisis" name="xorosapasxolisis" Multiple class="form-control">
				<option value=" " selected> </option>
				<?php 
				
					$field_xorosapasxolisis=Field_xorosapasxolisis::all();
					
					foreach($field_xorosapasxolisis as $value){
					
						echo"	<option value='".$value->value."'  >".$value->value."</option> ";
					}
				?>			
				</select>
			</div>
		</div>			

		
		<div class="form-group">
			<label for="dieuthynsiapasxolisis" class="col-sm-2 control-label" >Διεύθυνση Ανάθεσης</label>
			<div class="col-sm-10">
				<select id="dieuthynsiapasxolisis" name="dieuthynsiapasxolisis" Multiple class="form-control">
				<option value=" " selected> </option>
				<?php 
				
					$field_dieuthynsiapasxolisis=Field_dieuthynsiapasxolisis::all();
					
					foreach($field_dieuthynsiapasxolisis as $value){
					
						echo"	<option value='".$value->value."'  >".$value->value."</option> ";
					}
				?>			
				</select>			</div>
		</div>	

<hr>		
		
		<div class="form-group">
			<label for="emailergasias" class="col-sm-2 control-label" >Email Εργασίας</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="emailergasias" id="emailergasias" placeholder="Email" value=" ">
			</div>
		</div>	
		
		<div class="form-group">
			<label for="tilefonoergasias" class="col-sm-2 control-label" >Τηλέφωνο Εργασίας</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="tilefonoergasias" id="tilefonoergasias" placeholder="Τηλέφωνο Εργασίας" value=" ">
			</div>
		</div>		

		
		<div class="form-group">
			<label for="faxergasias" class="col-sm-2 control-label" >Fax Εργασίας</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="faxergasias" id="faxergasias" placeholder="Fax Εργασίας" value=" ">
			</div>
		</div>	

		<div class="form-group">
			<label for="tilefonokinito" class="col-sm-2 control-label" >Τηλέφωνο Κινητό</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="tilefonokinito" id="tilefonokinito" placeholder="Τηλέφωνο Κινητό" value=" ">
			</div>
		</div>	

<hr>

		<div class="form-group">
			<label for="enarksianathesisergoyeap" class="col-sm-2 control-label" >Έναρξη Ανάθεσης Έργου στο Ε.Α.Π.</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="enarksianathesisergoyeap" id="enarksianathesisergoyeap" placeholder="Έναρξη Ανάθεσης Έργου στο Ε.Α.Π." value=" ">
			</div>
		</div>	
		
	
<hr>
		<div class="form-group">
			<label for="diadikasiaanathesisergoy" class="col-sm-2 control-label" >Διαδικασία Ανάθεσης Έργου στο ΕΣΠΑ <br><small>(βάσει οποίας επελέγει)</small></label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="diadikasiaanathesisergoy" id="diadikasiaanathesisergoy" placeholder="Διαδικασία Ανάθεσης Έργου στο ΕΣΠΑ" value=" ">
			</div>
		</div>	
<hr>		
		
		<div class="form-group">
			<label for="kormosespa" class="col-sm-2 control-label" >ΚΟΡΜΟΣ ΕΣΠΑ <br><small>(άτομα που <br>είχαν σύμβαση με το ΕΑΠ <br>πριν από ΕΣΠΑ)</small></label>
			<div class="col-sm-10">
				<select id="kormosespa" name="kormosespa" Multiple class="form-control">
				<option value=" " selected> </option>
					<option value="ΝΑΙ" >ΝΑΙ</option>
					<option value="ΟΧΙ" >ΟΧΙ</option>
				</select>
			</div>
		</div>					
	</div>	
		
<!----------	Στοιχεία Τρέχουσας Σύμβασης ----->
	
	<div id="trexoysasymvasi" class="tab-pane fade">

		<div class="form-group">
	
		</div>

	
		
		<div class="form-group">
			<label for="arithmostrexousassymvasis" class="col-sm-2 control-label" >Αριθμός Τρέχουσας Σύμβασης <br><small> (δεν περιλαμβάνονται χωριστά <br>οι τροποποιητικές)</small></label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="arithmostrexousassymvasis" id="arithmostrexousassymvasis" placeholder="Αριθμός Τρέχουσας Σύμβασης" value=" ">		
				</div>
		</div>	
<hr>
		
		<div class="form-group">
			<label for="imerominiaypografistrexoysassymvasis" class="col-sm-2 control-label" >Ημερομηνία Υπογραφής Τρέχουσας Σύμβασης</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="imerominiaypografistrexoysassymvasis" id="imerominiaypografistrexoysassymvasis" placeholder="Ημερομηνία Υπογραφής Τρέχουσας Σύμβασης" value=" ">		
				</div>
		</div>
<hr>

		
		<div class="form-group">
			<label for="aksonasproteraiotitas" class="col-sm-2 control-label" >Άξονας Προτεραιότητας</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="aksonasproteraiotitas" id="aksonasproteraiotitas" placeholder="Άξονας Προτεραιότητας" value=" ">	
			</div>
		</div>			

		
		<div class="form-group">
			<label for="titlosaksonaproteraiotitas" class="col-sm-2 control-label" >Τίτλος Άξονα προτεραιότητας</label>
			<div class="col-sm-10">
				<textarea id="titlosaksonaproteraiotitas" class="form-control" name="titlosaksonaproteraiotitas" >  </textarea>
			</div>
		</div>	
<hr>
		<div class="form-group">
			<label for="ergopraksi" class="col-sm-2 control-label" >Έργο-Πράξη</label>
			<div class="col-sm-10">
				<select id="ergopraksi" name="ergopraksi" Multiple class="form-control">
				<option value=" " selected> </option>
					<option value="1"  >ΕΛΛΗΝΙΚΟ ΑΝΟΙΚΤΟ ΠΑΝΕΠΙΣΤΗΜΙΟ</option>
					<option value="2" >ΓΡΑΦΕΙΟ ΔΙΑΣΥΝΔΕΣΗΣ ΕΛΛΗΝΙΚΟΥ ΑΝΟΙΚΤΟΥ ΠΑΝΕΠΙΣΤΗΜΙΟΥ</option>
					<option value="3" >ΔΟΜΗ ΑΠΑΣΧΟΛΗΣΗΣ ΚΑΙ ΣΤΑΔΙΟΔΡΟΜΙΑΣ (ΔΑΣΤΑ) ΕΑΠ</option>					
					<option value="4" >ΜΟΝΑΔΑ ΚΑΙΝΟΤΟΜΙΑΣ ΚΑΙ ΕΠΙΧΕΙΡΗΜΑΤΙΚΟΤΗΤΑΣ (ΜΚΕ) ΤΟΥ ΕΛΛΗΝΙΚΟΥ ΑΝΟΙΚΤΟΥ ΠΑΝΕΠΙΣΤΗΜΙΟΥ </option>					
					<option value="5" >ΜΟΔΙΠ ΤΟΥ ΕΑΠ</option>					
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
				<input type="text" class="form-control" name="arithmosypoergoy" id="arithmosypoergoy" placeholder="" value=" ">
			</div>
		</div>	

		<div class="form-group">
			<label for="titlosypoergoy" class="col-sm-2 control-label" >Τίτλος Υποέργου </label>
			<div class="col-sm-10">
				<textarea class="form-control" name="titlosypoergoy" id="titlosypoergoy" ></textarea>
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
				<textarea class="form-control" name="titlospaketoyergasias" id="titlospaketoyergasias" ></textarea>
			</div>
		</div>	
<hr>		
		<div class="form-group">
			<label for="apofasientaksisergoypraksis" class="col-sm-2 control-label" >Απόφαση Ένταξης Έργου-Πράξης</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="apofasientaksisergoypraksis" id="apofasientaksisergoypraksis"  placeholder="" value=" ">
			</div>
		</div>			
		
		
		<div class="form-group">
			<label for="apofasiylopoiisisypoergoymetaidiamesa" class="col-sm-2 control-label" >Απόφαση Υλοποίησης Υποέργου <br>Με Τα Ίδια Μέσα</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="apofasiylopoiisisypoergoymetaidiamesa" id="apofasiylopoiisisypoergoymetaidiamesa"  placeholder="" value=" ">
			</div>
		</div>	

		<div class="form-group">
			<label for="apofaside" class="col-sm-2 control-label" >Απόφαση ΔΕ</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="apofaside" id="apofaside"  placeholder="Απόφαση ΔΕ " value=" ">
			</div>
		</div>	
		
		<div class="form-group">
			<label for="apofasiedel" class="col-sm-2 control-label" >Απόφαση ΕΔΕΛ</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="apofasiedel" id="apofasiedel"  placeholder="Απόφαση ΕΔΕΛ" value=" ">
			</div>
		</div>	
<hr>	
		<div class="form-group">
			<label for="posotrexoysassymvasisolografos" class="col-sm-2 control-label" >Ποσό Τρέχουσας Σύμβασης Ολογράφως </label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="posotrexoysassymvasisolografos" id="posotrexoysassymvasisolografos"  placeholder="Ποσό Τρέχουσας Σύμβασης Ολογράφως" value=" ">
			</div>
		</div>			
		
		<div class="form-group">
			<label for="posotrexoysassymvasis" class="col-sm-2 control-label" >Ποσό Τρέχουσας Σύμβασης</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="posotrexoysassymvasis" id="posotrexoysassymvasis"  placeholder="Ποσό Τρέχουσας Σύμβασης" value=" ">
			</div>
		</div>	
<hr>
		<div class="form-group">
			<label for="diarkeiatrexoysassymvasis" class="col-sm-2 control-label" >Διάρκεια Τρέχουσας Σύμβασης Σε Μήνες</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="diarkeiatrexoysassymvasis" id="diarkeiatrexoysassymvasis"  placeholder="Διάρκεια Τρέχουσας Σύμβασης Σε Μήνες" value=" ">
			</div>
		</div>	

		<div class="form-group">
			<label for="enarksitrexoysassymvasis" class="col-sm-2 control-label" >Έναρξη Τρέχουσας Σύμβασης </label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="enarksitrexoysassymvasis" id="enarksitrexoysassymvasis"  placeholder="Έναρξη Τρέχουσας Σύμβασης" value=" ">
			</div>
		</div>	

		<div class="form-group">
			<label for="liksitrexoysassymvasis" class="col-sm-2 control-label" >Λήξη Τρέχουσας Σύμβασης </label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="liksitrexoysassymvasis" id="liksitrexoysassymvasis"  placeholder="Λήξη Τρέχουσας Σύμβασης" value=" ">
			</div>
		</div>	
<hr>		
		<div class="form-group">
			<label for="epistimonikosypeythinosergoypraksis" class="col-sm-2 control-label" >Επιστημονικός Υπεύθυνος Έργου-Πράξης</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="epistimonikosypeythinosergoypraksis" id="epistimonikosypeythinosergoypraksis"  placeholder="" value=" ">
			</div>
		</div>
		
		<div class="form-group">
			<label for="epistimonikosypeythinosypoergoy" class="col-sm-2 control-label" >Επιστημονικός Υπεύθυνος Υποέργου</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="epistimonikosypeythinosypoergoy" id="epistimonikosypeythinosypoergoy"  placeholder="" value=" ">
			</div>
		</div>	
	
		
		
	 </div>	
	 
		<button type="submit" class="btn btn-lg btn-primary btn-block">Καταχώρηση</button>
	</div>	

	</div>
</form>
</div>