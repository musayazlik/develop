


<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>


<div class="main-container">
	<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">

		<div style="background-color: #ff5d4d; " class="pt-2 pb-2 border-radius-4 box-shadow mb-30">
			<div class="clearfix">
				<h2 class=" ml-3 text-center" style=" text-shadow: 0 3px 0 #0006; font-weight: 700; font-size: 35px; color: white;">Mesaj Gönder</h2>
			</div>
		</div>


		<div class="bg-white pd-20 mb-20 border-radius-5 box-shadow">

			<form action="kara-kutu/islemler.php" method="POST">
				<div class="form-group row">
					<label class="col-sm-12 col-md-2 col-form-label">Adınız Ve Soyadınız</label>
					<div class="col-sm-12 col-md-10">
						<input class="form-control" type="text" value="<?php echo $kullanicicek ['kullanici_adiSoyad']; ?> ">
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-12 col-md-2 col-form-label">Mail</label>
					<div class="col-sm-12 col-md-10">
						<input type="text" class="form-control"  value="<?php echo $kullanicicek ['kullanici_mail']; ?>" >
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-12 col-md-2 col-form-label">Mesaj Konusu</label>
					<div class="col-sm-12 col-md-10">
						<input type="text" class="form-control"  placeholder="Mesaj Konunuzu Griniz..." >
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-12 col-md-2 col-form-label">Mesaj Metni</label>
					<div class="col-sm-12 col-md-10">
						<textarea class="form-control"></textarea>
					</div>
				</div>

				<div class="col-12 text-center"><button name="mesaj-gonder" style="background: #2ecc71; color: white; font-weight: 700;" class="btn ">Gönder</button></div>

			</form>


		</div>
		<?php include('footer.php'); ?>