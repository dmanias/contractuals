<?php 

  //--------------------------------------------------------------------------
  // Example php script for fetching data from mysql database
  //--------------------------------------------------------------------------
  $host = "localhost";
  $user = "contractual";
  $pass = "contractual";

  $databaseName = "contractuals";
  $tableName = "contractuals";

  //--------------------------------------------------------------------------
  // 1) Connect to mysql database
  //--------------------------------------------------------------------------
  $con = mysqli_connect($host,$user,$pass, $databaseName);
	mysqli_set_charset( $con ,"utf8" );
	

if(isset($_POST['name'])){
	
	$name=explode(" ",$_POST['name']);

	
  //--------------------------------------------------------------------------
  // 2) Query database for data
  //--------------------------------------------------------------------------
  $result = mysqli_query($con, "SELECT ergopraksi FROM $tableName WHERE lastname='$name[0]'");          //query
  $array = mysqli_fetch_row($result);                          //fetch result    

  //--------------------------------------------------------------------------
  // 3) echo result as json 
  //--------------------------------------------------------------------------
  echo json_encode($array);

  //echo $array;
  
  }
  
?>