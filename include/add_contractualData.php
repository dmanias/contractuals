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
$('.eisagogistoixeion').css('background-color', '#428bca');
$('.eisagogistoixeion a').css('color', 'white');
</script>

<?php
$contractuals = Contractual::find('all', array('conditions' => array('onoma LIKE ? AND eponymo LIKE ? AND patronymo LIKE ?',$_POST['onoma'], $_POST['eponymo'], $_POST['patronymo'])));

if ($contractuals!=NULL){
echo "

<h3 align='center'> Ο συμβασιούχος με όνομα: ".$_POST['onoma'].", επώνυμο: ".$_POST['eponymo']." και πατρώνυμο: ".$_POST['patronymo']."έχει ήδη καταχωρηθεί.</h3>"
;

exit();
}

try{


$contractual = new Contractual;
$contractual->eponymo = $_POST['eponymo'];
$contractual->onoma = $_POST['onoma'];
$contractual->patronymo = $_POST['patronymo'];
$contractual->adt = $_POST['adt'];
$contractual->afm = $_POST['afm'];
$contractual->doy = $_POST['doy'];
$contractual->mitroomisthodotoymenoy = $_POST['mitroomisthodotoymenoy'];
$contractual->anathesiergoy = $_POST['anathesiergoy'];
$contractual->katastasi = $_POST['katastasi'];
$contractual->fylo = $_POST['fylo'];
$contractual->oikogeneiakikatastasi = $_POST['oikogeneiakikatastasi'];
$contractual->stratiotikesypoxreoseis = $_POST['stratiotikesypoxreoseis'];
$contractual->imerominiagennisis = $_POST['imerominiagennisis'];
$contractual->ilikia = $_POST['ilikia'];
$contractual->onomastikieorti = $_POST['onomastikieorti'];

$contractual->odos = $_POST['odos'];
$contractual->arithmos = $_POST['arithmos'];
$contractual->tk = $_POST['tk'];
$contractual->perioxi = $_POST['perioxi'];
$contractual->katoikos = $_POST['katoikos'];
$contractual->dimos = $_POST['dimos'];

$contractual->thesi = $_POST['thesi'];
$contractual->katigoriaendiaferontos = $_POST['katigoriaendiaferontos'];
$contractual->eidikotitaendiaferontos = $_POST['eidikotitaendiaferontos'];
$contractual->katigoriafakelos = $_POST['katigoriafakelos'];
$contractual->eidikotitafakelos = $_POST['eidikotitafakelos'];
$contractual->dimosiosypallilos = $_POST['dimosiosypallilos'];

$contractual->xrisiegkatastaseon = $_POST['xrisiegkatastaseon'];
$contractual->eidosapasxolisis = $_POST['eidosapasxolisis'];
$contractual->toposapasxolisis = $_POST['toposapasxolisis'];
$contractual->xorosapasxolisis = $_POST['xorosapasxolisis'];
$contractual->dieuthynsiapasxolisis = $_POST['dieuthynsiapasxolisis'];
$contractual->emailergasias = $_POST['emailergasias'];
$contractual->tilefonoergasias = $_POST['tilefonoergasias'];
$contractual->faxergasias = $_POST['faxergasias'];
$contractual->tilefonokinito = $_POST['tilefonokinito'];
$contractual->enarksianathesisergoyeap = $_POST['enarksianathesisergoyeap'];
//$contractual->enarksianathesisergoyespa = $_POST['enarksianathesisergoyespa'];
$contractual->diadikasiaanathesisergoy = $_POST['diadikasiaanathesisergoy'];
$contractual->kormosespa = $_POST['kormosespa'];

//$contractual->aa = $_POST['aa'];
$contractual->arithmostrexousassymvasis = $_POST['arithmostrexousassymvasis'];
$contractual->imerominiaypografistrexoysassymvasis = $_POST['imerominiaypografistrexoysassymvasis'];
$contractual->aksonasproteraiotitas = $_POST['aksonasproteraiotitas'];
$contractual->titlosaksonaproteraiotitas = $_POST['titlosaksonaproteraiotitas'];
$contractual->ergopraksi = $_POST['ergopraksi'];
$contractual->misops = $_POST['misops'];
$contractual->arithmosypoergoyolografos = $_POST['arithmosypoergoyolografos'];
$contractual->arithmosypoergoy = $_POST['arithmosypoergoy'];
$contractual->titlosypoergoy = $_POST['titlosypoergoy'];
$contractual->arithmospaketoyergasias = $_POST['arithmospaketoyergasias'];
$contractual->titlospaketoyergasias = $_POST['titlospaketoyergasias'];
$contractual->apofasientaksisergoypraksis = $_POST['apofasientaksisergoypraksis'];
$contractual->apofasiylopoiisisypoergoymetaidiamesa = $_POST['apofasiylopoiisisypoergoymetaidiamesa'];
$contractual->apofaside = $_POST['apofaside'];
$contractual->apofasiedel = $_POST['apofasiedel'];
$contractual->posotrexoysassymvasisolografos = $_POST['posotrexoysassymvasisolografos'];
$contractual->posotrexoysassymvasis = $_POST['posotrexoysassymvasis'];
$contractual->diarkeiatrexoysassymvasis = $_POST['diarkeiatrexoysassymvasis'];
$contractual->enarksitrexoysassymvasis = $_POST['enarksitrexoysassymvasis'];
$contractual->liksitrexoysassymvasis = $_POST['liksitrexoysassymvasis'];
$contractual->epistimonikosypeythinosergoypraksis = $_POST['epistimonikosypeythinosergoypraksis'];
$contractual->epistimonikosypeythinosypoergoy = $_POST['epistimonikosypeythinosypoergoy'];
//$contractual->degiaypografineassymvasis = $_POST['degiaypografineassymvasis'];

$contractual->save();


}catch(Exception $e){

echo "<h3 align='center'> Απέτυχε η καταχώρηση του συμβασιούχου. Προσπαθήστε ξανά ελέγχοντας ότι όλα τα πεδία είναι σωστά. \n </h3>";


echo $e."\n";

exit();
}

echo"
<h3 align=center> Επιτυχής καταχώρηση του νέου συμβασιούχου: ".$contractual->eponymo." ".$contractual->onoma; 
 ?>

