<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>
<?php include 'kara-kutu/function.php'; ?>
<?php 


$hizmetlerimsor=$db->prepare("SELECT * FROM hizmetlerim_ayar_öge");
$hizmetlerimsor->execute();

?>
<div class="main-container">
	<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">

		<div style="background-color: #ff5d4d; " class="pt-2 pb-2 border-radius-4 box-shadow mb-30">
			<div class="clearfix">
				<h2 class=" ml-3 text-center" style=" text-shadow: 0 3px 0 #0006; font-weight: 700; font-size: 35px; color: white;">Hizmetlerim Ayarları</h2>
				<small class="mt-2" style="text-shadow: 0 2px 0 #0006; font-weight: 600; font-size: 18px; color:#fff; display: block; text-align: center;"> Bu sayfadan hizmetlerim alanının ayarlarını yapabilirsiniz...</small>
			</div>
		</div>


		<div style=" border-bottom: 4px solid #2ecc71;" class=" bg-white border-radius-4 box-shadow mb-30">
			<div style="background: #2ecc71;" class="clearfix pd-20">
				<div class="row">
					<div class="pull-left">
						<h3 class="text-white ml-2"><b>Hizmetlerim Tablosu</b></h3>
					</div>
					<?php 
					if ($_GET['durum']== 'ok') { ?>
						<p style="background: #3498db; border-radius: 10px; " class=" text-white pt-2 pl-2 pr-2 pb-2 mb-0 ml-3 " >Güncelleme Başarılı Bir Şekilde Gerçekleşti...</p>
					<?php } ?>
				</div>
			</div>
			<div class="table-responsive pd-20">
				<table class="table table-striped">
					<thead>
						<tr>
							<th scope="col">#</th>
							<th scope="col">Başlık</th>
							<th scope="col">Metin</th>
							<th></th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<?php 
						while ($hizmetlerimcek=$hizmetlerimsor->fetch(PDO::FETCH_ASSOC)) { ?>
							<tr>
								<?php $metin= $hizmetlerimcek['hizmetlerim_oge_metin']; ?>
								<th scope="row"><?php echo $hizmetlerimcek['hizmetlerim_oge_id']; ?></th>
								<td><?php echo $hizmetlerimcek['hizmetlerim_oge_baslik']; ?></td>
								<td><?php echo kisalt($metin,60); ?></td>
								<td><a href="hizmetlerim-oge-ayar-duzenle.php?hizmetlerim_oge_id=<?php echo $hizmetlerimcek['hizmetlerim_oge_id']; ?>"><button style="background: #2ecc71; " class="btn text-white ">Düzenle</button></a></td>
								<td><a href="hizmetlerim-oge-duzenle.php?hizmetlerim_oge_id=<?php echo $hizmetlerimcek['hizmetlerim_oge_id']; ?>"><button style="background: #FF2F47; " class="btn text-white ">Sil</button></a></td>
							</tr>

						<?php		} ?>
					</tbody>
				</table>
			</div>

			<div style="background: #2ecc71;" class="clearfix pd-20">
				<div class="pull-left">
					<h4 class="text-white"><b>Hizmetlerim Diğer Ayarları</b></h4>
				</div>
			</div>
			<form action="kara-kutu/islemler.php" method="POST" enctype="multipart/form-data">
				<div class="col-md-8 col-sm-8 col-10 m-l-20 m-b-30 m-t-30 m-r-20">
					<input  name="hizmetlerim_resim" class="mb-2" type="file" id="choose" multiple="multiple" /> <br>
					<div class="row ">
						<div class="col-md-5 p-0">
							<h5 class="ml-4 mb-2 mr-4"><b>Yüklü Resim</b></h5>
							<img name="hizmetlerim_resim" class="img-fluid upload-resim ml-3" src="<?php echo $hizmetlerimAyarcek['hizmetlerim_resim']; ?>" alt="">
						</div>
						<input type="hidden" name="eski_hizmetResim" value="<?php echo $hizmetlerimcek['hizmetlerim_resim']; ?>">
					</div>
				</div>
				<div class="col-md-8 col-sm-8 col-10 m-l-20 m-b-30 m-t-30 m-r-20">
					<div class="form-group">
						<label style="color: #34495e;">Arka Plan Renk</label>
						<input type="text" name="hizmetlerim_renk" class="gradient-colorpicker form-control" value="<?php echo $hizmetlerimAyarcek['hizmetlerim_renk']; ?>" />
					</div>
				</div>
				<div class="col-md-8 col-sm-8 col-10 m-l-20 m-b-30 m-t-30 m-r-20">
					<div class="form-group">
						<label style="color: #34495e;">Başlık Bornder Renk</label>
						<input type="text" name="hizmetlerim_baslik_renk" class="gradient-colorpicker form-control" value="<?php echo $hizmetlerimAyarcek['hizmetlerim_baslik_renk']; ?>" />
					</div>
				</div>
				<div class="col-md-8 col-sm-8 col-10 m-l-20 m-b-30 m-t-30 m-r-20">
					<div class="form-group">
						<label style="color: #34495e;">Başlık Bornder Renk</label>
						<input type="text" name="hizmetlerim_baslik_border_renk" class="gradient-colorpicker form-control" value="<?php echo $hizmetlerimAyarcek['hizmetlerim_baslik_border_renk']; ?>" />
					</div>
				</div>
				<button name="hizmetlerim-ayar-güncelle" style="background: #2ecc71; font-weight: 800; font-size: 18px; " class="btn text-white m-b-30 pt-1 pb-1 pl-5 pr-5 m-l-33">Güncelle</button>
			</form>
		</div>
		<?php include('footer.php'); ?>
	</div>

