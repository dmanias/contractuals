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

$delete_flag=$_POST['deletecontractual'];
$contractual_id=$_POST['contractualid'];


if (isset($_POST['deletecontractual'])&& $delete_flag=='TRUE'){

$contractual=Contractual::find($contractual_id);
$contractual->delete();

echo "
<h3 align=center> Επιτυχής διαγραφή του συμβασιούχου: ".$contractual->eponymo." ".$contractual->onoma; 
;


}else{

$contractual=Contractual::find($contractual_id);


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

echo"

<h3 align=center> Επιτυχής επικαιροποίηση του συμβασιούχου: ".$contractual->eponymo." ".$contractual->onoma; 



}
