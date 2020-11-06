<!DOCTYPE html>
<html>
<head>
	<?php include('head.php'); ?>
</head>
<body>

	<div class="login-wrap customscroll d-flex align-items-center flex-wrap justify-content-center pd-20">
		<div class="login-box bg-white box-shadow pd-30 border-radius-5">
			<img src="../images/login-img.png" alt="login" class="login-img">
			<h2 style="font-weight: 700;" class="text-center mb-10">ÜYE GİRİŞİ</h2>
			<?php 

			if ($_GET['durum']== 'yanlıs-parola-veya-kullaniciadi') { ?>
				<p style="background: #e74c3c; border-radius: 100px; " class=" text-white pt-2 pl-3 pr-2 pb-2 " >Kullanıcı Adınız Veya Şifreniz Yanlış</p>
			<?php } ?>

			<form action="kara-kutu/islemler.php" method="POST">
				<div class="input-group custom input-group-lg">
					<input type="email" required="" class="form-control" name="kullanici_mail" placeholder="E-mail Adresiniz">
					<div class="input-group-append custom">
						<span class="input-group-text"><i class="fa fa-user" aria-hidden="true"></i></span>
					</div>
				</div>
				<div class="input-group custom input-group-lg">
					<input type="password" required="" class="form-control" name="kullanici_password" placeholder="Şifreniz">
					<div class="input-group-append custom">
						<span class="input-group-text"><i class="fa fa-lock" aria-hidden="true"></i></span>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6">
						<div class="input-group">
							<!--
								use code for form submit
								<input class="btn btn-outline-primary btn-lg btn-block" type="submit" value="Sign In">
							-->
							<button name="kullanici-giris" style="font-weight: 700;" class="btn btn-outline-primary btn-lg btn-block">GİRİŞ YAP</button>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="input-group">
							<!--
								use code for form submit
								<input class="btn btn-outline-primary btn-lg btn-block" type="submit" value="Sign In">
							-->
							<a style="font-weight: 700;" class="btn btn-outline-danger btn-lg btn-block" href="kayit-ol.php">KAYIT OL</a>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
	<script src="vendors/scripts/script.js"></script>
</body>
</html>