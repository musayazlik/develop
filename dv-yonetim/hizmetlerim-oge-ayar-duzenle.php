


<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>

<?php 

$hizmetlerimsor=$db->prepare("SELECT * FROM hizmetlerim_ayar_öge where hizmetlerim_oge_id=:id");
$hizmetlerimsor->execute(array(
	'id' => $_GET['hizmetlerim_oge_id']
));

$hizmetlerimcek=$hizmetlerimsor->fetch(PDO::FETCH_ASSOC);


?>



<div class="main-container">
	<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">

		<div style="background-color: #ff5d4d; " class="pt-2 pb-2 border-radius-4 box-shadow mb-30">
			<div class="clearfix">
				<h2 class=" ml-3 text-center" style=" text-shadow: 0 3px 0 #0006; font-weight: 700; font-size: 35px; color: white;">Hizmetlerim Öge Düzenleme</h2>
			</div>
		</div>


		<div class="bg-white pd-20 mb-20 border-radius-5 box-shadow">

			<form action="kara-kutu/islemler.php" method="POST" enctype="multipart/form-data">

				<div class="row justify-content-md-center">
					<div class="col-md-8">
						<div class="text-center"><input name="hizmet-resim" class="mb-2" type="file" id="choose" multiple="multiple" /> <br></div>
						<div><h5 class="ml-4 mb-2 mr-4 text-center"><b>Yüklü Resim</b></h5></div>
						<img name="hizmetlerim_oge_resim" class="img-fluid upload-resim" src="../<?php echo $hizmetlerimcek['hizmetlerim_oge_resim']; ?>" alt="">
						<input type="hidden" name="eski_resim1" value="<?php echo $hizmetlerimcek['hizmetlerim_oge_resim']; ?>">
					</div>
				</div>

				<div class="row mt-3 justify-content-md-center">
					<div class="col-md-8">
						<div class="form-group">
							<label class="col-form-label">Hizmetlerim Başlık</label>
							<input class="form-control" type="text" name="hizmetlerim_oge_baslik" value="<?php echo $hizmetlerimcek ['hizmetlerim_oge_baslik']; ?>">
						</div>
					</div>
				</div>

				<div class="row mb-3 justify-content-md-center">
					<div class="col-md-8">
						<div class="form-group">
							<label class=" col-form-label">Hizmetlerim Metin</label>
							<textarea class="form-control" max="100" min="0" name="hizmetlerim_oge_metin" class="form-control"><?php echo $hizmetlerimcek ['hizmetlerim_oge_metin']; ?></textarea>
						</div>
					</div>
				</div>

				<input type="hidden" name="giden_id" value="<?php echo $hizmetlerimcek ['hizmetlerim_oge_id']; ?>">
				<input type="hidden" name="hizmetlerim_resimyol" value="<?php echo $hizmetlerimcek['hizmetlerim_oge_resim'] ?>">

				<div class="text-center"><button name="hizmetlerim-oge-duzenle" class="btn btn-outline-success ">GÜNCELLE</button></div>

			</form>

		</div>
		<?php include('footer.php'); ?>