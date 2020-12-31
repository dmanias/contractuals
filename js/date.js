$( document ).ready(

 function myFunction(){
    var x;
    var imerominia=prompt("Παρακαλώ εισάγετε τη ημερομηνία έκδοσης βεβαίωσης");
	var arProt=prompt("Παρακαλώ εισάγετε τον αριθμό πρωτοκόλλου");
    
	if (imerominia!=null && arProt!=null){

		var html="<br> <p>Πάτρα, "+imerominia+"</p> <p>Αρ.Πρωτ. ΕΑΠ/ΕΔΕΛ/"+arProt+"</p>";
		$("#date").empty();
		$("#date").append(html);
	  
	}  else{
	
		var html="<br> <p>Πάτρα, &nbsp; &nbsp; &nbsp; &nbsp; / &nbsp; &nbsp; &nbsp; &nbsp; /&nbsp; </p> <p>Αρ.Πρωτ. ΕΑΠ/ΕΔΕΛ/  </p>";
		var html="<br> <p>Πάτρα, &nbsp;&nbsp;&nbsp;&nbsp; / &nbsp; &nbsp; &nbsp; &nbsp; /&nbsp; </p> <p>Αρ.Πρωτ. ΕΑΠ/ΕΔΕΛ/  </p>";
		$("#date").empty();
		$("#date").append(html);
   }
   }

);
 