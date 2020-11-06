
<?php
ob_start();
session_start();
include 'kara-kutu/baglan.php';

$kullanicisor=$db->prepare("SELECT * FROM kullanicilar where kullanici_mail=:mail");
$kullanicisor->execute(array(
	'mail' => $_SESSION['kullanici_mail']
));
$say=$kullanicisor->rowCount();
$kullanicicek=$kullanicisor->fetch(PDO::FETCH_ASSOC);

if ($say==0) {

	Header("Location:uye-giris.php?durum=izinsiz");
	exit;

}


$hizmetlerimAyarsor=$db->prepare("SELECT * FROM hizmetlerim_ayar where hizmetlerim_id=:id");
$hizmetlerimAyarsor->execute(array(
	'id' => 1
));
$say=$hizmetlerimAyarsor->rowCount();
$hizmetlerimAyarcek=$hizmetlerimAyarsor->fetch(PDO::FETCH_ASSOC);


$hakkimdasor=$db->prepare("SELECT * FROM hakkimda_ayar where hakkimda_id=:id");
$hakkimdasor->execute(array(
	'id' => 1
));
$say=$hakkimdasor->rowCount();
$hakkimdacek=$hakkimdasor->fetch(PDO::FETCH_ASSOC);


$mesajlarsay = $db->prepare("SELECT COUNT(*) FROM mesajlar where mesajlar_durum=:durum");
$mesajlarsay->execute(array(

	'durum' => 0

));
$okunmadısay = $mesajlarsay->fetchColumn();



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


?>




<!DOCTYPE html>
<html>
<head>
	<?php include('head.php'); ?>
</head>
<body>


	<div class="pre-loader"></div>
	<div class="header clearfix">
		<div class="header-right">

			<div class="brand-logo">
				<a href="index.php">
					<img src="vendors/images/logo.png" alt="" class="mobile-logo">
				</a>
			</div>

			<div class="menu-icon">
				<span></span>
				<span></span>
				<span></span>
				<span></span>
			</div>

			<div class="user-info-dropdown">
				<div class="dropdown">
					<a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
						<span class="user-icon"><i class="fa fa-user-o"></i></span>
						<span class="user-name"><?php echo $kullanicicek['kullanici_adiSoyad']; ?></span>
					</a>
					<div class="dropdown-menu dropdown-menu-right">
						<a style="background: #FF3A3A; color: white; font-weight: 600;" class="dropdown-item" href="guvenli-cikis.php"><i class="fa fa-sign-out" aria-hidden="true"></i>Güvenli Çıkış</a>
					</div>
				</div>
			</div>
		</div>
	</div>