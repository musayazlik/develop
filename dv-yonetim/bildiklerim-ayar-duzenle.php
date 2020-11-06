


<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>

<?php 

$bildiklerimsor=$db->prepare("SELECT * FROM bildiklerim_ayar_öge where bildiklerim_id=:id");
$bildiklerimsor->execute(array(
	'id' => $_GET['bildiklerim_id']
));

$bildiklerimcek=$bildiklerimsor->fetch(PDO::FETCH_ASSOC);


?>



<div class="main-container">
	<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">

		<div style="background-color: #ff5d4d; " class="pt-2 pb-2 border-radius-4 box-shadow mb-30">
			<div class="clearfix">
				<h2 class=" ml-3 text-center" style=" text-shadow: 0 3px 0 #0006; font-weight: 700; font-size: 35px; color: white;">Bildiklerim Düzenleme</h2>
			</div>
		</div>


		<div class="bg-white pd-20 mb-20 border-radius-5 box-shadow">

			<form action="kara-kutu/islemler.php" method="POST">
				<div class="form-group row">
					<label class="col-sm-12 col-md-2 col-form-label">Bildiklerim Adı</label>
					<div class="col-sm-12 col-md-10">
						<input class="form-control" type="text" name="bildiklerim_adi" value="<?php echo $bildiklerimcek ['bildiklerim_adi']; ?>">
					</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-12 col-md-2 col-form-label">Bildiklerim Değer</label>
					<div class="col-sm-12 col-md-10">
						<input class="form-control" max="100" min="0" name="bildiklerim_deger" value="<?php echo $bildiklerimcek ['bildiklerim_deger']; ?>" type="number">
					</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-12 col-md-2 col-form-label">Bildiklerim Renk</label>
					<div class="col-sm-12 col-md-10">
						<input class="form-control" name="bildiklerim_renk" value="<?php echo $bildiklerimcek ['bildiklerim_renk']; ?>" type="color">
					</div>
				</div>

				<input type="hidden" name="bildiklerim_id" value="<?php echo $bildiklerimcek ['bildiklerim_id']; ?>">

				<div class="text-center"><button name="bildiklerimduzenle" class="btn btn-outline-success ">GÜNCELLE</button></div>

			</form>

		</div>
		<?php include('footer.php'); ?>