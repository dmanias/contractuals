$( document ).ready(

function ergo() {

	var ergoValue = $( "#ergopraksi").val();	

	$( "#ergopraksi" ).change( ergo ); 
	
//////////////////////ERGO EAP/////////////////////
	if (ergoValue=='1'){
		
		var html='<option value="ένα" >ένα</option><option value="δύο">δύο</option><option value="τρία">τρία</option><option value="τέσσερα">τέσσερα</option><option value="πέντε">πέντε</option>';	
		$("#arithmosypoergoyolografos").empty();
		$("#arithmosypoergoyolografos").append(html);
		
		var html='<option value="ΠΕ 1" >ΠΕ 1</option><option value="ΠΕ 1.1">ΠΕ 1.1</option><option value="ΠΕ 1.2">ΠΕ 1.2</option><option value="ΠΕ 1.3">ΠΕ 1.3</option><option value="ΠΕ 1.4">ΠΕ 1.4</option><option value="ΠΕ 1.5">ΠΕ 1.5</option><option value="ΠΕ 2">ΠΕ 2</option><option value="ΠΕ 3">ΠΕ 3</option><option value="ΠΕ 4">ΠΕ 4</option><option value="ΠΕ 5">ΠΕ 5</option><option value="ΠΕ 6">ΠΕ 6</option><option value="ΠΕ 7">ΠΕ 7</option><option value="ΠΕ 8">ΠΕ 8</option><option value="ΠΕ 9">ΠΕ 9</option><option value="ΠΕ 10">ΠΕ 10</option><option value="ΠΕ 11">ΠΕ 11</option>';
		$("#arithmospaketoyergasias").empty();
		$("#arithmospaketoyergasias").append(html);	
	}		
	
//////////////ERGO GD//////////////	
	if (ergoValue=='2'){
		
		var html='<option value="ένα" >ένα</option>';	
		$("#arithmosypoergoyolografos").empty();
		$("#arithmosypoergoyolografos").append(html);
		
		var html='<option value="ΠΕ1" >ΠΕ1</option><option value="ΠΕ2">ΠΕ2</option><option value="ΠΕ3">ΠΕ3</option><option value="ΠΕ4">ΠΕ4</option><option value="ΠΕ5">ΠΕ5</option><option value="ΠΕ6">ΠΕ6</option><option value="ΠΕ7">ΠΕ7</option><option value="ΠΕ8">ΠΕ8</option><option value="ΠΕ9">ΠΕ9</option>';
		$("#arithmospaketoyergasias").empty();
		$("#arithmospaketoyergasias").append(html);	
			
		$("#titlospaketoyergasias").val("Ένταξη του ΓΔ στο ΔΑΣΤΑ-Πληροφοριακό Σύστημα και Δικτυακός Τόπος ΓΔ");

	}	
//////////////ERGO DASTA//////////////		
	if (ergoValue=='3'){

		
		var html='<option value="ένα" >ένα</option>';	
		$("#arithmosypoergoyolografos").empty();
		$("#arithmosypoergoyolografos").append(html);
		
		var html='<option value="ΠΕ1" >ΠΕ1</option><option value="ΠΕ2">ΠΕ2</option><option value="ΠΕ3">ΠΕ3</option><option value="ΠΕ4">ΠΕ4</option><option value="ΠΕ5">ΠΕ5</option><option value="ΠΕ6">ΠΕ6</option><option value="ΠΕ7">ΠΕ7</option><option value="ΠΕ8">ΠΕ8</option><option value="ΠΕ9">ΠΕ9</option><option value="ΠΕ10" >ΠΕ10</option><option value="ΠΕ11">ΠΕ11</option><option value="ΠΕ12">ΠΕ12</option><option value="ΠΕ13">ΠΕ13</option><option value="ΠΕ14">ΠΕ14</option><option value="ΠΕ15">ΠΕ15</option><option value="ΠΕ16">ΠΕ16</option><option value="ΠΕ17">ΠΕ17</option><option value="ΠΕ18">ΠΕ18</option><option value="ΠΕ19">ΠΕ19</option><option value="ΠΕ20">ΠΕ20</option>';
		$("#arithmospaketoyergasias").empty();
		$("#arithmospaketoyergasias").append(html);	
			

	}	
//////////////ERGO MKE//////////////	
	if (ergoValue=='4'){

		var html='<option value="ένα" >ένα</option>';	
		$("#arithmosypoergoyolografos").empty();
		$("#arithmosypoergoyolografos").append(html);

		var html='<option value="ΠΕ1" >ΠΕ1</option><option value="ΠΕ2">ΠΕ2</option><option value="ΠΕ3">ΠΕ3</option><option value="ΠΕ4">ΠΕ4</option><option value="ΠΕ5">ΠΕ5</option><option value="ΠΕ6">ΠΕ6</option><option value="ΠΕ7">ΠΕ7</option><option value="ΠΕ8">ΠΕ8</option><option value="ΠΕ9">ΠΕ9</option>';
		$("#arithmospaketoyergasias").empty();
		$("#arithmospaketoyergasias").append(html);	
			
	}	
//////////////ERGO MODIP//////////////	
	if (ergoValue=='5'){

		
		var html='<option value="ένα" >ένα</option>';	
		$("#arithmosypoergoyolografos").empty();
		$("#arithmosypoergoyolografos").append(html);
		
		$("#titlosypoergoy").val("ΜΟΔΙΠ του ΕΑΠ");
		
		var html='<option value="ΠΕ1.1" >ΠΕ1.1</option><option value="ΠΕ1.2">ΠΕ1.2</option><option value="ΠΕ1.3">ΠΕ1.3</option><option value="ΠΕ1.4">ΠΕ1.4</option><option value="ΠΕ1.5">ΠΕ1.5</option><option value="ΠΕ1.6">ΠΕ1.6</option><option value="ΠΕ1.7">ΠΕ1.7</option>';
		$("#arithmospaketoyergasias").empty();
		$("#arithmospaketoyergasias").append(html);	

	}
}
);

