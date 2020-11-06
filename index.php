<?php



ob_start();
session_start();
include 'dv-yonetim/kara-kutu/baglan.php';
//Belirli veriyi seçme işlemi
$hakkimdasor=$db->prepare("SELECT * FROM hakkimda_ayar where hakkimda_id=:id");
$hakkimdasor->execute(array(
	'id' => 1
));
$hakkimdacek=$hakkimdasor->fetch(PDO::FETCH_ASSOC);

$bildiklerimsor=$db->prepare("SELECT * FROM bildiklerim_ayar_öge");
$bildiklerimsor->execute();

$bildiklerimAyarsor=$db->prepare("SELECT * FROM bildiklerim_ayar");
$bildiklerimAyarsor->execute();

$bildiklerimAyarcek=$bildiklerimAyarsor->fetch(PDO::FETCH_ASSOC);

$hizmetlerimsor=$db->prepare("SELECT * FROM hizmetlerim_ayar_öge");
$hizmetlerimsor->execute();

$firmalarsor=$db->prepare("SELECT * FROM firmalar");
$firmalarsor->execute();

$yorumlarsor=$db->prepare("SELECT * FROM yorumlar INNER JOIN kullanicilar ON yorumlar.kullanici_id=kullanicilar.kullanici_id");
$yorumlarsor->execute();

$kullanicisor=$db->prepare("SELECT * FROM kullanicilar");
$kullanicisor->execute();

$kullanicicek=$kullanicisor->fetch(PDO::FETCH_ASSOC);

$instagramAyarsor=$db->prepare("SELECT * FROM instagram_ayar where instagram_id=:id");
$instagramAyarsor->execute(array(
	'id' => 1
));
$say=$instagramAyarsor->rowCount();
$instagramAyarcek=$instagramAyarsor->fetch(PDO::FETCH_ASSOC);

$sosyalsor=$db->prepare("SELECT * FROM sosyal where sosyal_id=:id");
$sosyalsor->execute(array(
	'id' => 1
));
$say=$sosyalsor->rowCount();
$sosyalcek=$sosyalsor->fetch(PDO::FETCH_ASSOC);





include 'dv-yonetim/kara-kutu/function.php';
include 'header.php'; 
include 'hakkimda.php'; 
include 'bildiklerim.php'; 
include 'hizmetlerim.php'; 
include 'yorumlar.php'; 
include 'firmalar.php';
include 'instagram-alan.php'; 
include 'iletisim.php'; 
include 'footer.php'; 

?>
