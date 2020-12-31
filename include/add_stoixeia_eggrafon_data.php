
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

$contractual_id=$_POST['contractualid'];
$contractual=Contractual::find($contractual_id);

$eggrafo=Eggrafo::first(array('conditions' => array('contractual_id = ?', $contractual_id)));

?>



<?php

if ($eggrafo==NULL){

$eggrafo=new Eggrafo;

$eggrafo->contractual_id=$_POST['contractualid'];
$eggrafo->onoma=$_POST['onoma'];
$eggrafo->eponymo=$_POST['eponymo'];
$eggrafo->symvasioyxosseaitiatiki=$_POST['symvasioyxosseaitiatiki'];
//$eggrafo->aksonasproteraiotitassearithmo=$_POST['aksonasproteraiotitassearithmo'];
$eggrafo->epistimonikosypeythinosergoyseaitiatiki=$_POST['epistimonikosypeythinosergoyseaitiatiki'];
$eggrafo->epistimonikosypeythinosypoergoyseaitiatiki=$_POST['epistimonikosypeythinosypoergoyseaitiatiki'];
$eggrafo->lektikoypoyrgeioypaideias=$_POST['lektikoypoyrgeioypaideias'];
$eggrafo->apofasientaksisergoypraksismetropopoiisi=$_POST['apofasientaksisergoypraksismetropopoiisi'];
$eggrafo->apofasiylopoiisisypoergoymetaidiamesametropopoiisi=$_POST['apofasiylopoiisisypoergoymetaidiamesametropopoiisi'];
$eggrafo->pososimvasisolografosseaitiatiki=$_POST['pososimvasisolografosseaitiatiki'];

$eggrafo->save();

}else{

$eggrafo->onoma=$contractual->onoma;
$eggrafo->eponymo=$contractual->eponymo;
$eggrafo->symvasioyxosseaitiatiki=$_POST['symvasioyxosseaitiatiki'];
//$eggrafo->aksonasproteraiotitassearithmo=$_POST['aksonasproteraiotitassearithmo'];
$eggrafo->epistimonikosypeythinosergoyseaitiatiki=$_POST['epistimonikosypeythinosergoyseaitiatiki'];
$eggrafo->epistimonikosypeythinosypoergoyseaitiatiki=$_POST['epistimonikosypeythinosypoergoyseaitiatiki'];
$eggrafo->lektikoypoyrgeioypaideias=$_POST['lektikoypoyrgeioypaideias'];
$eggrafo->apofasientaksisergoypraksismetropopoiisi=$_POST['apofasientaksisergoypraksismetropopoiisi'];
$eggrafo->apofasiylopoiisisypoergoymetaidiamesametropopoiisi=$_POST['apofasiylopoiisisypoergoymetaidiamesametropopoiisi'];
$eggrafo->pososimvasisolografosseaitiatiki=$_POST['pososimvasisolografosseaitiatiki'];

$eggrafo->save();
}

echo "<h3 align='center'>Επιτυχής καταχώρηση στοιχείων εγγράφου για ". $_POST['eponymo']." ".$_POST['onoma']."</h3>";

?>