$( document ).ready(

function ypoErgo() {

	var ypoErgoValue = $( "#arithmosypoergoyolografos").val();	

	$( "#arithmosypoergoyolografos" ).change( ypoErgo ); 

//////////////////////ERGO EAP/////////////////////	
	
	if (ypoErgoValue=='ένα'){

		
		var html='<option value="ΠΕ 1" >ΠΕ 1</option><option value="ΠΕ 1.1">ΠΕ 1.1</option><option value="ΠΕ 1.2">ΠΕ 1.2</option><option value="ΠΕ 1.3">ΠΕ 1.3</option><option value="ΠΕ 1.4">ΠΕ 1.4</option><option value="ΠΕ 1.5">ΠΕ 1.5</option><option value="ΠΕ 2">ΠΕ 2</option><option value="ΠΕ 3">ΠΕ 3</option><option value="ΠΕ 4">ΠΕ 4</option><option value="ΠΕ 5">ΠΕ 5</option><option value="ΠΕ 6">ΠΕ 6</option>';
		$("#arithmospaketoyergasias").empty();
		$("#arithmospaketoyergasias").append(html);	
			
	}	
	
	if (ypoErgoValue=='δύο'){
	
		var html='<option value="ΠΕ 2.1" >ΠΕ 2.1</option><option value="ΠΕ 2.2">ΠΕ 2.2</option><option value="ΠΕ 2.3">ΠΕ 2.3</option>';
		$("#arithmospaketoyergasias").empty();
		$("#arithmospaketoyergasias").append(html);	
	}	
	
	if (ypoErgoValue=='τρία'){
		
		$("#titlosypoergoy").val("Ανάπτυξη διδακτικού υλικού βασισμένο στις νέες τεχνολογίες");
		
		var html='<option value="ΠΕ 3.1" >ΠΕ 3.1</option><option value="ΠΕ 3.2">ΠΕ 3.2</option>';
		$("#arithmospaketoyergasias").empty();
		$("#arithmospaketoyergasias").append(html);	

	}	

	if (ypoErgoValue=='τέσσερα'){
		
		$("#titlosypoergoy").val("Μονάδα Εσωτερικής Αξιολόγησης και Επιμόρφωσης");
		
		var html='<option value="ΠΕ 4.1" >ΠΕ 4.1</option><option value="ΠΕ 4.4">ΠΕ 4.2</option><option value="ΠΕ 4.3">ΠΕ 4.3</option><option value="ΠΕ 4.4">ΠΕ 4.4</option><option value="ΠΕ 4.5">ΠΕ 4.5</option><option value="ΠΕ 4.6">ΠΕ 4.6</option>';
		$("#arithmospaketoyergasias").empty();
		$("#arithmospaketoyergasias").append(html);	
			
	}	

	if (ypoErgoValue=='πέντε'){
		
		var html='<option value="ΠΕ 5.1" >ΠΕ 5.1</option><option value="ΠΕ 5.2">ΠΕ 5.2</option><option value="ΠΕ 5.3">ΠΕ 5.3</option>';
		$("#arithmospaketoyergasias").empty();
		$("#arithmospaketoyergasias").append(html);	
			
	}		
}
);
