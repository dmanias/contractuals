
$( document ).ready(

function ergo() {

var ergopraksi = $( "#ergopraksi").val();
var arithmosypoergou = $( "#arithmosypoergoy").val();
var arithmospaketou = $( "#arithmospaketou").val();	

console.log(arithmospaketou);

	$( "#ergopraksi" ).change( ergo ); 
	
//////////////////////ERGO EAP/////////////////////

	if (ergopraksi==' '){
		$("#misops").val(" ");
		
		$("#arithmosypoergoyolografos").empty();
		$("#arithmosypoergoyolografos").append("<option value=' ' selected></option>");

		
		$("#arithmosypoergoy").val(" ");
		
		$("#titlosypoergoy").val(" ");
		
		$("#arithmospaketoyergasias").empty();
		$("#arithmospaketoyergasias").append("<option value=' ' selected> </option>");

			
		$("#titlospaketoyergasias").val(" ");
	
		$("#apofasientaksisergoypraksis").val(" ");
		
		$("#apofasiylopoiisisypoergoymetaidiamesa").val(" ");
		
		$("#epistimonikosypeythinosergoypraksis").val(" ");
		
		$("#epistimonikosypeythinosypoergoy").val(" ");
	}



	if (ergopraksi=='1'){
		$("#misops").val("296121");
		
		if (arithmosypoergou=='1'){
		var html='<option value="ένα" selected>ένα</option><option value="δύο">δύο</option><option value="τρία">τρία</option><option value="τέσσερα">τέσσερα</option><option value="πέντε">πέντε</option>';
		}else if(arithmosypoergou=='2'){
		var html='<option value="ένα" >ένα</option><option value="δύο"selected>δύο</option><option value="τρία">τρία</option><option value="τέσσερα">τέσσερα</option><option value="πέντε">πέντε</option>';	
		}else if(arithmosypoergou=='3'){
		var html='<option value="ένα" >ένα</option><option value="δύο">δύο</option><option value="τρία"selected>τρία</option><option value="τέσσερα">τέσσερα</option><option value="πέντε">πέντε</option>';	
		}else if(arithmosypoergou=='4'){
		var html='<option value="ένα" >ένα</option><option value="δύο">δύο</option><option value="τρία">τρία</option><option value="τέσσερα"selected>τέσσερα</option><option value="πέντε">πέντε</option>';	
		}else if(arithmosypoergou=='5'){
		var html='<option value="ένα" >ένα</option><option value="δύο">δύο</option><option value="τρία">τρία</option><option value="τέσσερα">τέσσερα</option><option value="πέντε"selected>πέντε</option>';	
		}else{
		var html='<option value="ένα" selected>ένα</option><option value="δύο">δύο</option><option value="τρία">τρία</option><option value="τέσσερα">τέσσερα</option><option value="πέντε">πέντε</option>';
		}
		

		$("#arithmosypoergoyolografos").empty();
		$("#arithmosypoergoyolografos").append(html);
		
		$("#arithmosypoergoy").val("1");
		
		$("#titlosypoergoy").val("Συνέχιση της παροχής υπηρεσιών εξ αποστάσεως εκπαίδευσης με καινοτόμες δράσεις στο ΕΑΠ");
		
				
		
		
		
		$("#arithmospaketoyergasias").empty();
		$("#arithmospaketoyergasias").append(html);	
			
		$("#titlospaketoyergasias").val("Συνέχιση της παροχής υπηρεσιών εξ αποστάσεως εκπαίδευσης με καινοτόμες δράσεις στο ΕΑΠ");
	
		$("#apofasientaksisergoypraksis").val("10367/06-07-2010");
		
		$("#apofasiylopoiisisypoergoymetaidiamesa").val("203η/17-09-2010");
		
		$("#epistimonikosypeythinosergoypraksis").val("κ. ΚΟΚΚΩΣΗΣ ΧΑΡΑΛΑΜΠΟΣ");
		
		$("#epistimonikosypeythinosypoergoy").val("κ. ΚΟΚΚΩΣΗΣ ΧΑΡΑΛΑΜΠΟΣ");
	}
	
//////////////ERGO GD//////////////	
	if (ergopraksi=='2'){
		$("#misops").val("299922");
		
	
		var html='<option value="ένα" selected>ένα</option>';	
		$("#arithmosypoergoyolografos").empty();
		$("#arithmosypoergoyolografos").append(html);
		
		$("#arithmosypoergoy").val("1");
		
		$("#titlosypoergoy").val("Δικτύωση και Αναβάθμιση του υφιστάμενου Γραφείου Διασύνδεσης του ΕΑΠ");
		
		var html='<option value="ΠΕ1" selected>ΠΕ1</option><option value="ΠΕ2">ΠΕ2</option><option value="ΠΕ3">ΠΕ3</option><option value="ΠΕ4">ΠΕ4</option><option value="ΠΕ5">ΠΕ5</option><option value="ΠΕ6">ΠΕ6</option><option value="ΠΕ7">ΠΕ7</option><option value="ΠΕ8">ΠΕ8</option><option value="ΠΕ9">ΠΕ9</option>';
		$("#arithmospaketoyergasias").empty();
		$("#arithmospaketoyergasias").append(html);	
			
		$("#titlospaketoyergasias").val("Ένταξη του ΓΔ στο ΔΑΣΤΑ-Πληροφοριακό Σύστημα και Δικτυακός Τόπος ΓΔ");
	
		$("#apofasientaksisergoypraksis").val("1714/07-02-2011");
		
		$("#apofasiylopoiisisypoergoymetaidiamesa").val("212/22-06-2011");
		
		$("#epistimonikosypeythinosergoypraksis").val("κ. ΜΙΧΙΩΤΗΣ ΑΘΑΝΑΣΙΟΣ");
		
		$("#epistimonikosypeythinosypoergoy").val("κ. ΜΙΧΙΩΤΗΣ ΑΘΑΝΑΣΙΟΣ");
	}	
//////////////ERGO DASTA//////////////		
	if (ergopraksi=='3'){
		$("#misops").val("328450");
		
		var html='<option value="ένα" selected>ένα</option>';	
		$("#arithmosypoergoyolografos").empty();
		$("#arithmosypoergoyolografos").append(html);
		
		$("#arithmosypoergoy").val("1");
		
		$("#titlosypoergoy").val("Δομική και Λειτουργική Οργάνωση και Λειτουργία ΔΑΣΤΑ ΕΑΠ");
		
		var html='<option value="ΠΕ1" selected>ΠΕ1</option><option value="ΠΕ2">ΠΕ2</option><option value="ΠΕ3">ΠΕ3</option><option value="ΠΕ4">ΠΕ4</option><option value="ΠΕ5">ΠΕ5</option><option value="ΠΕ6">ΠΕ6</option><option value="ΠΕ7">ΠΕ7</option><option value="ΠΕ8">ΠΕ8</option><option value="ΠΕ9">ΠΕ9</option><option value="ΠΕ10" selected>ΠΕ10</option><option value="ΠΕ11">ΠΕ11</option><option value="ΠΕ12">ΠΕ12</option><option value="ΠΕ13">ΠΕ13</option><option value="ΠΕ14">ΠΕ14</option><option value="ΠΕ15">ΠΕ15</option><option value="ΠΕ16">ΠΕ16</option><option value="ΠΕ17">ΠΕ17</option><option value="ΠΕ18">ΠΕ18</option><option value="ΠΕ19">ΠΕ19</option><option value="ΠΕ20">ΠΕ20</option>';
		$("#arithmospaketoyergasias").empty();
		$("#arithmospaketoyergasias").append(html);	
			
		$("#titlospaketoyergasias").val("Οργάνωση και Στελέχωση ΔΑΣΤΑ");
	
		$("#apofasientaksisergoypraksis").val("1713/07-02-2011");
		
		$("#apofasiylopoiisisypoergoymetaidiamesa").val("212/22-6-2011");
		
		$("#epistimonikosypeythinosergoypraksis").val("κ. ΚΑΜΕΑΣ ΑΧΙΛΛΕΑΣ");
		
		$("#epistimonikosypeythinosypoergoy").val("κ. ΚΑΜΕΑΣ ΑΧΙΛΛΕΑΣ");
	}	
//////////////ERGO MKE//////////////	
	if (ergopraksi=='4'){
		$("#misops").val("304311");
		
		var html='<option value="ένα" selected>ένα</option>';	
		$("#arithmosypoergoyolografos").empty();
		$("#arithmosypoergoyolografos").append(html);
		
		$("#arithmosypoergoy").val("1");
		
		$("#titlosypoergoy").val("Δημιουργία και Λειτουργία της Μονάδας Καινοτομίας και Επιχειρηματικότητας του ΕΑΠ");
		
		var html='<option value="ΠΕ1" selected>ΠΕ1</option><option value="ΠΕ2">ΠΕ2</option><option value="ΠΕ3">ΠΕ3</option><option value="ΠΕ4">ΠΕ4</option><option value="ΠΕ5">ΠΕ5</option><option value="ΠΕ6">ΠΕ6</option><option value="ΠΕ7">ΠΕ7</option><option value="ΠΕ8">ΠΕ8</option><option value="ΠΕ9">ΠΕ9</option>';
		$("#arithmospaketoyergasias").empty();
		$("#arithmospaketoyergasias").append(html);	
			
		$("#titlospaketoyergasias").val("Δημιουργία και Λειτουργία της Μονάδας Καινοτομίας και Επιχειρηματικότητας του ΕΑΠ");
	
		$("#apofasientaksisergoypraksis").val("1818/09-02-2011");
		
		$("#apofasiylopoiisisypoergoymetaidiamesa").val("212/22-06-2011");
		
		$("#epistimonikosypeythinosergoypraksis").val("κ. ΞΕΝΟΣ ΜΙΧΑΗΛ");
		
		$("#epistimonikosypeythinosypoergoy").val("κ. ΞΕΝΟΣ ΜΙΧΑΗΛ");
	}	
//////////////ERGO MODIP//////////////	
	if (ergopraksi=='5'){
		$("#misops").val("303860");
		
		var html='<option value="ένα" selected>ένα</option>';	
		$("#arithmosypoergoyolografos").empty();
		$("#arithmosypoergoyolografos").append(html);
		
		$("#arithmosypoergoy").val("1");
		
		$("#titlosypoergoy").val("ΜΟΔΙΠ του ΕΑΠ");
		
		var html='<option value="ΠΕ1.1" selected>ΠΕ1.1</option><option value="ΠΕ1.2">ΠΕ1.2</option><option value="ΠΕ1.3">ΠΕ1.3</option><option value="ΠΕ1.4">ΠΕ1.4</option><option value="ΠΕ1.5">ΠΕ1.5</option><option value="ΠΕ1.6">ΠΕ1.6</option><option value="ΠΕ1.7">ΠΕ1.7</option>';
		$("#arithmospaketoyergasias").empty();
		$("#arithmospaketoyergasias").append(html);	
			
		$("#titlospaketoyergasias").val("Οργάνωση και Στελέχωση ΜΟΔΙΠ ΕΑΠ");
	
		$("#apofasientaksisergoypraksis").val("964/18-01-2011");
		
		$("#apofasiylopoiisisypoergoymetaidiamesa").val("212/22-06-2011");
		
		$("#epistimonikosypeythinosergoypraksis").val("κ. ΞΕΝΟΣ ΜΙΧΑΗΛ");
		
		$("#epistimonikosypeythinosypoergoy").val("κ. ΞΕΝΟΣ ΜΙΧΑΗΛ");
	}
}
);

