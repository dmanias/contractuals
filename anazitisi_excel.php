
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
	
		$row = array($aa,$contractual->eponymo,$contractual->onoma,$contractual->patronymo,$contractual->adt,$contractual->afm,$contractual->doy,$contractual->mitroomisthodotoymenoy,$contractual->anathesiergoy,$contractual->katastasi,$contractual->fylo,$contractual->oikogeneiakikatastasi,$contractual->stratiotikesypoxreoseis,$contractual->imerominiagennisis,$contractual->ilikia,$contractual->onomastikieorti,$contractual->odos,$contractual->arithmos,$contractual->tk,$contractual->perioxi,$contractual->katoikos,$contractual->dimos,$contractual->thesi,$contractual->katigoriaendiaferontos,$contractual->eidikotitaendiaferontos,$contractual->katigoriafakelos,$contractual->eidikotitafakelos,$contractual->dimosiosypallilos,$contractual->xrisiegkatastaseon,$contractual->eidosapasxolisis,$contractual->toposapasxolisis,$contractual->xorosapasxolisis,$contractual->dieuthynsiapasxolisis,$contractual->emailergasias,$contractual->tilefonoergasias,$contractual->faxergasias,$contractual->tilefonokinito,$contractual->enarksianathesisergoyeap,$contractual->enarksianathesisergoyespa,$contractual->diadikasiaanathesisergoy,$contractual->kormosespa,$contractual->arithmostrexousassymvasis,$contractual->imerominiaypografistrexoysassymvasis,$contractual->aksonasproteraiotitas,$contractual->titlosaksonaproteraiotitas,$contractual->ergopraksi,$contractual->misops,$contractual->arithmosypoergoyolografos,$contractual->arithmosypoergoy,$contractual->titlosypoergoy,$contractual->arithmospaketoyergasias,$contractual->titlospaketoyergasias,$contractual->apofasientaksisergoypraksis,$contractual->apofasiylopoiisisypoergoymetaidiamesa,$contractual->apofaside,$contractual->apofasiedel,$contractual->posotrexoysassymvasisolografos,$contractual->posotrexoysassymvasis,$contractual->diarkeiatrexoysassymvasis,$contractual->enarksitrexoysassymvasis,$contractual->liksitrexoysassymvasis,$contractual->epistimonikosypeythinosergoypraksis,$contractual->epistimonikosypeythinosypoergoy,$contractual->degiaypografineassymvasis);
	
	
		array_push($rows,$row);
	

	}
	
	
	//var_dump($rows);
	
	/*
	$rows = array(
				array(1,2,3),
				array(4,5,6),
				array(7,8,9)
			);*/

	
			
	$columnNames = array('ΑΑ','ΕΠΩΝΥΜΟ', 'ΟΝΟΜΑ', 'ΠΑΤΡΩΝΥΜΟ', 'Α.Δ.Τ.','Α.Φ.Μ.', 'Δ.Ο.Υ.','ΜΗΤΡΩΟ ΜΙΣΘΟΔΟΤΟΥΜΕΝΟΥ', 'ΑΝΑΘΕΣΗ ΕΡΓΟΥ', 'ΚΑΤΑΣΤΑΣΗ','ΦΥΛΟ','ΟΙΚΟΓΕΝΕΙΑΚΗ ΚΑΤΑΣΤΑΣΗ','ΣΤΡΑΤΙΩΤΙΚΕΣ ΥΠΟΧΡΕΩΣΕΙΣ','ΗΜΕΡΟΜΗΝΙΑ ΓΕΝΝΗΣΗΣ','ΗΛΙΚΙΑ','ΟΝΟΜΑΣΤΙΚΗ ΕΟΡΤΗ','ΟΔΟΣ','ΑΡΙΘΜΟΣ','Τ.Κ.','ΠΕΡΙΟΧΗ','ΚΑΤΟΙΚΟΣ','ΔΗΜΟΣ','ΘΕΣΗ','ΚΑΤΗΓΟΡΙΑ - ΜΕ ΒΑΣΗ ΤΗΝ ΠΡΟΣΚΛΗΣΗ ΕΚΔΗΛΩΣΗΣ ΕΝΔΙΑΦΕΡΟΝΤΟΣ','ΕΙΔΙΚΟΤΗΤΑ - ΜΕ ΒΑΣΗ ΤΗΝ ΠΡΟΣΚΛΗΣΗ ΕΚΔΗΛΩΣΗΣ ΕΝΔΙΑΦΕΡΟΝΤΟΣ','ΚΑΤΗΓΟΡΙΑ - ΜΕ ΒΑΣΗ ΤΟ ΦΑΚΕΛΟ ΥΠΟΨΗΦΙΟΤΗΤΑΣ', 'ΕΙΔΙΚΟΤΗΤΑ - ΜΕ ΒΑΣΗ ΤΟ ΦΑΚΕΛΟ ΥΠΟΨΗΦΙΟΤΗΤΑΣ','ΔΗΜΟΣΙΟΣ ΥΠΑΛΛΗΛΟΣ','ΧΡΗΣΗ ΕΓΚΑΤΑΣΤΑΣΕΩΝ','ΕΙΔΟΣ ΑΠΑΣΧΟΛΗΣΗΣ','ΤΟΠΟΣ ΑΠΑΣΧΟΛΗΣΗΣ','ΧΩΡΟΣ ΑΠΑΣΧΟΛΗΣΗΣ','ΔΙΕΥΘΥΝΣΗ ΑΠΑΣΧΟΛΗΣΗΣ', 'EMAIL ΕΡΓΑΣΙΑΣ', 'ΤΗΛΕΦΩΝΟ ΕΡΓΑΣΙΑΣ', 'FAX ΕΡΓΑΣΙΑΣ','ΤΗΛΕΦΩΝΟ ΚΙΝΗΤΟ', 'ΕΝΑΡΞΗ ΑΝΑΘΕΣΗΣ ΕΡΓΟΥ ΣΤΟ Ε.Α.Π.','ΕΝΑΡΞΗ ΑΝΑΘΕΣΗΣ ΕΡΓΟΥ ΣΤΟ ΕΣΠΑ','ΔΙΑΔΙΚΑΣΙΑ ΑΝΑΘΕΣΗΣ ΕΡΓΟΥ ΣΤΟ ΕΣΠΑ - ΒΑΣΕΙ ΟΠΟΙΑΣ ΕΚΛΕΓΕΙ','ΚΟΡΜΟΣ ΕΣΠΑ - ΑΤΟΜΑ ΠΟΥ ΕΙΧΑΝ ΣΥΜΒΑΣΗ ΜΕ ΤΟ ΕΑΠ ΠΡΙΝ ΤΟ ΕΣΠΑ','ΑΡΙΘΜΟΣ ΤΡΕΧΟΥΣΑΣ ΣΥΜΒΑΣΗΣ - ΔΕΝ ΠΕΡΙΛΑΜΒΑΝΟΝΤΑΙ ΧΩΡΙΣΤΑ ΟΙ ΤΡΟΠΟΠΟΙΗΤΙΚΕΣ','ΗΜΕΡΟΜΗΝΙΑ ΥΠΟΓΡΑΦΗΣ ΤΡΕΧΟΥΣΑΣ ΣΥΜΒΑΣΗΣ','ΑΞΟΝΑΣ ΠΡΟΤΕΡΑΙΟΤΗΤΑΣ','ΤΙΤΛΟΣ ΑΞΟΝΑ ΠΡΟΤΕΡΑΙΟΤΗΤΑΣ','ΕΡΓΟ-ΠΡΑΞΗ','MIS-ΟΠΣ','ΑΡΙΘΜΟΣ ΠΑΚΕΤΟΥ ΕΡΓΑΣΙΑΣ','ΤΙΤΛΟΣ ΠΑΚΕΤΟΥ ΕΡΓΑΣΙΑΣ','ΑΠΟΦΑΣΗ ΕΝΤΑΞΗΣ ΕΡΓΟΥ-ΠΡΑΞΗΣ','ΑΠΟΦΑΣΗ ΥΛΟΠΟΙΗΣΗΣ ΥΠΟΕΡΓΟΥ ΜΕ ΤΑ ΙΔΙΑ ΜΕΣΑ', 'ΑΠΟΦΑΣΗ ΔΕ', 'ΑΠΟΦΑΣΗ ΕΔΕΛ', 'ΠΟΣΟ ΤΡΕΧΟΥΣΑΣ ΣΥΜΒΑΣΗΣ ΟΛΟΓΡΑΦΩΣ','ΠΟΣΟ ΤΡΕΧΟΥΣΑΣ ΣΥΜΒΑΣΗΣ','ΔΙΑΡΚΕΙΑ ΤΡΕΧΟΥΣΑΣ ΣΥΜΒΑΣΗΣ ΣΕ ΜΗΝΕΣ','ΕΝΑΡΞΗ ΤΡΕΧΟΥΣΑΣ ΣΥΜΒΑΣΗΣ','ΛΗΞΗ ΤΡΕΧΟΥΣΑΣ ΣΥΜΒΑΣΗΣ','ΕΠΙΣΤΗΜΟΝΙΚΟΣ ΥΠΕΥΘΥΝΟΣ ΕΡΓΟΥ-ΠΡΑΞΗΣ','ΕΠΙΣΤΗΜΟΝΙΚΟΣ ΥΠΕΥΘΥΝΟΣ ΥΠΟΕΡΓΟΥ');

	exportExcel($rows, $columnNames, 'Excel2007', 'contractuals_search_results.xlsx');
	
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