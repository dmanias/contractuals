
<?php

 require_once ('libs/php-activerecord/ActiveRecord.php');

 ActiveRecord\Config::initialize(function($cfg)
 {
    $cfg->set_model_directory('models');
    $cfg->set_connections(array(
        'development' => 'mysql://contractual:contractual@localhost/contractuals?charset=utf8'));
});
?>

<?php 

$id = unserialize($_POST['contractualid']);

print_r($id);

/** Error reporting *//*
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
date_default_timezone_set('Europe/London');*/

define('EOL',(PHP_SAPI == 'cli') ? PHP_EOL : '<br />');

	require_once './libs/PHPExcel/Classes/PHPExcel.php';

	$rows=array();
	foreach ($id as &$value) {
	
	$aa=$aa+1;
	
		$contractual=Contractual::find($value);
		echo $contractual->onoma;
	
		$row = array($aa,$contractual->eponymo,$contractual->onoma,$contractual->ergopraksi,$contractual->enarksitrexoysassymvasis,$contractual->liksitrexoysassymvasis);
	
	
		array_push($rows,$row);
	

	}
	
	
	//var_dump($rows);
	
	/*
	$rows = array(
				array(1,2,3),
				array(4,5,6),
				array(7,8,9)
			);*/

	
			
	$columnNames = array('ΑΑ','ΕΠΩΝΥΜΟ', 'ΟΝΟΜΑ','ΕΡΓΟ-ΠΡΑΞΗ','ΕΝΑΡΞΗ ΤΡΕΧΟΥΣΑΣ ΣΥΜΒΑΣΗΣ','ΛΗΞΗ ΤΡΕΧΟΥΣΑΣ ΣΥΜΒΑΣΗΣ','ΔΙΑΘΕΣΙΜΟ ΠΟΣΟ','ΥΠΟΛΟΙΠΟ ΧΡΟΝΟΥ','ΠΡΟΤΑΣΗ');

	exportExcel($rows, $columnNames, 'Excel2007', 'Symvaseis_DE.xlsx');
	
	function exportExcel($rows, $columnNames, $filetype, $filename){
		ob_end_clean();
	
		if(!isset($filename)){
			$filename = "file.xlsx";
		}
		
		if(!isset($filetype)){
			$filetype = "Excel2007";
		}
	
		/** Create a new PHPExcel Object  **/   
		$objPHPExcel = new PHPExcel();

		$i = 0;
		foreach($columnNames as $column){
			$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($i, 1, $column);
			$objPHPExcel->getActiveSheet()->getColumnDimension(chr(65+$i))->setAutoSize(true);
			$i++;
		}
		
		$rowSize = sizeof($rows);
		$colSize = sizeof($columnNames);
		for($i=0; $i<$rowSize; $i++){
			
			$j=0;
			foreach($rows[$i] as $element){
				$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($j,$i+2, $element);
				$j++;
			}
		}

		$objPHPExcel->getActiveSheet()->getStyle("A1:Z1")->applyFromArray(array("font" => array( "bold" => true)));
		$objPHPExcel->getProperties()->setCreator('Δημιουργός');
		$objPHPExcel->getProperties()->setLastModifiedBy('Δημιουργός');
		$objPHPExcel->getProperties()->setTitle("");
		$objPHPExcel->getProperties()->setSubject("");
		$objPHPExcel->getProperties()->setDescription("");
		$objPHPExcel->getActiveSheet()->getPageSetup()->setRowsToRepeatAtTopByStartAndEnd(1, 1); 
		
		$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, $filetype);
		
		if($filetype=="Excel5"){
			header('Content-type: application/vnd.ms-excel');
		}
		else if($filetype=="Excel2007"){
			header('Content-type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		}
		
		header('Content-Disposition: attachment; filename="'.$filename.'"');
		$objWriter->save('php://output');
	}
?>