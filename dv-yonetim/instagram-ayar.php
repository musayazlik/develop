<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>
<div class="main-container">
	<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">

		<div style="background-color: #ff5d4d; " class="pt-2 pb-2 border-radius-4 box-shadow mb-30">
			<div class="clearfix">
				<h2 class=" ml-3 text-center" style=" text-shadow: 0 3px 0 #0006; font-weight: 700; font-size: 35px; color: white;">İnstagram Ayarları</h2>
				<small class="mt-2" style="text-shadow: 0 2px 0 #0006; font-weight: 600; font-size: 18px; color:#fff; display: block; text-align: center;"> Bu sayfada site içinde bulunan instagram alanı ayarlarını yapabilirsiniz...</small>
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
				<div class="col-md-8 col-sm-8 col-10 m-l-20 m-b-30 m-t-30 m-r-20">
					<div class="form-group">
						<label style="color: #34495e;">İnstagram Access Token</label>
						<input type="text" name="instagram_access" class=" form-control" value="<?php echo $instagramAyarcek['instagram_access']; ?>" />
					</div>
					<p style="font-weight: 400; font-size: 15px; "><b style="font-weight: 700; color: #e74c3c; " >UYARI : </b>İnstagram access token kodunuza <a href="http://instagram.pixelunion.net/">BURAYA</a> tıklayarak sahip olabilirsiniz</p>
				</div>
				<div class="col-md-8 col-sm-8 col-10 m-l-20 m-b-30 m-t-30 m-r-20">
					<div class="form-group">
						<label style="color: #34495e;">İnstagram Kullanıcı İd</label>
						<input type="text" name="instagram_kul" class=" form-control" value="<?php echo $instagramAyarcek['instagram_kul']; ?>" />
					</div>
					<p style="font-weight: 400; font-size: 15px; "><b style="font-weight: 700; color: #e74c3c; " >UYARI : </b>İnstagram kullanıcı id'niz İnstagram access token kodunuzun ilk 10 hanesidir. </p>
				</div>

				<div  class="col-md-3 col-sm-3 col-3 m-l-30 m-b-30 m-t-30 m-r-20">
					<div class="form-group row">
						<label style="color: #34495e;">İnstagram Durum</label>
						<select class="selectpicker form-control" name="instagram_durum" data-style="btn-outline-primary">
							<option value="1" <?php echo $instagramAyarcek['instagram_durum'] == '1' ? 'selected=""' : ''; ?>>Aktif</option>
							<option value="0" <?php  if ($instagramAyarcek['instagram_durum']==0) { echo 'selected=""'; } ?>>Pasif</option>
						</select>
					</div>
				</div>


				<button name="instagram-ayar-güncelle" style="background: #2ecc71; font-weight: 800; font-size: 18px; " class="btn text-white m-b-30 pt-1 pb-1 pl-5 pr-5 m-l-33">Güncelle</button>
			</form>


		</div>
		<?php include('footer.php'); ?>