$( document ).ready(

function ypoErgo() {

	var ypoergopraksi = $( "#arithmosypoergoyolografos").val();	

	$( "#arithmosypoergoyolografos" ).change( ypoErgo ); 
	
	var arithmospaketou = $( "#arithmospaketou").val();	

//////////////////////ERGO EAP/////////////////////	
	
	if (ypoergopraksi=='ένα'){
	
		$("#arithmosypoergoy").val("1");
		
		$("#titlosypoergoy").val("Συνέχιση της παροχής υπηρεσιών εξ αποστάσεως εκπαίδευσης με καινοτόμες δράσεις στο ΕΑΠ");
		
		if (arithmospaketou=='ΠΕ 1'){
		console.log('pe 1');	
		var html='<option value="ΠΕ 1" selected>ΠΕ 1</option><option value="ΠΕ 1.1">ΠΕ 1.1</option><option value="ΠΕ 1.2">ΠΕ 1.2</option><option value="ΠΕ 1.3">ΠΕ 1.3</option><option value="ΠΕ 1.4">ΠΕ 1.4</option><option value="ΠΕ 1.5">ΠΕ 1.5</option><option value="ΠΕ 2">ΠΕ 2</option><option value="ΠΕ 3">ΠΕ 3</option><option value="ΠΕ 4">ΠΕ 4</option><option value="ΠΕ 5">ΠΕ 5</option><option value="ΠΕ 6">ΠΕ 6</option><option value="ΠΕ 7">ΠΕ 7</option><option value="ΠΕ 8">ΠΕ 8</option><option value="ΠΕ 9">ΠΕ 9</option><option value="ΠΕ 10">ΠΕ 10</option><option value="ΠΕ 11">ΠΕ 11</option>';
		}else if (arithmospaketou=='ΠΕ 1.1'){
		console.log('pe 1.1');	
		var html='<option value="ΠΕ 1" >ΠΕ 1</option><option value="ΠΕ 1.1" selected>ΠΕ 1.1</option><option value="ΠΕ 1.2">ΠΕ 1.2</option><option value="ΠΕ 1.3">ΠΕ 1.3</option><option value="ΠΕ 1.4">ΠΕ 1.4</option><option value="ΠΕ 1.5">ΠΕ 1.5</option><option value="ΠΕ 2">ΠΕ 2</option><option value="ΠΕ 3">ΠΕ 3</option><option value="ΠΕ 4">ΠΕ 4</option><option value="ΠΕ 5">ΠΕ 5</option><option value="ΠΕ 6">ΠΕ 6</option><option value="ΠΕ 7">ΠΕ 7</option><option value="ΠΕ 8">ΠΕ 8</option><option value="ΠΕ 9">ΠΕ 9</option><option value="ΠΕ 10">ΠΕ 10</option><option value="ΠΕ 11">ΠΕ 11</option>';
		}else if (arithmospaketou=='ΠΕ 1.2'){
		var html='<option value="ΠΕ 1" >ΠΕ 1</option><option value="ΠΕ 1.1" >ΠΕ 1.1</option><option value="ΠΕ 1.2" selected>ΠΕ 1.2</option><option value="ΠΕ 1.3">ΠΕ 1.3</option><option value="ΠΕ 1.4">ΠΕ 1.4</option><option value="ΠΕ 1.5">ΠΕ 1.5</option><option value="ΠΕ 2">ΠΕ 2</option><option value="ΠΕ 3">ΠΕ 3</option><option value="ΠΕ 4">ΠΕ 4</option><option value="ΠΕ 5">ΠΕ 5</option><option value="ΠΕ 6">ΠΕ 6</option><option value="ΠΕ 7">ΠΕ 7</option><option value="ΠΕ 8">ΠΕ 8</option><option value="ΠΕ 9">ΠΕ 9</option><option value="ΠΕ 10">ΠΕ 10</option><option value="ΠΕ 11">ΠΕ 11</option>';
		}else if (arithmospaketou=='ΠΕ 1.3'){
		var html='<option value="ΠΕ 1" >ΠΕ 1</option><option value="ΠΕ 1.1" >ΠΕ 1.1</option><option value="ΠΕ 1.2" >ΠΕ 1.2</option><option value="ΠΕ 1.3" selected>ΠΕ 1.3</option><option value="ΠΕ 1.4">ΠΕ 1.4</option><option value="ΠΕ 1.5">ΠΕ 1.5</option><option value="ΠΕ 2">ΠΕ 2</option><option value="ΠΕ 3">ΠΕ 3</option><option value="ΠΕ 4">ΠΕ 4</option><option value="ΠΕ 5">ΠΕ 5</option><option value="ΠΕ 6">ΠΕ 6</option><option value="ΠΕ 7">ΠΕ 7</option><option value="ΠΕ 8">ΠΕ 8</option><option value="ΠΕ 9">ΠΕ 9</option><option value="ΠΕ 10">ΠΕ 10</option><option value="ΠΕ 11">ΠΕ 11</option>';
		}else if (arithmospaketou=='ΠΕ 1.4'){
		var html='<option value="ΠΕ 1" >ΠΕ 1</option><option value="ΠΕ 1.1" >ΠΕ 1.1</option><option value="ΠΕ 1.2" >ΠΕ 1.2</option><option value="ΠΕ 1.3" >ΠΕ 1.3</option><option value="ΠΕ 1.4" selected>ΠΕ 1.4</option><option value="ΠΕ 1.5">ΠΕ 1.5</option><option value="ΠΕ 2">ΠΕ 2</option><option value="ΠΕ 3">ΠΕ 3</option><option value="ΠΕ 4">ΠΕ 4</option><option value="ΠΕ 5">ΠΕ 5</option><option value="ΠΕ 6">ΠΕ 6</option><option value="ΠΕ 7">ΠΕ 7</option><option value="ΠΕ 8">ΠΕ 8</option><option value="ΠΕ 9">ΠΕ 9</option><option value="ΠΕ 10">ΠΕ 10</option><option value="ΠΕ 11">ΠΕ 11</option>';
		}else if (arithmospaketou=='ΠΕ 1.5'){
		var html='<option value="ΠΕ 1" >ΠΕ 1</option><option value="ΠΕ 1.1" >ΠΕ 1.1</option><option value="ΠΕ 1.2" >ΠΕ 1.2</option><option value="ΠΕ 1.3" >ΠΕ 1.3</option><option value="ΠΕ 1.4">ΠΕ 1.4</option><option value="ΠΕ 1.5" selected>ΠΕ 1.5</option><option value="ΠΕ 2">ΠΕ 2</option><option value="ΠΕ 3">ΠΕ 3</option><option value="ΠΕ 4">ΠΕ 4</option><option value="ΠΕ 5">ΠΕ 5</option><option value="ΠΕ 6">ΠΕ 6</option><option value="ΠΕ 7">ΠΕ 7</option><option value="ΠΕ 8">ΠΕ 8</option><option value="ΠΕ 9">ΠΕ 9</option><option value="ΠΕ 10">ΠΕ 10</option><option value="ΠΕ 11">ΠΕ 11</option>';
		}else if (arithmospaketou=='ΠΕ 2'){
		var html='<option value="ΠΕ 1" >ΠΕ 1</option><option value="ΠΕ 1.1" >ΠΕ 1.1</option><option value="ΠΕ 1.2" >ΠΕ 1.2</option><option value="ΠΕ 1.3" >ΠΕ 1.3</option><option value="ΠΕ 1.4">ΠΕ 1.4</option><option value="ΠΕ 1.5" >ΠΕ 1.5</option><option value="ΠΕ 2" selected>ΠΕ 2</option><option value="ΠΕ 3">ΠΕ 3</option><option value="ΠΕ 4">ΠΕ 4</option><option value="ΠΕ 5">ΠΕ 5</option><option value="ΠΕ 6">ΠΕ 6</option><option value="ΠΕ 7">ΠΕ 7</option><option value="ΠΕ 8">ΠΕ 8</option><option value="ΠΕ 9">ΠΕ 9</option><option value="ΠΕ 10">ΠΕ 10</option><option value="ΠΕ 11">ΠΕ 11</option>';
		}else if (arithmospaketou=='ΠΕ 3'){
		var html='<option value="ΠΕ 1" >ΠΕ 1</option><option value="ΠΕ 1.1" >ΠΕ 1.1</option><option value="ΠΕ 1.2" >ΠΕ 1.2</option><option value="ΠΕ 1.3" >ΠΕ 1.3</option><option value="ΠΕ 1.4">ΠΕ 1.4</option><option value="ΠΕ 1.5" selected>ΠΕ 1.5</option><option value="ΠΕ 2" >ΠΕ 2</option><option value="ΠΕ 3"selected>ΠΕ 3</option><option value="ΠΕ 4">ΠΕ 4</option><option value="ΠΕ 5">ΠΕ 5</option><option value="ΠΕ 6">ΠΕ 6</option><option value="ΠΕ 7">ΠΕ 7</option><option value="ΠΕ 8">ΠΕ 8</option><option value="ΠΕ 9">ΠΕ 9</option><option value="ΠΕ 10">ΠΕ 10</option><option value="ΠΕ 11">ΠΕ 11</option>';
		}else if (arithmospaketou=='ΠΕ 4'){
		var html='<option value="ΠΕ 1" >ΠΕ 1</option><option value="ΠΕ 1.1" >ΠΕ 1.1</option><option value="ΠΕ 1.2" selected>ΠΕ 1.2</option><option value="ΠΕ 1.3" selected>ΠΕ 1.3</option><option value="ΠΕ 1.4">ΠΕ 1.4</option><option value="ΠΕ 1.5" selected>ΠΕ 1.5</option><option value="ΠΕ 2" >ΠΕ 2</option><option value="ΠΕ 3">ΠΕ 3</option><option value="ΠΕ 4"selected>ΠΕ 4</option><option value="ΠΕ 5">ΠΕ 5</option><option value="ΠΕ 6">ΠΕ 6</option><option value="ΠΕ 7">ΠΕ 7</option><option value="ΠΕ 8">ΠΕ 8</option><option value="ΠΕ 9">ΠΕ 9</option><option value="ΠΕ 10">ΠΕ 10</option><option value="ΠΕ 11">ΠΕ 11</option>';
		}else if (arithmospaketou=='ΠΕ 5'){
		var html='<option value="ΠΕ 1" >ΠΕ 1</option><option value="ΠΕ 1.1" >ΠΕ 1.1</option><option value="ΠΕ 1.2" selected>ΠΕ 1.2</option><option value="ΠΕ 1.3" selected>ΠΕ 1.3</option><option value="ΠΕ 1.4">ΠΕ 1.4</option><option value="ΠΕ 1.5" selected>ΠΕ 1.5</option><option value="ΠΕ 2" >ΠΕ 2</option><option value="ΠΕ 3">ΠΕ 3</option><option value="ΠΕ 4">ΠΕ 4</option><option value="ΠΕ 5"selected>ΠΕ 5</option><option value="ΠΕ 6">ΠΕ 6</option><option value="ΠΕ 7">ΠΕ 7</option><option value="ΠΕ 8">ΠΕ 8</option><option value="ΠΕ 9">ΠΕ 9</option><option value="ΠΕ 10">ΠΕ 10</option><option value="ΠΕ 11">ΠΕ 11</option>';
		}else if (arithmospaketou=='ΠΕ 6'){
		var html='<option value="ΠΕ 1" >ΠΕ 1</option><option value="ΠΕ 1.1" >ΠΕ 1.1</option><option value="ΠΕ 1.2" selected>ΠΕ 1.2</option><option value="ΠΕ 1.3" selected>ΠΕ 1.3</option><option value="ΠΕ 1.4">ΠΕ 1.4</option><option value="ΠΕ 1.5" selected>ΠΕ 1.5</option><option value="ΠΕ 2" >ΠΕ 2</option><option value="ΠΕ 3">ΠΕ 3</option><option value="ΠΕ 4">ΠΕ 4</option><option value="ΠΕ 5">ΠΕ 5</option><option value="ΠΕ 6"selected>ΠΕ 6</option><option value="ΠΕ 7">ΠΕ 7</option><option value="ΠΕ 8">ΠΕ 8</option><option value="ΠΕ 9">ΠΕ 9</option><option value="ΠΕ 10">ΠΕ 10</option><option value="ΠΕ 11">ΠΕ 11</option>';
		}else if (arithmospaketou=='ΠΕ 7'){
		var html='<option value="ΠΕ 1" >ΠΕ 1</option><option value="ΠΕ 1.1" >ΠΕ 1.1</option><option value="ΠΕ 1.2" selected>ΠΕ 1.2</option><option value="ΠΕ 1.3" selected>ΠΕ 1.3</option><option value="ΠΕ 1.4">ΠΕ 1.4</option><option value="ΠΕ 1.5" selected>ΠΕ 1.5</option><option value="ΠΕ 2" >ΠΕ 2</option><option value="ΠΕ 3">ΠΕ 3</option><option value="ΠΕ 4">ΠΕ 4</option><option value="ΠΕ 5">ΠΕ 5</option><option value="ΠΕ 6">ΠΕ 6</option><option value="ΠΕ 7"selected>ΠΕ 7</option><option value="ΠΕ 8">ΠΕ 8</option><option value="ΠΕ 9">ΠΕ 9</option><option value="ΠΕ 10">ΠΕ 10</option><option value="ΠΕ 11">ΠΕ 11</option>';
		}else if (arithmospaketou=='ΠΕ 8'){
		var html='<option value="ΠΕ 1" >ΠΕ 1</option><option value="ΠΕ 1.1" >ΠΕ 1.1</option><option value="ΠΕ 1.2" selected>ΠΕ 1.2</option><option value="ΠΕ 1.3" selected>ΠΕ 1.3</option><option value="ΠΕ 1.4">ΠΕ 1.4</option><option value="ΠΕ 1.5" selected>ΠΕ 1.5</option><option value="ΠΕ 2" >ΠΕ 2</option><option value="ΠΕ 3">ΠΕ 3</option><option value="ΠΕ 4">ΠΕ 4</option><option value="ΠΕ 5">ΠΕ 5</option><option value="ΠΕ 6">ΠΕ 6</option><option value="ΠΕ 7">ΠΕ 7</option><option value="ΠΕ 8"selected>ΠΕ 8</option><option value="ΠΕ 9">ΠΕ 9</option><option value="ΠΕ 10">ΠΕ 10</option><option value="ΠΕ 11">ΠΕ 11</option>';
		}else if (arithmospaketou=='ΠΕ 9'){
		var html='<option value="ΠΕ 1" >ΠΕ 1</option><option value="ΠΕ 1.1" >ΠΕ 1.1</option><option value="ΠΕ 1.2" selected>ΠΕ 1.2</option><option value="ΠΕ 1.3" selected>ΠΕ 1.3</option><option value="ΠΕ 1.4">ΠΕ 1.4</option><option value="ΠΕ 1.5" selected>ΠΕ 1.5</option><option value="ΠΕ 2" >ΠΕ 2</option><option value="ΠΕ 3">ΠΕ 3</option><option value="ΠΕ 4">ΠΕ 4</option><option value="ΠΕ 5">ΠΕ 5</option><option value="ΠΕ 6">ΠΕ 6</option><option value="ΠΕ 7">ΠΕ 7</option><option value="ΠΕ 8">ΠΕ 8</option><option value="ΠΕ 9"selected>ΠΕ 9</option><option value="ΠΕ 10">ΠΕ 10</option><option value="ΠΕ 11">ΠΕ 11</option>';
		}else if (arithmospaketou=='ΠΕ 10'){
		var html='<option value="ΠΕ 1" >ΠΕ 1</option><option value="ΠΕ 1.1" >ΠΕ 1.1</option><option value="ΠΕ 1.2" selected>ΠΕ 1.2</option><option value="ΠΕ 1.3" selected>ΠΕ 1.3</option><option value="ΠΕ 1.4">ΠΕ 1.4</option><option value="ΠΕ 1.5" selected>ΠΕ 1.5</option><option value="ΠΕ 2" >ΠΕ 2</option><option value="ΠΕ 3">ΠΕ 3</option><option value="ΠΕ 4">ΠΕ 4</option><option value="ΠΕ 5">ΠΕ 5</option><option value="ΠΕ 6">ΠΕ 6</option><option value="ΠΕ 7">ΠΕ 7</option><option value="ΠΕ 8">ΠΕ 8</option><option value="ΠΕ 9">ΠΕ 9</option><option value="ΠΕ 10"selected>ΠΕ 10</option><option value="ΠΕ 11">ΠΕ 11</option>';
		}else if (arithmospaketou=='ΠΕ 11'){
		var html='<option value="ΠΕ 1" >ΠΕ 1</option><option value="ΠΕ 1.1" >ΠΕ 1.1</option><option value="ΠΕ 1.2" selected>ΠΕ 1.2</option><option value="ΠΕ 1.3" selected>ΠΕ 1.3</option><option value="ΠΕ 1.4">ΠΕ 1.4</option><option value="ΠΕ 1.5" selected>ΠΕ 1.5</option><option value="ΠΕ 2" >ΠΕ 2</option><option value="ΠΕ 3">ΠΕ 3</option><option value="ΠΕ 4">ΠΕ 4</option><option value="ΠΕ 5">ΠΕ 5</option><option value="ΠΕ 6">ΠΕ 6</option><option value="ΠΕ 7">ΠΕ 7</option><option value="ΠΕ 8">ΠΕ 8</option><option value="ΠΕ 9">ΠΕ 9</option><option value="ΠΕ 10">ΠΕ 10</option><option value="ΠΕ 11"selected>ΠΕ 11</option>';
		}else if(arithmospaketou=='ΠΕ 2.1') {		
		var html='<option value="ΠΕ 2.1" selected>ΠΕ 2.1</option><option value="ΠΕ 2.2">ΠΕ 2.2</option><option value="ΠΕ 2.3">ΠΕ 2.3</option>';
		}else if(arithmospaketou=='ΠΕ 2.2') {		
		var html='<option value="ΠΕ 2.1" >ΠΕ 2.1</option><option value="ΠΕ 2.2"selected>ΠΕ 2.2</option><option value="ΠΕ 2.3">ΠΕ 2.3</option>';
		}else if(arithmospaketou=='ΠΕ 2.3') {		
		var html='<option value="ΠΕ 2.1" >ΠΕ 2.1</option><option value="ΠΕ 2.2">ΠΕ 2.2</option><option value="ΠΕ 2.3"selected>ΠΕ 2.3</option>';
		}else if(arithmospaketou=='ΠΕ 3.1') {		
		var html='<option value="ΠΕ 3.1" selected>ΠΕ 3.1</option><option value="ΠΕ 3.2">ΠΕ 3.2</option><';
		}else if(arithmospaketou=='ΠΕ 3.2') {		
		var html='<option value="ΠΕ 3.1" >ΠΕ 3.1</option><option value="ΠΕ 3.2"selected>ΠΕ 3.2</option>';
		}else if(arithmospaketou=='ΠΕ 4.1') {		
		var html='<option value="ΠΕ 4.1" selected>ΠΕ 4.1</option><option value="ΠΕ 4.2">ΠΕ 4.2</option><option value="ΠΕ 4.3">ΠΕ 4.3</option><option value="ΠΕ 4.4">ΠΕ 4.4</option><option value="ΠΕ 4.5">ΠΕ 4.5</option><option value="ΠΕ 4.6">ΠΕ 4.6</option>';
		}else if(arithmospaketou=='ΠΕ 4.2') {		
		var html='<option value="ΠΕ 4.1" >ΠΕ 4.1</option><option value="ΠΕ 4.2"selected>ΠΕ 4.2</option><option value="ΠΕ 4.3">ΠΕ 4.3</option><option value="ΠΕ 4.4">ΠΕ 4.4</option><option value="ΠΕ 4.5">ΠΕ 4.5</option><option value="ΠΕ 4.6">ΠΕ 4.6</option>'
		}else if(arithmospaketou=='ΠΕ 4.3') {		
		var html='<option value="ΠΕ 4.1" >ΠΕ 4.1</option><option value="ΠΕ 4.2">ΠΕ 4.2</option><option value="ΠΕ 4.3"selected>ΠΕ 4.3</option><option value="ΠΕ 4.4">ΠΕ 4.4</option><option value="ΠΕ 4.5">ΠΕ 4.5</option><option value="ΠΕ 4.6">ΠΕ 4.6</option>'
		}else if(arithmospaketou=='ΠΕ 4.4') {		
		var html='<option value="ΠΕ 4.1" >ΠΕ 4.1</option><option value="ΠΕ 4.2">ΠΕ 4.2</option><option value="ΠΕ 4.3">ΠΕ 4.3</option><option value="ΠΕ 4.4"selected>ΠΕ 4.4</option><option value="ΠΕ 4.5">ΠΕ 4.5</option><option value="ΠΕ 4.6">ΠΕ 4.6</option>'
		}else if(arithmospaketou=='ΠΕ 4.5') {		
		var html='<option value="ΠΕ 4.1" >ΠΕ 4.1</option><option value="ΠΕ 4.2">ΠΕ 4.2</option><option value="ΠΕ 4.3">ΠΕ 4.3</option><option value="ΠΕ 4.4">ΠΕ 4.4</option><option value="ΠΕ 4.5"selected>ΠΕ 4.5</option><option value="ΠΕ 4.6">ΠΕ 4.6</option>'
		}else if(arithmospaketou=='ΠΕ 4.6') {		
		var html='<option value="ΠΕ 4.1" >ΠΕ 4.1</option><option value="ΠΕ 4.2">ΠΕ 4.2</option><option value="ΠΕ 4.3">ΠΕ 4.3</option><option value="ΠΕ 4.4">ΠΕ 4.4</option><option value="ΠΕ 4.5">ΠΕ 4.5</option><option value="ΠΕ 4.6"selected>ΠΕ 4.6</option>'
		}else if(arithmospaketou=='ΠΕ 5.1') {		
		var html='<option value="ΠΕ 5.1" selected>ΠΕ 5.1</option><option value="ΠΕ 5.2">ΠΕ 5.2</option><option value="ΠΕ 5.3">ΠΕ 5.3</option>';
		}else if(arithmospaketou=='ΠΕ 5.2') {		
		var html='<option value="ΠΕ 5.1" >ΠΕ 5.1</option><option value="ΠΕ 5.2"selected>ΠΕ 5.2</option><option value="ΠΕ 5.3">ΠΕ 5.3</option>';
		}else if(arithmospaketou=='ΠΕ 5.3') {		
		var html='<option value="ΠΕ 5.1" >ΠΕ 2.1</option><option value="ΠΕ 5.2">ΠΕ 5.2</option><option value="ΠΕ 5.3"selected>ΠΕ 5.3</option>';
		}else{
		var html='<option value="ΠΕ 1" selected>ΠΕ 1</option><option value="ΠΕ 1.1">ΠΕ 1.1</option><option value="ΠΕ 1.2">ΠΕ 1.2</option><option value="ΠΕ 1.3">ΠΕ 1.3</option><option value="ΠΕ 1.4">ΠΕ 1.4</option><option value="ΠΕ 1.5">ΠΕ 1.5</option><option value="ΠΕ 2">ΠΕ 2</option><option value="ΠΕ 3">ΠΕ 3</option><option value="ΠΕ 4">ΠΕ 4</option><option value="ΠΕ 5">ΠΕ 5</option><option value="ΠΕ 6">ΠΕ 6</option><option value="ΠΕ 7">ΠΕ 7</option><option value="ΠΕ 8">ΠΕ 8</option><option value="ΠΕ 9">ΠΕ 9</option><option value="ΠΕ 10">ΠΕ 10</option><option value="ΠΕ 11">ΠΕ 11</option>';
		}
		
		
		$("#arithmospaketoyergasias").empty();
		$("#arithmospaketoyergasias").append(html);	
			
		$("#titlospaketoyergasias").val("Συνέχιση της παροχής υπηρεσιών εξ αποστάσεως εκπαίδευσης με καινοτόμες δράσεις στο ΕΑΠ");
		
		$("#apofasiylopoiisisypoergoymetaidiamesa").val("203η/17-09-2010");		
		
		$("#epistimonikosypeythinosypoergoy").val("κ. ΚΟΚΚΩΣΗΣ ΧΑΡΑΛΑΜΠΟΣ");
	}	
	
	if (ypoergopraksi=='δύο'){
	
		$("#arithmosypoergoy").val("2");
		
		$("#titlosypoergoy").val("Ανάπτυξη έντυπου εκπαιδευτικού υλικού για τα νέα Προγράμματα Σπουδών");

		
		if (arithmospaketou=='ΠΕ 2.1'){
		var html='<option value="ΠΕ 2.1" selected>ΠΕ 2.1</option><option value="ΠΕ 2.2">ΠΕ 2.2</option><option value="ΠΕ 2.3">ΠΕ 2.3</option>';
		}else if (arithmospaketou=='ΠΕ 2.2'){
		var html='<option value="ΠΕ 2.1" >ΠΕ 2.1</option><option value="ΠΕ 2.2"selected>ΠΕ 2.2</option><option value="ΠΕ 2.3">ΠΕ 2.3</option>';
		} else if (arithmospaketou=='ΠΕ 2.3'){
		var html='<option value="ΠΕ 2.1" selected>ΠΕ 2.1</option><option value="ΠΕ 2.2">ΠΕ 2.2</option><option value="ΠΕ 2.3"selected>ΠΕ 2.3</option>';
		}else{
		var html='<option value="ΠΕ 2.1" >ΠΕ 2.1</option><option value="ΠΕ 2.2">ΠΕ 2.2</option><option value="ΠΕ 2.3"selected>ΠΕ 2.3</option>';
		}
		

		$("#arithmospaketoyergasias").empty();
		$("#arithmospaketoyergasias").append(html);	
			
		$("#titlospaketoyergasias").val("Ανάπτυξη έντυπου εκπαιδευτικού υλικού για τα νέα Προγράμματα Σπουδών");
		
		$("#apofasiylopoiisisypoergoymetaidiamesa").val("203η/17-09-2010");
		
		$("#epistimonikosypeythinosypoergoy").val("κ. ΠΑΤΑΡΓΙΑΣ ΘΕΟΧΑΡΗΣ");
	}	
	
	if (ypoergopraksi=='τρία'){
	
		$("#arithmosypoergoy").val("3");
		
		$("#titlosypoergoy").val("Ανάπτυξη διδακτικού υλικού βασισμένο στις νέες τεχνολογίες");
		
		
		
		if (arithmospaketou=='ΠΕ 3.1'){
		var html='<option value="ΠΕ 3.1" selected>ΠΕ 3.1</option><option value="ΠΕ 3.2">ΠΕ 3.2</option>';
		}else if(arithmospaketou=='ΠΕ 3.2'){
		var html='<option value="ΠΕ 3.1" >ΠΕ 3.1</option><option value="ΠΕ 3.2"selected>ΠΕ 3.2</option>';
		}else{
		var html='<option value="ΠΕ 3.1" selected>ΠΕ 3.1</option><option value="ΠΕ 3.2">ΠΕ 3.2</option>';
		}
			
		$("#arithmospaketoyergasias").empty();
		$("#arithmospaketoyergasias").append(html);	
			
		$("#titlospaketoyergasias").val("Ανάπτυξη διδακτικού υλικού βασισμένο στις νέες τεχνολογίες");
		
		$("#apofasiylopoiisisypoergoymetaidiamesa").val("203η/01-10-2010");
		
		$("#epistimonikosypeythinosypoergoy").val("κ. ΚΟΚΚΟΣ ΑΛΕΞΙΟΣ");
	}	

	if (ypoergopraksi=='τέσσερα'){
	
		$("#arithmosypoergoy").val("4");
		
		$("#titlosypoergoy").val("Μονάδα Εσωτερικής Αξιολόγησης και Επιμόρφωσης");
		
		
	if (arithmospaketou=='ΠΕ 4.1'){	
		var html='<option value="ΠΕ 4.1" selected>ΠΕ 4.1</option><option value="ΠΕ 4.2">ΠΕ 4.2</option><option value="ΠΕ 4.3">ΠΕ 4.3</option><option value="ΠΕ 4.4">ΠΕ 4.4</option><option value="ΠΕ 4.5">ΠΕ 4.5</option><option value="ΠΕ 4.6">ΠΕ 4.6</option>';
		}else if (arithmospaketou=='ΠΕ 4.2'){	
		var html='<option value="ΠΕ 4.1" >ΠΕ 4.1</option><option value="ΠΕ 4.2"selected>ΠΕ 4.2</option><option value="ΠΕ 4.3">ΠΕ 4.3</option><option value="ΠΕ 4.4">ΠΕ 4.4</option><option value="ΠΕ 4.5">ΠΕ 4.5</option><option value="ΠΕ 4.6">ΠΕ 4.6</option>';
		}else if (arithmospaketou=='ΠΕ 4.3'){	
		var html='<option value="ΠΕ 4.1" >ΠΕ 4.1</option><option value="ΠΕ 4.2">ΠΕ 4.2</option><option value="ΠΕ 4.3"selected>ΠΕ 4.3</option><option value="ΠΕ 4.4">ΠΕ 4.4</option><option value="ΠΕ 4.5">ΠΕ 4.5</option><option value="ΠΕ 4.6">ΠΕ 4.6</option>';
		}else if (arithmospaketou=='ΠΕ 4.4'){	
		var html='<option value="ΠΕ 4.1" >ΠΕ 4.1</option><option value="ΠΕ 4.2">ΠΕ 4.2</option><option value="ΠΕ 4.3">ΠΕ 4.3</option><option value="ΠΕ 4.4"selected>ΠΕ 4.4</option><option value="ΠΕ 4.5">ΠΕ 4.5</option><option value="ΠΕ 4.6">ΠΕ 4.6</option>';
		}else{	
		var html='<option value="ΠΕ 4.1" selected>ΠΕ 4.1</option><option value="ΠΕ 4.2">ΠΕ 4.2</option><option value="ΠΕ 4.3">ΠΕ 4.3</option><option value="ΠΕ 4.4">ΠΕ 4.4</option><option value="ΠΕ 4.5">ΠΕ 4.5</option><option value="ΠΕ 4.6">ΠΕ 4.6</option>';
		}	
		
		$("#arithmospaketoyergasias").empty();
		$("#arithmospaketoyergasias").append(html);	
			
		$("#titlospaketoyergasias").val("Ανάπτυξη έντυπου εκπαιδευτικού υλικού για τα νέα Προγράμματα Σπουδών");
		
		$("#apofasiylopoiisisypoergoymetaidiamesa").val("205/04-11-2010");		
		
		$("#epistimonikosypeythinosypoergoy").val("κ. ΞΕΝΟΣ ΜΙΧΑΗΛ");
	}	

	if (ypoergopraksi=='πέντε'){
	
		$("#arithmosypoergoy").val("5");
		
		$("#titlosypoergoy").val("Εργαστήριo Εκπαιδευτικού Υλικού και Εκπαιδευτικής Μεθοδολογίας");
		
	if (arithmospaketou=='ΠΕ 5.1'){	
		var html='<option value="ΠΕ 5.1" selected>ΠΕ 5.1</option><option value="ΠΕ 5.2">ΠΕ 5.2</option><option value="ΠΕ 5.3">ΠΕ 5.3</option>';
	}else if(arithmospaketou=='ΠΕ 5.2'){
		var html='<option value="ΠΕ 5.1" >ΠΕ 5.1</option><option value="ΠΕ 5.2"selected>ΠΕ 5.2</option><option value="ΠΕ 5.3">ΠΕ 5.3</option>';
	}else if(arithmospaketou=='ΠΕ 5.3'){
		var html='<option value="ΠΕ 5.1" >ΠΕ 5.1</option><option value="ΠΕ 5.2">ΠΕ 5.2</option><option value="ΠΕ 5.3"selected>ΠΕ 5.3</option>';
	}else{	
		var html='<option value="ΠΕ 5.1" selected>ΠΕ 5.1</option><option value="ΠΕ 5.2">ΠΕ 5.2</option><option value="ΠΕ 5.3">ΠΕ 5.3</option>';
	}
		
				
		
		$("#arithmospaketoyergasias").empty();
		$("#arithmospaketoyergasias").append(html);	
			
		$("#titlospaketoyergasias").val("Ανάπτυξη έντυπου εκπαιδευτικού υλικού για τα νέα Προγράμματα Σπουδών");
		
		$("#apofasiylopoiisisypoergoymetaidiamesa").val("205/04-11-2010");		
		
		$("#epistimonikosypeythinosypoergoy").val("κ. ΚΑΜΕΑΣ ΑΧΙΛΛΕΑΣ");
	}		
}
);

