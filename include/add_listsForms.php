<script>
$('.epikairopoiisikartelon').css('background-color', '#428bca');
$('.epikairopoiisikartelon a').css('color', 'white');
</script> 

<div class="container">
	<p><small>1. Προσθέστε ένα πεδίο στη περιοχή "Προσθέστε πεδίο". <br>
	2. Πατήστε '+' για να προσθέσετε ένα επιπλέον πεδίο. <br>
	3. Πατήστε 'Προσθήκη' για να καταχωρηθούν εξ αρχής όλα τα πεδία στη λίστα του αντίστοιχου πεδίου της καρτέλας Εισαγωγής Στοιχείων.</small></p>
	
	<div class="row">

	<!------ANATHESI ERGOY--->
		<div class="col-xs-4 col-md-4">
		<h4> <u>Στοιχεία Γενικά </u></h4>
		<input type="hidden" name="count" value="1" /> 
        <div class="control-group" id="fields">
            <label class="control-label" for="field1">Ανάθεση Έργου</label>
            <div class="controls" id="profs"> 
                <form class="input-append form-inline" method="post" action="">
                    <div id="field-anathesiergoy"><input autocomplete="off" class="input form-control" id="field-anathesiergoy1" name="field_anathesiergoy[]" type="text" placeholder="Προσθέστε πεδίο" data-items="8"/><button id="b1" class="btn add-anathesiergoy" type="button">+</button></div>               
					<input type="submit" class="btn btn-primary" value="Προσθήκη"/>
				</form>        
            </div>
        </div>
		
		</div> 


		<div class="col-xs-4 col-md-4">
		<h4><u> Στοιχεία Κατηγορίας - Ειδικότητας </u></h4>
	<!------KATHGORIA--->
	
		<input type="hidden" name="count" value="1" /> 
        <div class="control-group" id="fields">
            <label class="control-label" for="field1">Κατηγορία</label>
            <div class="controls" id="profs"> 
                <form class="input-append form-inline" method="post" action="">
                    <div id="field-katigoria"><input autocomplete="off" class="input form-control" id="field-katigoria1" name="field_katigoria[]" type="text" placeholder="Προσθέστε πεδίο" data-items="8"/><button id="b1" class="btn add-katigoria" type="button">+</button></div>               
					<input type="submit" class="btn btn-primary" value="Προσθήκη"/>
				</form>        
            </div>
			
        </div>
		</div> 			
		
<!------EIDOS APASXOLISIS--->
		<div class="col-xs-4 col-md-4">
		<h4><u> Στοιχεία Ανάθεσης Έργου</u></h4>
				
		<input type="hidden" name="count" value="1" />
        <div class="control-group" id="fields">
            <label class="control-label" for="field-eidosapasxolisis1">Είδος Ανάθεσης</label>
            <div class="controls" id="profs"> 
                <form class="input-append form-inline" method="post" action="">
                    <div id="field-eidosapasxolisis"><input autocomplete="off" class="input form-control" id="field-eidosapasxolisis1" name="field_eidosapasxolisis[]" type="text" placeholder="Προσθέστε πεδίο" data-items="8"/><button id="b1" class="btn add-eidosapasxolisis" type="button">+</button></div>               
					<input type="submit" class="btn btn-primary" value="Προσθήκη"/>
				</form>        
            </div>			
        </div>
		
		</div>	


	</div>
</div>

<div class="container">
	<div class="row">
	
