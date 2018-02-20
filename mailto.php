<?php 
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$opstina = $_POST['opstina'];
$tipObjekta;
if ($_POST['tipobjekta'] == 'stambeni') {
	$tipObjekta = 'stambeni';
}elseif ($_POST['tipobjekta'] == 'poslovni') {

	$tipObjekta = 'poslovni';
}elseif ($_POST['tipobjekta'] == 'ekonomski') {
	$tipObjekta = 'ekonomski';
}elseif ($_POST['tipobjekta'] == 'pomocni') {
	$tipObjekta = 'pomocni';
}
$brutoPovrsina = $_POST['povrsina'];
$ranijiZahtevLeg;
if ($_POST['ranijizahtev'] == 'da') {
	$ranijiZahtevLeg = 'da';
}elseif ($_POST['ranijizahtev'] == 'ne') {

	$ranijiZahtevLeg = 'ne';
}
$drzavnoZemljiste;
if ($_POST['drzavnozemljiste'] == 'da') {
	$drzavnoZemljiste = 'da';
}elseif ($_POST['drzavnozemljiste'] == 'ne') {

	$drzavnoZemljiste = 'ne';
}
$kompletiranObjekat;
if ($_POST['kompletiranobjekat'] == 'da') {
	$kompletiranObjekat = 'da';
}elseif ($_POST['kompletiranobjekat'] == 'ne') {

	$kompletiranObjekat = 'ne';
}
$message = $_POST['message'];
$trenutakIzgranje;
if ($_POST['time'] == 'da') {
	$trenutakIzgranje = 'da';
}elseif ($_POST['time'] == 'ne') {

	$trenutakIzgranje = 'ne';
}
if ($_POST['time'] == 'empty' || $_POST['tipobjekta'] == 'empty' || $_POST['ranijizahtev'] == 'empty' || $_POST['drzavnozemljiste'] == 'empty' || $_POST['kompletiranobjekat'] == 'empty') {

	echo "Molimo Vas izaberite jednu od ponudjenih opcija";
}
$formcontent="Od: $name \n \n Telefon: $phone \n \n Opstina objekta: $opstina \n \n Tip objekta: $tipObjekta \n \n Bruto povrsina objekta: $brutoPovrsina \n \n Da li je za objekat ranije predat zahtev za legalizaciju: $ranijiZahtevLeg \n \n Da li je objekat izgrađen na državnom zemljištu: $drzavnoZemljiste \n \n Da li je objekat kompletiran: $kompletiranObjekat \n \n Opisite do koje mere: $message \n \n Da li je objekat izgrađen do juna 2015. godine: $trenutakIzgranje ";
$recipient = "a.drakulic@gmail.com";
$subject = "Legalizacija";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
if (mail($recipient, $subject, $message)){
       
          $name = $email = $message = $phone = $opstina = $tipObjekta = $brutoPovrsina = $ranijiZahtevLeg = $drzavnoZemljiste = $kompletiranObjekat = $trenutakIzgranje = '';
      }
?>

