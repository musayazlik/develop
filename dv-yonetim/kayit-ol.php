<!DOCTYPE html>
<html>
<head>
	<?php include('head.php'); ?>
</head>
<body>
	<div class="login-wrap customscroll d-flex align-items-center flex-wrap justify-content-center pd-20">
		<div class="login-box bg-white box-shadow pd-30 border-radius-5">
			<img src="../images/login-img.png" alt="login" class="login-img">
			<h2 style="font-weight: 700;" class="text-center mb-30">YENİ ÜYE</h2>

			<?php if ($_GET["durum"]=="kayitbasarili") { ?>
			<div style="border-radius: 10px; background: #e74c3c;" class="bg-success"><p style="font-weight: 700; color: white; " class="m-3 p-2"><i style="color: green;" class="fa fa-check" aria-hidden="true"></i>
				<?php
				header("refresh:5;url=uye-giris.php");
				die('Kayıt başarılı bir şekilde gerçekleştirildi. 5 saniye sonra giriş sayfasına yönlendirileceksiniz.');
					?></p></div>
					<?php } elseif ($_GET["durum"]=="kayitbasarisiz") { ?>
					<div style="border-radius: 100px; background: #e74c3c;" class="bg-danger"><p style="font-weight: 700; color: white; " class="m-3 p-2"><b>HATA : </b>Kayıt Başarısız...</p></div>
					<?php } elseif ($_GET["durum"]=="mukerrerkayit") { ?>
					<div style="border-radius: 100px; background: #e74c3c;" class="bg-danger"><p style="font-weight: 700; color: white; " class="m-3 p-2"><b>HATA : </b>Mukerrer Kayıt...</p></div>
					<?php } elseif ($_GET["durum"]=="eksiksifre") { ?>
					<div style="border-radius: 100px; background: #e74c3c;" class="bg-danger"><p style="font-weight: 700; color: white; " class="m-3 p-2"><b>HATA : </b>Eksik Şifre...</p></div>
					<?php } elseif ($_GET["durum"]=="farklisifre") { ?>
					<div style="border-radius: 100px; background: #e74c3c;" class="bg-danger"><p style="font-weight: 700; color: white; " class="m-3 p-2"><b>HATA : </b>Farklı Şifre...</p></div>
					<?php } ?>
					<form action="kara-kutu/islemler.php" method="POST">
						<div class="input-group custom input-group-lg">
							<input type="text" required="" class="form-control" name="kullanici_adiSoyad" placeholder="Adınız Ve Soyadınız">
							<div class="input-group-append custom">
								<span class="input-group-text"><i class="fa fa-user" aria-hidden="true"></i></span>
							</div>
						</div>
						<div class="input-group custom input-group-lg">
							<input type="email" required="" class="form-control" name="kullanici_mail" placeholder="E-posta Adresiniz">
							<div class="input-group-append custom">
								<span class="input-group-text"><i class="fa fa-user" aria-hidden="true"></i></span>
							</div>
						</div>
						<div class="input-group custom input-group-lg">
							<input type="password" class="form-control" name="kullanici_passwordone" placeholder="Şifreniz">
							<div class="input-group-append custom">
								<span class="input-group-text"><i class="fa fa-lock"  aria-hidden="true"></i></span>
							</div>
						</div>
						<div class="input-group custom input-group-lg">
							<input type="password" class="form-control" name="kullanici_passwordtwo" placeholder="Tekrar Şifreniz">
							<div class="input-group-append custom">
								<span class="input-group-text"><i class="fa fa-lock" aria-hidden="true"></i></span>
							</div>
						</div>
						<div class="row">
							<div class="col-12">
								<div class="input-group">
									<button name="kullanicikaydet" style="font-weight: 700;" class="btn btn-outline-primary btn-lg btn-block">ÜYE OL</button>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
			<script src="vendors/scripts/script.js"></script>
		</body>
		</html>