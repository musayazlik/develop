<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>

<?php 

$kullanicisor=$db->prepare("SELECT * FROM kullanicilar ");
$kullanicisor->execute();


?>


<div class="main-container">
	<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">

		<div style="background-color: #ff5d4d; " class="pt-2 pb-2 border-radius-4 box-shadow mb-30">
			<div class="clearfix">
				<h2 class=" ml-3 text-center" style=" text-shadow: 0 3px 0 #0006; font-weight: 700; font-size: 35px; color: white;">Kullanıcılar</h2>
				<small class="mt-2" style="text-shadow: 0 2px 0 #0006; font-weight: 600; font-size: 18px; color:#fff; display: block; text-align: center;"> Bu sayfada kullanıcı ayarlarını yapabilirsiniz...</small>
			</div>
		</div>


		<div class="bg-white pd-20 mb-20 border-radius-5 box-shadow">

			<div style="background: #2ecc71;" class="clearfix pd-20">
				<div class="row">
					<div class="pull-left">
						<h3 class="text-white ml-2"><b>Kullanıcılar Tablosu</b></h3>
					</div>
					<?php 
					if ($_GET['durum']== 'silindi') { ?>
						<p style="background: #e74c3c; border-radius: 5px; " class=" text-white text-center pt-2 pl-2 pr-2 pb-2 mb-0 ml-3 mb-5 " >Kullanıcı Başarılı Bir Şekilde Silindi...</p>
					<?php } ?>
				</div>
			</div>

			<div class="table-responsive pd-20">
				<table class="table table-striped">
					<thead>
						<tr>
							<th scope="col">#</th>
							<th scope="col">K. Adı</th>
							<th scope="col">K. Ünvan</th>
							<th scope="col">K. Mail</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<?php 
						while ($kullanicicek=$kullanicisor->fetch(PDO::FETCH_ASSOC)) { ?>
							<tr>
								<th scope="row"><?php echo $kullanicicek['kullanici_id']; ?></th>
								<td><?php echo $kullanicicek['kullanici_adiSoyad']; ?></td>
								<td><?php echo $kullanicicek['kullanici_unvan']; ?></td>
								<td><?php echo $kullanicicek['kullanici_mail']; ?></td>
								<td><a href="kara-kutu/islemler.php?kullanici_id=<?php echo $kullanicicek['kullanici_id']; ?>&kullanicisil=ok"><button style="background: #FF2F47; " class="btn text-white ">Sil</button></a></td>
							</tr>

						<?php		} ?>
					</tbody>
				</table>
			</div>

		</div>
		<?php include('footer.php'); ?>