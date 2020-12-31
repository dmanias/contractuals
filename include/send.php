    <div class="container" align=center>


	
<?php

if (empty($_POST["fullname"]))

{
 die ("Το 'Ονοματεπωνυμο' είναι υποχρεωτικό πεδίο. Πηγαίνετε πίσω και δοκιμάστε ξανά." );
}

if (empty($_POST["phone"]))

{
 die ("Ο 'Αρ. Τηλεφώνου' είναι υποχρεωτικό πεδίο. Πηγαίνετε πίσω και δοκιμάστε ξανά." );
}

if (empty($_POST["email"]))

{
 die ("Το 'E-mail' είναι υποχρεωτικό πεδίο. Πηγαίνετε πίσω και δοκιμάστε ξανά." );
}


if (empty($_POST["message"]))
{
 die ("H 'Περιγραφή του προβλήματος' είναι υποχρεωτικό πεδίο. Πηγαίνετε πίσω και δοκιμάστε ξανά." );
}


?>

<?php

include("Mail.php");



$recipients = "dmanias@eap.gr";


$headers["From"] = $_POST['email'];

$headers["To"] = "dmanias@eap.gr";
$headers["MIME-Version"] = '1.0';
$headers["Content-Type"] = 'text/html;charset=utf-8';
$headers["Subject"]='Mήνυμα απο την σελίδα προβλημάτων - ΣΥΜΒΑΣΙΟΥΧΟΙ';
$mailmsg = '--Mήνυμα απο την σελίδα προβλημάτων - ΣΥΜΒΑΣΙΟΥΧΟΙ--'.'<br>'.' Όνοματεπώνυμο:'. $_POST['fullname'].'<br>'.' Τηλέφωνο:'. $_POST['phone'].'<br>'.' Ε-mail:'.$_POST['email'].'<br>'.' Σχόλια:'. $_POST['message'];

/* SMTP server name, port, user/passwd */
$smtpinfo["host"] = "mail.eap.gr";
$smtpinfo["port"] = "25";
$smtpinfo["auth"] = false;


// Function to check for spam
function checkforspam() 
{
   $problem = 'N';
   foreach ($_POST as $key => $value) {
     if (stristr($value,'Content-Type:') || stristr($value,'bcc:') || stristr($value,'cc:')) {
       $problem = 'Y';
     }
   }
  
   if ($problem == 'Y') 
   {
     return 'Y';
   } 
   else 
   {
     return 'N';
   }

}



if (checkforspam() == 'N') { 

/* Create the mail object using the Mail::factory method */
$mail_object =& Mail::factory("smtp", $smtpinfo);
/* Ok send mail */
$mail_object->send($recipients, $headers, $mailmsg);


echo 'Σας ευχαριστούμε. Θα επικοινωνήσουμε μαζί σας για την επίλυση του προβλήματος που σας παρουσιάστηκε. </p>';

}

elseif (checkforspam() == 'Y')
{
echo "<p> Το μήνυμα σας δεν εστάλει.</p>";
}

?>	  

	</div> <!---/container-->