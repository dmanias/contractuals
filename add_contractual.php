<?php
session_start();

//Check whether the session variable SESS_MEMBER_ID is present or not
if(!isset($_SESSION['sess_username']) || (trim($_SESSION['sess_username']) == '')) {
	header("location: index.php");
	exit();
}
?>


<?php
$menu='include/menu.php';
$content='include/add_contractualForm.php';
include('master.php');
?>


 
