<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>
<?php 


$bildiklerimsor=$db->prepare("SELECT * FROM bildiklerim_ayar_öge ");
$bildiklerimsor->execute();

$bildiklerimAyarsor=$db->prepare("SELECT * FROM bildiklerim_ayar where bildiklerimAyar_id=:id ");
$bildiklerimAyarsor->execute(array(
'id' => 1
));



$bildiklerimAyarcek=$bildiklerimAyarsor->fetch(PDO::FETCH_ASSOC);


?>
<div class="main-container">
	<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">

		<div style="background-color: #ff5d4d; " class="pt-2 pb-2 border-radius-4 box-shadow mb-30">
			<div class="clearfix">
				<h2 class=" ml-3 text-center" style=" text-shadow: 0 3px 0 #0006; font-weight: 700; font-size: 35px; color: white;">Bildiklerim Ayarları</h2>
				<small class="mt-2" style="text-shadow: 0 2px 0 #0006; font-weight: 600; font-size: 18px; color:#fff; display: block; text-align: center;"> Bu sayfadan bildiklerim alanının ayarlarını yapabilirsiniz...</small>
			</div>
		</div>


		<div style=" border-bottom: 4px solid #2ecc71;" class=" bg-white border-radius-4 box-shadow mb-30">
			<div style="background: #2ecc71;" class="clearfix pd-20">
				<div class="pull-left">
					<h3 class="text-white"><b>Bildiklerim Tablosu</b></h3>
				</div>
			</div>
			<div class="table-responsive pd-20">
				<table class="table table-striped">
					<thead>
						<tr>
							<th scope="col">#</th>
							<th scope="col">Adı</th>
							<th scope="col">Renk</th>
							<th scope="col">Değer</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<?php 
						while ($bildiklerimcek=$bildiklerimsor->fetch(PDO::FETCH_ASSOC)) { ?>
								<tr>
									<th scope="row"><?php echo $bildiklerimcek['bildiklerim_id']; ?></th>
									<td><?php echo $bildiklerimcek['bildiklerim_adi']; ?></td>
									<td><?php echo $bildiklerimcek['bildiklerim_renk']; ?></td>
									<td><?php echo $bildiklerimcek['bildiklerim_deger']; ?></td>
									<td><a href="bildiklerim-ayar-duzenle.php?bildiklerim_id=<?php echo $bildiklerimcek['bildiklerim_id']; ?>"><button style="background: #2ecc71; " class="btn text-white ">Düzenle</button></a></td>
								</tr>

								<?php		} ?>
							</tbody>
						</table>
					</div>

					<div style="background: #2ecc71;" class="clearfix pd-20">
						<div class="pull-left">
							<h4 class="text-white"><b>Bildiklerim Alanı Renk Ayarları</b></h4>
						</div>
					</div>
					<form action="kara-kutu/islemler.php" method="POST">
						<div class="col-md-8 col-sm-8 col-10 m-l-20 m-b-30 m-t-30 m-r-20">
							<div class="form-group">
								<label style="color: #34495e;">Arka Plan Renk</label>
								<input type="text" name="bildiklerim_arkaPlanRenk" class="gradient-colorpicker form-control" value="<?php echo $bildiklerimAyarcek['bildiklerim_arkaPlanRenk']; ?>" />
							</div>
						</div>
						<div class="col-md-8 col-sm-8 col-10 m-l-20 m-b-30 m-t-30 m-r-20">
							<div class="form-group">
								<label style="color: #34495e;">Yazı Renk</label>
								<input type="text" name="bildiklerim_yaziRenk" class="gradient-colorpicker form-control" value="<?php echo $bildiklerimAyarcek['bildiklerim_yaziRenk']; ?>" />
							</div>
						</div>
						<div class="col-md-8 col-sm-8 col-10 m-l-20 m-b-30 m-t-30 m-r-20">
							<div class="form-group">
								<label style="color: #34495e;">Yazı Border Renk</label>
								<input type="text" name="bildiklerim_yaziBorderRenk" class="gradient-colorpicker form-control" value="<?php echo $bildiklerimAyarcek['bildiklerim_yaziBorderRenk']; ?>" />
							</div>
						</div>
						<button name="bildiklerim-ayar-güncelle" style="background: #2ecc71; font-weight: 800; font-size: 18px; " class="btn text-white m-b-30 pt-1 pb-1 pl-5 pr-5 m-l-33">Güncelle</button>
					</form>
				</div>
				<?php include('footer.php'); ?>
			</div>

