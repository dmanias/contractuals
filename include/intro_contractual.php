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
$('.arxiki').css('background-color', '#428bca');
$('.arxiki a').css('color', 'white');
</script>

<?php

$username=$_POST['username'];
$password=md5($_POST['password']);
  
$user_password=User::first(array('conditions' => array('password=?', $password)));

$user_name=User::first(array('conditions' => array('username=?', $username)));


////////////////ELEGXOI////////
 
if ($_POST['username']=='' && $_SESSION['sess_username']=='')
	{
		print '<div style="text-align:center"><p>Το όνομα χρήστη (Username) είναι κενό</p>
		<p>Για επιστροφή στην αρχική σελίδα πατήστε <a class="btn btn-primary btn-lg" href="index.php">Aρχική</a></p></div>';
		exit(0);
	}


if ($_POST['password']=='' && $_SESSION['sess_password']=='')
	{
		print '<div style="text-align:center"><p>Ο κωδικός πρόσβασης (Password) είναι κενός</p>
		<p>Για επιστροφή στην αρχική σελίδα πατήστε <a class="btn btn-primary btn-lg" href="index.php">Aρχική</a></p></div>';
		exit(0);
	}

if ( $user_name==NULL && $_SESSION['sess_username']==NULL)
	{
		print '<div style="text-align:center"><p>Το όνομα χρήστη (Username) δεν αντιστοιχεί σε κάποιον καταχωρημένο χρήστη</p>
		<p>Για επιστροφή στην αρχική σελίδα πατήστε <a class="btn btn-primary btn-lg" href="index.php">Aρχική</a></p></div>';
		exit(0);
	}	
	

if ( $user_password==NULL && $_SESSION['sess_password']==NULL)
	{
		print '<div style="text-align:center"><p>Ο Κωδικός Πρόσβασης(Password) δεν αντιστοιχεί σε κάποιον καταχωρημένο κωδικό</p>
		<p>Για επιστροφή στην αρχική σελίδα πατήστε <a class="btn btn-primary btn-lg" href="index.php">Aρχική</a></p></div>';
		exit(0);
	}
	


if ( $_POST['username']!=$user_password->username)
	{
		print '<div style="text-align:center"><p class="red">Το όνομα χρήστη που πληκτρολογήσατε δεν αντιστοιχεί στον Κωδικό Πρόσβασης(Password).</p><p> Για ενημέρωση σχετικά με τα στοιχεία σύνδεσης σας εποκοινωνήστε με το <Span class="red"><strong>helpdesk[at]eap.gr </span></strong>.</p>
		<p>Για επιστροφή στην αρχική σελίδα πατήστε <a class="btn btn-primary btn-lg" href="index.php">Aρχική</a></p></div>';
		exit(0);
	}	
?>	

<?php /////////////////////SESSION///////////

if ($_SESSION['sess_username']==''||$_SESSION['sess_password']==''){

	$_SESSION['sess_username'] = $username;
	$_SESSION['sess_password'] = $password;
	session_write_close();
	
}	
	?>



<?php

echo"
<div class='container text-justify'  style='font-size:15px'>

Γεια σου Κατερίνα, στις ομορφιές σου σήμερα. 
<br>Σε καλωσορίζω στην «Εφαρμογή Διαχείρισης Συμβασιούχων». 

<br> Εδώ μπορείς να εκτελέσεις όλες τις λειτουργίες που χρειάζεσαι…
<hr>
<strong>Εισαγωγή Στοιχείων:</strong> εισάγεις εξ αρχής με μικρογράμματη γραφή τα στοιχεία κάθε νέου συμβασιούχου [καταχώρηση]

<br><strong>Προβολή Στοιχείων:</strong> προβάλεις τα ήδη καταχωρημένα στοιχεία κάθε συμβασιούχου
<br><strong>Επεξεργασία Στοιχείων:</strong> επεξεργάζεσαι ήδη καταχωρημένα στοιχεία κάθε συμβασιούχου [επικαιροποίηση/διαγραφή] 
<br><strong>Αναζήτηση Στοιχείων:</strong> αναζητάς ήδη καταχωρημένα στοιχεία για κάθε συμβασιούχο [αναζήτηση => εξαγωγή σε αρχείο Excel 2007]

<hr>

<strong>Έκδοση Εγγράφων:</strong> (α) συμπληρώνεις στοιχεία που είναι μεν καταχωρημένα αλλά αλλάζουν κατά τη σύνταξη του εγγράφου [στοιχεία έκδοσης] και (β) εκτυπώνεις τα έγγραφα [βεβαίωση ΕΣΠΑ/σύμβαση ΕΣΠΑ]
<br><strong>Επικαιροποίηση Πεδίων:</strong> προσθέτεις/τροποποιείς/διαγράφεις επιλογές ήδη αποθηκευμένων πεδίων που είναι εμφανείς στην καρτέλα Εισαγωγή Στοιχείων [προσθήκη]

<hr>

<strong>Ειδοποιήσεις:</strong> (α) γνωρίζεις ποιοι συμβασιούχοι εορτάζουν σήμερα για να τους στείλεις ευχές [αποστολή e-mail] και (β) γνωρίζεις ποιων συμβασιούχων η σύμβαση λήγει σε δυο μήνες για να προωθήσεις τα σχετικά στοιχεία στη συνεδρίαση της Διοικούσας Επιτροπής αυτού του μήνα [εξαγωγή σε αρχείο Excel 2007=> αποθήκευση]

<hr> 
 
<strong>Επικοινωνία:</strong> έχεις τη δυνατότητα επικοινωνίας με τον τεχνικό της εφαρμογής προκειμένου να σε βοηθήσει σε προβλήματα τεχνικής φύσεως [αποστολή e-mail]

<hr> 

<strong>Αποσύνδεση:</strong> βγαίνεις από την εφαρμογή :)</div>
";

?>