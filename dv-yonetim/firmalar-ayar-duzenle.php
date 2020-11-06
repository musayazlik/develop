


<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>

<?php 

$firmalarsor=$db->prepare("SELECT * FROM firmalar where firmalar_id=:id");
$firmalarsor->execute(array(
	'id' => $_GET['firmalar_id']
));

$firmalarcek=$firmalarsor->fetch(PDO::FETCH_ASSOC);


?>



<div class="main-container">
	<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">

		<div style="background-color: #ff5d4d; " class="pt-2 pb-2 border-radius-4 box-shadow mb-30">
			<div class="clearfix">
				<h2 class=" ml-3 text-center" style=" text-shadow: 0 3px 0 #0006; font-weight: 700; font-size: 35px; color: white;">Firmalar Düzenleme</h2>
			</div>
		</div>


		<div class="bg-white pd-20 mb-20 border-radius-5 box-shadow">

			<form action="kara-kutu/islemler.php" method="POST">
				<div class="form-group row">
					<label class="col-sm-12 col-md-2 col-form-label">Firma İsmi</label>
					<div class="col-sm-12 col-md-10">
						<input class="form-control" type="text" name="firmalar_isim" value="<?php echo $firmalarcek ['firmalar_isim']; ?>">
					</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-12 col-md-2 col-form-label">Firma Logosu</label>
					<div class="col-sm-12 col-md-10">
						<input type="text" class="form-control" name="firmalar_logo" value="<?php echo $firmalarcek ['firmalar_logo']; ?>" >
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-12 col-md-2 col-form-label">Firma URL</label>
					<div class="col-sm-12 col-md-10">
						<input type="text" class="form-control" name="firmalar_url" value="<?php echo $firmalarcek ['firmalar_url']; ?>" >
					</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-12 col-md-2 col-form-label">Firma Durum</label>
					<div class="col-sm-12 col-md-10">
						<select class="selectpicker form-control" name="firmalar_durum" data-style="btn-outline-primary">
							<option value="1" <?php echo $firmalarcek['firmalar_durum'] == '1' ? 'selected=""' : ''; ?>>Aktif</option>
							<option value="0" <?php  if ($firmalarcek['firmalar_durum']==0) { echo 'selected=""'; } ?>>Pasif</option>
						</select>
					</div>
				</div>

				<input type="hidden" name="firmalar_id" value="<?php echo $firmalarcek ['firmalar_id']; ?>">

				<div class="text-center"><button name="firmalarduzenle" class="btn btn-outline-success ">GÜNCELLE</button></div>

			</form>

		</div>
		<?php include('footer.php'); ?>