$( document ).ready(
function paketoErgasias() {

	var paketoValue = $( "#arithmospaketoyergasias").val();	

	$( "#arithmospaketoyergasias" ).change( paketoErgasias ); 
	
///////////ERGO EAP/////////////////////
	if (paketoValue=='ΠΕ 1'){
		$("#titlospaketoyergasias").val("Συνέχιση της παροχής υπηρεσιών εξ αποστάσεως εκπαίδευσης με καινοτόμες δράσεις στο ΕΑΠ");	
	}	
	if (paketoValue=='ΠΕ 1.1'){
		$("#titlospaketoyergasias").val("Διαδικασίες τήρησης αρχείων κατά την διάρκεια όλου του υποέργου");
	}

	if (paketoValue=='ΠΕ 1.2'){
		$("#titlospaketoyergasias").val("Οργάνωση, διαχείριση  και συντονισμός της δημιουργίας εργαστηρίων από απόσταση");
	}

	if (paketoValue=='ΠΕ 1.3'){
		$("#titlospaketoyergasias").val("Οικονομική και Διαχειριστική παρακολούθηση του έργου");
	}

	if (paketoValue=='ΠΕ 1.4'){
		$("#titlospaketoyergasias").val("Οργάνωση, διαχείριση  και συντονισμός των δράσεων ενημέρωσης, προβολής και δημοσιότητας");
	}

	if (paketoValue=='ΠΕ 1.5'){
		$("#titlospaketoyergasias").val("Συγκρότηση επιτροπών για την αξιολόγηση προσφορών των διαγωνισμών και την παραλαβή παραδοτέων");
	}

	if (paketoValue=='ΠΕ 2'){
		$("#titlospaketoyergasias").val("Δημιουργία εργαστηρίων από απόσταση");
	}

	if (paketoValue=='ΠΕ 3'){
		$("#titlospaketoyergasias").val("Δημιουργία πυλών-πόλων του ΕΑΠ ανα πόλη");
	}

	if (paketoValue=='ΠΕ 4'){
		$("#titlospaketoyergasias").val("Υποστήριξη της υλικοτεχνικής υποδομής");
	}

	if (paketoValue=='ΠΕ 5'){
		$("#titlospaketoyergasias").val("Ανάπτυξη Γραφείου Παρακολούθησης της Ποιότητας");
	}

	if (paketoValue=='ΠΕ 6'){
		$("#titlospaketoyergasias").val("Αξιολόγηση της Πράξης");
	}
	
	if (paketoValue=='ΠΕ 7'){
		$("#titlospaketoyergasias").val("Μελέτη για την επαγγελματική εξέλιξη των αποφοίτων του ΕΑΠ και το βαθμό σύγκλισης των δεξιοτήτων που έχουν αποκτήσει με τις πραγματικές ανάγκες της αγοράς εργασίας");
	}

	if (paketoValue=='ΠΕ 8'){
		$("#titlospaketoyergasias").val("Ανάπτυξη τηλεοπτικών εκπαιδευτικών και επιμορφωτικών προγραμμάτων");
	}

	if (paketoValue=='ΠΕ 9'){
		$("#titlospaketoyergasias").val("Διεθνοποίηση Προγραμμάτων Σπουδών του ΕΑΠ");
	}

	if (paketoValue=='ΠΕ 10'){
		$("#titlospaketoyergasias").val("Παροχή Joint Degree Προγραμμάτων σε συνεργασία με Πανεπιστήμια του Εξωτερικού");
	}

	if (paketoValue=='ΠΕ 11'){
		$("#titlospaketoyergasias").val("Ανάπτυξη πλατφόρμας υπηρεσιών για την εξ αποστάσεως πληροφόρηση και υποστήριξη των φοιτητών μέσω των Πυλών-Πόλων των Περιφερειών");
	}

	if (paketoValue=='ΠΕ 2.1'){
		$("#titlospaketoyergasias").val("Ανάπτυξη έντυπου εκπαιδευτικού υλικού για τα νέα προγράμματα σπουδών");
	}

	if (paketoValue=='ΠΕ 2.2'){
		$("#titlospaketoyergasias").val("Συγγραφή και μετάφραση θεματικών ενοτήτων προγραμμάτων σπουδών του εξωτερικού");
	}

	if (paketoValue=='ΠΕ 2.3'){
		$("#titlospaketoyergasias").val("Οργάνωση, διαχείριση και συντονισμός της ανάπτυξης έντυπου εκπαιδευτικού υλικού για τα νέα Προγράμματα Σπουδών");
	}

	if (paketoValue=='ΠΕ 3.1'){
		$("#titlospaketoyergasias").val("Ανάπτυξη διδακτικού υλικού βασισμένο στις νέες τεχνολογίες");
	}

	if (paketoValue=='ΠΕ 3.2'){
		$("#titlospaketoyergasias").val("Οργάνωση, διαχείριση και συντονισμός της ανάπτυξης διδακτικού υλικού βασισμένο στις νέες τεχνολογίες");
	}

	if (paketoValue=='ΠΕ 4.1'){
		$("#titlospaketoyergasias").val("Αξιολόγηση του Έντυπου και Εναλλακτικού Διδακτικού Υλικού που παράγει το ΕΑΠ");
	}

	if (paketoValue=='ΠΕ 4.2'){
		$("#titlospaketoyergasias").val("Αποτίμηση του συστήματος αξιολόγησης των συντελεστών του εκπαιδευτικού συστήματος παροχής σπουδών από απόσταση");
	}

	if (paketoValue=='ΠΕ 4.3'){
		$("#titlospaketoyergasias").val("Εξωτερική αξιολόγηση");
	}	
	
	if (paketoValue=='ΠΕ 4.4'){
		$("#titlospaketoyergasias").val("Επιμόρφωση διδασκόντων ΕΑΠ");
	}

	if (paketoValue=='ΠΕ 4.5'){
		$("#titlospaketoyergasias").val("Οργάνωση, διαχείριση και συντονισμός της Μονάδας Εσωτερικης Αξιολόγησης και Επιμόρφωσης");
	}

	if (paketoValue=='ΠΕ 4.6'){
		$("#titlospaketoyergasias").val("Μελέτη για τη χρήση MOOC για την εκπαίδευση υφισταμένων και υποψηφίων μελών ΣΕΠ");
	}		
	
	if (paketoValue=='ΠΕ 5.1'){
		$("#titlospaketoyergasias").val("Αναπτυξιακές δράσεις του εργαστηρίου Εκπαιδευτικού Υλικού και Εκπαιδευτικής Μεθοδολογίας για την υποστήριξη του εκπαιδευτικού έργου του ΕΑΠ");
	}

	if (paketoValue=='ΠΕ 5.2'){
		$("#titlospaketoyergasias").val("Προστασία των πνευματικών δικαιωμάτων στο ψηφιακό απόθεμα");
	}

	if (paketoValue=='ΠΕ 5.3'){
		$("#titlospaketoyergasias").val("Οργάνωση, διαχείριση και συντονισμός των Αναπτυξιακών ενεργειών του ΕΕΥΕΜ");
	}	
	
//////////////////////ERGO GD/////////////////////
	
	var ergopraksi = $( "#ergopraksi").val();
	
	if (paketoValue=='ΠΕ1'&& ergopraksi=='2'){	
		$("#titlospaketoyergasias").val("Ένταξη του ΓΔ στο ΔΑΣΤΑ-Πληροφοριακό Σύστημα και Δικτυακός Τόπος ΓΔ");
	}
	
	if (paketoValue=='ΠΕ2'&& ergopraksi=='2'){	
		$("#titlospaketoyergasias").val("Αναβάθμιση των Μηχανισμών Σύνδεσης ΓΔ με τους εμπλεκόμενους φορείς και τα φυσικά πρόσωπα");
	}

	if (paketoValue=='ΠΕ3'&& ergopraksi=='2'){	
		$("#titlospaketoyergasias").val("Δικτύωση του ΓΔ σε διεθνές επίπεδο");
	}

	if (paketoValue=='ΠΕ4'&& ergopraksi=='2'){	
		$("#titlospaketoyergasias").val("Υλοποίηση παρεμβάσεων για ΑΜΕΑ");
	}

	if (paketoValue=='ΠΕ5'&& ergopraksi=='2'){	
		$("#titlospaketoyergasias").val("Αναβάθμιση των υπηρεσιών Συμβουλευτικής και Επαγγελματικού Προσανατολισμού");
	}

	if (paketoValue=='ΠΕ6'&& ergopraksi=='2'){	
		$("#titlospaketoyergasias").val("Παρακολούθηση των επωφελούμενων από το ΓΔ");
	}

	if (paketoValue=='ΠΕ7'&& ergopraksi=='2'){	
		$("#titlospaketoyergasias").val("Προμήθεια εξοπλισμού δικτύωσης και διασύνδεσης");
	}

	if (paketoValue=='ΠΕ8'&& ergopraksi=='2'){	
		$("#titlospaketoyergasias").val("Προμήθεια εφαρμογών αναβάθμισης");
	}

	if (paketoValue=='ΠΕ9'&& ergopraksi=='2'){	
		$("#titlospaketoyergasias").val("Ετήσια Σχέδια δράσης-Αξιολόγηση υπηρεσιών ΓΔ");
	}

//////////////////////ERGO DASTA/////////////////////
	var ergopraksi = $( "#ergopraksi").val();
	
	if (paketoValue=='ΠΕ1'&& ergopraksi=='3'){	
		$("#titlospaketoyergasias").val("Οργάνωση και Στελέχωση ΔΑΣΤΑ");
	}
	
	if (paketoValue=='ΠΕ2'&& ergopraksi=='3'){	
		$("#titlospaketoyergasias").val("Ίδρυση και Λειτουργία Παρατηρητήριου για την Απασχόληση και τη Σταδιοδρομία (ΠΑΣ)");
	}

	if (paketoValue=='ΠΕ3'&& ergopraksi=='3'){	
		$("#titlospaketoyergasias").val("Δράσεις Δικτύωσης και Μεταφοράς Βέλτιστων Πρακτικών");
	}

	if (paketoValue=='ΠΕ4'&& ergopraksi=='3'){	
		$("#titlospaketoyergasias").val("Δράσεις Εκπαίδευσης");
	}

	if (paketoValue=='ΠΕ5'&& ergopraksi=='3'){	
		$("#titlospaketoyergasias").val("Δράσεις Εσωτερικής Αξιολόγησης και Πιστοποίησης");
	}

	if (paketoValue=='ΠΕ6'&& ergopraksi=='3'){	
		$("#titlospaketoyergasias").val("Ανάλυση και σχεδιασμός συστήματος ΔΑΣΤΑ");
	}

	if (paketoValue=='ΠΕ7'&& ergopraksi=='3'){	
		$("#titlospaketoyergasias").val("Προμήθεια εξοπλισμού και δημιουργία υποδομών");
	}

	if (paketoValue=='ΠΕ8'&& ergopraksi=='3'){	
		$("#titlospaketoyergasias").val("Σχεδιασμός, Υλοποίηση και Λειτουργία Δικτυακής Πύλης ΔΑΣΤΑ ΕΑΠ");
	}

	if (paketoValue=='ΠΕ9'&& ergopraksi=='3'){	
		$("#titlospaketoyergasias").val("Σχεδιασμός Δεδομένων");
	}

	if (paketoValue=='ΠΕ10'&& ergopraksi=='3'){	
		$("#titlospaketoyergasias").val("Σχεδιασμός και Υλοποίηση Ενιαίου Χώρου Υπηρεσιών ΔΑΣΤΑ ΕΑΠ");
	}
	
	if (paketoValue=='ΠΕ11'&& ergopraksi=='3'){	
		$("#titlospaketoyergasias").val("Σχεδιασμός και Υλοποίηση Εργαλείων και Διεπαφών");
	}

	if (paketoValue=='ΠΕ12'&& ergopraksi=='3'){	
		$("#titlospaketoyergasias").val("Σχεδιασμός και Υλοποίηση Διαλειτουργικότητας");
	}

	if (paketoValue=='ΠΕ13'&& ergopraksi=='3'){	
		$("#titlospaketoyergasias").val("Ολοκλήρωση και Έλεγχος Συστήματος ΔΑΣΤΑ ΕΑΠ");
	}

	if (paketoValue=='ΠΕ14'&& ergopraksi=='3'){	
		$("#titlospaketoyergasias").val("Εγκατάσταση Συστήματος ΔΑΣΤΑ ΕΑΠ");
	}

	if (paketoValue=='ΠΕ15'&& ergopraksi=='3'){	
		$("#titlospaketoyergasias").val("Έκδοση Ενημερωτικού Υλικού (έντυπο, ψηφιακό, περιοδικό, έκτακτο)");
	}

	if (paketoValue=='ΠΕ16'&& ergopraksi=='3'){	
		$("#titlospaketoyergasias").val("Διοργάνωση Εκδηλώσεων");
	}

	if (paketoValue=='ΠΕ17'&& ergopraksi=='3'){	
		$("#titlospaketoyergasias").val("Διοργάνωση Ημερίδας Καινοτομίας, Απασχόλησης και Σταδιοδρομίας");
	}

	if (paketoValue=='ΠΕ18'&& ergopraksi=='3'){	
		$("#titlospaketoyergasias").val("Δράσεις Προώθησης και Διάχυσης Υπηρεσιών ΔΑΣΤΑ ΕΑΠ");
	}	
	
	if (paketoValue=='ΠΕ19'&& ergopraksi=='3'){	
		$("#titlospaketoyergasias").val("Συγκρότηση επιτροπής εξωτερικών αξιολογητών");
	}

	if (paketoValue=='ΠΕ20'&& ergopraksi=='3'){	
		$("#titlospaketoyergasias").val("Εξωτερική αξιολόγηση");
	}	
//////////////////////ERGO GD/////////////////////
	
	var ergopraksi = $( "#ergopraksi").val();
	
	if (paketoValue=='ΠΕ1'&& ergopraksi=='4'){	
		$("#titlospaketoyergasias").val("Δημιουργία και Λειτουργία της Μονάδας Καινοτομίας και Επιχειρηματικότητας του ΕΑΠ");
	}
	
	if (paketoValue=='ΠΕ2'&& ergopraksi=='4'){	
		$("#titlospaketoyergasias").val("Προδιαγραφές Εντύπου και Εναλλακτικού διδακτικού υλικού κατάλληλου για εκπαίδευση από απόσταση");
	}

	if (paketoValue=='ΠΕ3'&& ergopraksi=='4'){	
		$("#titlospaketoyergasias").val("Δημιουργία εντύπου διδακτικού υλικού δύο θεματικών ενοτήτων κατάλληλου για εκπαίδευση από απόσταση");
	}

	if (paketoValue=='ΠΕ4'&& ergopraksi=='4'){	
		$("#titlospaketoyergasias").val("Δημιουργία εναλλακτικού (ψηφιακού) διδακτικού υλικού δύο θεματικών ενοτήτων κατάλληλου για εκπαίδευση από απόσταση");
	}

	if (paketoValue=='ΠΕ5'&& ergopraksi=='4'){	
		$("#titlospaketoyergasias").val("Ενσωμάτωση του Εκπαιδευτικού Υλικού στην εκπαιδευτική διαδικασία, υποστήριξη της έναρξης των Θεματικών Ενοτήτων Επιχειρηματικότητας, οργάνωση, διεξαγωγή και ολοκλήρωση των μαθημάτων και Διοργάνωση 'ανοιχτών' Σεμιναρίων Ειδικής Θεματολογίας");
	}

	if (paketoValue=='ΠΕ6'&& ergopraksi=='4'){	
		$("#titlospaketoyergasias").val("Λειτουργία του Ηλεκτρονικού Συστήματος καταγραφής και υποστήριξης επωφελούμενων φοιτητών/φοιτητριών και καταγραφή φοιτητών/φοιτητριών δυνητικών δικαιούχων προγραμμάτων εκπαίδευσης επιχειρηματικότητας");
	}

	if (paketoValue=='ΠΕ7'&& ergopraksi=='4'){	
		$("#titlospaketoyergasias").val("Διάχυση αποτελεσμάτων της Μονάδας Καινοτομίας και Επιχειρηματικότητας του ΕΑΠ και Συλλογή δεδομένων από παραγωγικούς φορείς");
	}

	if (paketoValue=='ΠΕ8'&& ergopraksi=='4'){	
		$("#titlospaketoyergasias").val("Παρακολούθηση Δράσεων Επιχειρηματικότητας φοιτητών/φοιτητριών του ΕΑΠ");
	}

	if (paketoValue=='ΠΕ9'&& ergopraksi=='4'){	
		$("#titlospaketoyergasias").val("Σύνταξη ετήσιων σχεδίων δράσης-Απολογισμός Δράσεων Επιχειρηματικότητας ΕΑΠ-Αξιολόγηση Πράξης");
	}
//////////////////////ERGO MODIP/////////////////////
	
	var ergopraksi = $( "#ergopraksi").val();
	
	if (paketoValue=='ΠΕ1.1'&& ergopraksi=='5'){	
		$("#titlospaketoyergasias").val("Οργάνωση και Στελέχωση ΜΟΔΙΠ ΕΑΠ");
	}
	
	if (paketoValue=='ΠΕ1.2'&& ergopraksi=='5'){	
		$("#titlospaketoyergasias").val("Δείκτες Αξιολόγησης ΕΑΠ");
	}

	if (paketoValue=='ΠΕ1.3'&& ergopraksi=='5'){	
		$("#titlospaketoyergasias").val("Συγκέντρωση και Διαχείριση Δεδομένων Αξιολόγησης και Υποστήριξης ΟΜΕΑ");
	}

	if (paketoValue=='ΠΕ1.4'&& ergopraksi=='5'){	
		$("#titlospaketoyergasias").val("Ανάδραση με βάση τα Δεδομένα Εσωτερικής Αξιολόγησης");
	}

	if (paketoValue=='ΠΕ1.5'&& ergopraksi=='5'){	
		$("#titlospaketoyergasias").val("Δημιουργία υλικού διάχυσης αποτελεσμάτων και ενημέρωσης");
	}

	if (paketoValue=='ΠΕ1.6'&& ergopraksi=='5'){	
		$("#titlospaketoyergasias").val("Διοργάνωση ημερίδων-Δράσεις Ενημέρωσης και Ευαισθητοποίησης");
	}

	if (paketoValue=='ΠΕ1.7'&& ergopraksi=='5'){	
		$("#titlospaketoyergasias").val("Αξιολόγηση Έργου");
	}
	
}
);
