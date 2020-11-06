<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>
<div class="main-container">
	<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">

		<div style="background-color: #ff5d4d; " class="pt-2 pb-2 border-radius-4 box-shadow mb-30">
			<div class="clearfix">
				<h2 class=" ml-3 text-center" style=" text-shadow: 0 3px 0 #0006; font-weight: 700; font-size: 35px; color: white;">Sosyal Medya Ayarları</h2>
				<small class="mt-2" style="text-shadow: 0 2px 0 #0006; font-weight: 600; font-size: 18px; color:#fff; display: block; text-align: center;"> Bu sayfada site içi sosyal medya ayarlarını yapabilirsiniz...</small>
			</div>
		</div>


		<div class="bg-white pd-20 mb-20 border-radius-5 box-shadow">

			<div class="get m-b-30">
				<?php 
				if ($_GET['durum']== 'ok') { ?>
					<p style="background: #2ecc71; border-radius: 10px; " class=" text-white text-center pt-2 pl-2 pr-2 pb-2 mb-0 ml-3 mb-5 " >Güncelleme Başarılı Bir Şekilde Gerçekleşti...</p>
				<?php } ?>
			</div>

			<form action="kara-kutu/islemler.php" method="POST">

				<div class="form-group row">
					<label class="col-sm-12 col-md-2 col-form-label">Facebook</label>
					<div class="col-sm-12 col-md-10">
						<input class="form-control" type="text" name="facebook" value="<?php echo $sosyalcek ['facebook']; ?> ">
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-12 col-md-2 col-form-label">İnstagram</label>
					<div class="col-sm-12 col-md-10">
						<input class="form-control" type="text" name="instagram" value="<?php echo $sosyalcek ['instagram']; ?> ">
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-12 col-md-2 col-form-label">Codepen</label>
					<div class="col-sm-12 col-md-10">
						<input class="form-control" type="text" name="codepen" value="<?php echo $sosyalcek ['codepen']; ?>  ">
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-12 col-md-2 col-form-label">Twitter</label>
					<div class="col-sm-12 col-md-10">
						<input class="form-control" type="text" name="twitter" value="<?php echo $sosyalcek ['twitter']; ?> ">
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-12 col-md-2 col-form-label">Linkedin</label>
					<div class="col-sm-12 col-md-10">
						<input class="form-control" type="text" name="linkedin" value="<?php echo $sosyalcek ['linkedin']; ?>  ">
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-12 col-md-2 col-form-label">Github</label>
					<div class="col-sm-12 col-md-10">
						<input class="form-control" type="text" name="github" value="<?php echo $sosyalcek ['github']; ?>  ">
					</div>
				</div>
				<div class="col-12 text-center"><button name="sosyal-guncelle" style="background: #e74c3c; color: white; font-weight: 700;" class="btn mr-5 ml-5 mb-2 mt-2 ">Güncelle</button></div>
			</form>


		</div>
		<?php include('footer.php'); ?>