<!------KATASTASH--->
		<div class="col-xs-4 col-md-4">
	
		<input type="hidden" name="count" value="1" />
        <div class="control-group" id="fields">
            <label class="control-label" for="field1">Κατάσταση</label>
            <div class="controls" id="profs"> 
                <form class="input-append form-inline" method="post" action="">
                    <div id="field-katastasi"><input autocomplete="off" class="input form-control" id="field-katastasi1" name="field_katastasi[]" type="text" placeholder="Προσθέστε πεδίο" data-items="8"/><button id="b1" class="btn add-katastasi" type="button">+</button></div>               
					<input type="submit" class="btn btn-primary" value="Προσθήκη"/>
				</form>        
            </div>
			
        </div>
		</div>	
		
		<!------DUMMY--->
		
		<div class="col-xs-4 col-md-4">
		</div>
		
	<!------TOPOS APASXOLISIS--->
		<div class="col-xs-4 col-md-4">
	
		<input type="hidden" name="count" value="1" /> 
        <div class="control-group" id="fields">
            <label class="control-label" for="field1">Τόπος Ανάθεσης</label>
            <div class="controls" id="profs"> 
                <form class="input-append form-inline" method="post" action="">
                    <div id="field-toposapasxolisis"><input autocomplete="off" class="input form-control" id="field-toposapasxolisis1" name="field_toposapasxolisis[]" type="text" placeholder="Προσθέστε πεδίο" data-items="8"/><button id="b1" class="btn add-toposapasxolisis" type="button">+</button></div>               
					<input type="submit" class="btn btn-primary" value="Προσθήκη"/>
				</form>        
            </div>
			
        </div>
		</div> 	

	
	</div>
</div>	

<div class="container">
	<div class="row">

					<!------DUMMY--->
		
		<div class="col-xs-4 col-md-4">
		</div>
				<!------DUMMY--->
		
		<div class="col-xs-4 col-md-4">
		</div>
		
<!------XOROS ANATHESIS--->
		<div class="col-xs-4 col-md-4" ">
			
		<input type="hidden" name="count" value="1" />
        <div class="control-group" id="fields">
            <label class="control-label" for="field1">Χώρος Ανάθεσης</label>
            <div class="controls" id="profs"> 
                <form class="input-append form-inline" method="post" action="">
                    <div id="field-xorosapasxolisis"><input autocomplete="off" class="input form-control" id="field-xorosapasxolisis1" name="field_xorosapasxolisis[]" type="text" placeholder="Προσθέστε πεδίο" data-items="8"/><button id="b1" class="btn add-xorosapasxolisis" type="button">+</button></div>               
					<input type="submit" class="btn btn-primary" value="Προσθήκη"/>
				</form>        
            </div>
			
        </div>
		</div>	
	</div>
</div>

<div class="container">
	<div class="row">

<!------EIDIKOTHTA--->	
		<div class="col-xs-4 col-md-4">

	<!--	<input type="hidden" name="count" value="1" />
        <div class="control-group" id="fields">
            <label class="control-label" for="field-eidikotita1">Ειδικότητα</label>
            <div class="controls" id="profs"> 
                <form class="input-append form-inline" method="post" action="">
                    <div id="field-eidikotita"><input autocomplete="off" class="input form-control" id="field-eidikotita1" name="field_eidikotita[]" type="text" placeholder="Προσθέστε πεδίο" data-items="8"/><button id="b1" class="btn add-eidikotita" type="button">+</button></div>               
					<input type="submit" class="btn btn-primary" value="Προσθήκη"/>
				</form>        
            </div>
			
        </div>-->
		</div> 	
				
<!------DUMMY--->
		
		<div class="col-xs-4 col-md-4">
		</div>
<!------DIEYTHINSI ANATHESIS--->
		<div class="col-xs-4 col-md-4">
			
		<input type="hidden" name="count" value="1" />
        <div class="control-group" id="fields">
            <label class="control-label" for="field1">Διεύθυνση Ανάθεσης</label>
            <div class="controls" id="profs"> 
                <form class="input-append form-inline" method="post" action="">
                    <div id="field-dieuthynsiapasxolisis"><input autocomplete="off" class="input form-control" id="field-dieuthynsiapasxolisis1" name="field_dieuthynsiapasxolisis[]" type="text" placeholder="Προσθέστε πεδίο" data-items="8"/><button id="b1" class="btn add-dieuthynsiapasxolisis" type="button">+</button></div>               
					<input type="submit" class="btn btn-primary" value="Προσθήκη"/>
				</form>        
            </div>
			
        </div>
		</div>	
		
		
	</div>
</div>




