
$( document ).ready(function() {

//Generates the captcha function   
var a = Math.ceil(Math.random() * 9)+ '';
var b = Math.ceil(Math.random() * 9)+ '';      
var c = Math.ceil(Math.random() * 9)+ ''; 
var d = Math.ceil(Math.random() * 9)+ ''; 
var e = Math.ceil(Math.random() * 9)+ ''; 
	       
var code = a + b + c + d + e;
document.getElementById("txtCaptcha").value = code;
document.getElementById("txtCaptchaDiv").innerHTML = code; 

	

function checkform(theform){
var why = "";

if(theform.fullname.value == ""){
why += "- Το πεδίο του ονόματος χρήστη είναι άδειο.\n";
 }

if(theform.id.value == ""){
why += "- Το πεδίο του αρ. μητρώου είναι άδειο.\n";
 }

if(theform.phone.value == ""){
why += "- Το πεδίο του τηλεφώνου είναι άδειο.\n";
 }
 
 if(theform.email.value == ""){
why += "- Το πεδίο του e-mail είναι άδειο.\n";
 }

  if(theform.message.value == ""){
why += "- Το πεδίο κειμένου είναι άδειο.\n";
 }
	      
if(theform.txtInput.value == ""){
why += "- Το πεδίο του κωδικού ασφαλείας είναι άδειο.\n";
 }
if(theform.txtInput.value != ""){
if(ValidCaptcha(theform.txtInput.value) == false){
	            why += "- Ο κωδικός ασφαλείας δεν ταιριάζει.\n";
	        }
	    }
	    if(why != ""){
	        alert(why);
	        return false;
	    }
	}

});	
	// Validate the Entered input against the generated security code function  
	function ValidCaptcha(){
	    var str1 = removeSpaces(document.getElementById('txtCaptcha').value);
		alert(str1);
	    var str2 = removeSpaces(document.getElementById('txtInput').value);
		alert(str2);
	    if (str1 == str2){
	        return true;   
	    }else{
			return false;
	    }
	}
	 
	// Remove the spaces from the entered and generated code
	function removeSpaces(string){
	    return string.split(' ').join('');
	}
	     



