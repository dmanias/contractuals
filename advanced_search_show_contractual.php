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
$content='include/advanced_search_show_contractual.php';
include ('master.php');
?>