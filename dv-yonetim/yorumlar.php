<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>
<?php include 'kara-kutu/function.php'; ?>
<?php 



$yorumlarsor=$db->prepare("SELECT * FROM yorumlar INNER JOIN kullanicilar ON yorumlar.kullanici_id=kullanicilar.kullanici_id  order by  yorumlar_onay asc");
$yorumlarsor->execute();

?>

<style>
button {
	font-weight: 700 !important;
}
</style>
<div class="main-container">
	<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">

		<div style="background-color: #ff5d4d; " class="pt-2 pb-2 border-radius-4 box-shadow mb-30">
			<div class="clearfix">
				<h2 class=" ml-3 text-center" style=" text-shadow: 0 3px 0 #0006; font-weight: 700; font-size: 35px; color: white;">Yorumlar Ayarları</h2>
				<small class="mt-2" style="text-shadow: 0 2px 0 #0006; font-weight: 600; font-size: 18px; color:#fff; display: block; text-align: center;"> Bu sayfadan yorumlar alanının ayarlarını yapabilirsiniz...</small>
			</div>
		</div>


		<div style=" border-bottom: 4px solid #2ecc71;" class=" bg-white border-radius-4 box-shadow mb-30">
			<div style="background: #2ecc71;" class="clearfix pd-20">
				<div class="row">
					<div class="pull-left">
						<h3 class="text-white ml-2"><b>Yorumlar Tablosu</b></h3>
					</div>
					<?php 
					if ($_GET['durum']== 'silindi') { ?>
						<p style="background: #3498db; border-radius: 10px; " class=" text-white pt-2 pl-2 pr-2 pb-2 mb-0 ml-3 " >Yorum Başarılı Bir Şekilde Silindi</p>
					<?php } ?>
				</div>
			</div>
			<div class="table-responsive pd-20">
				<table class="table table-striped">
					<thead>
						<tr>
							<th scope="col">#</th>
							<th scope="col">Resim</th>
							<th scope="col">Yorum Sahibi</th>
							<th scope="col">Yorum Metni</th>
							<th></th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<?php 
						while ($yorumlarcek=$yorumlarsor->fetch(PDO::FETCH_ASSOC)) { ?>
							<tr>
								<?php $metin= $yorumlarcek['yorumlar_metin']; ?>
								<th scope="row"><?php echo $yorumlarcek['yorumlar_id']; ?></th>
								<th scope="row"><img width="60" height="80" src="<?php echo $yorumlarcek['kullanici_resim']; ?>" alt=""></th>
								<td><?php echo $yorumlarcek['kullanici_adiSoyad'] ?></td>
								<td><?php echo kisalt($metin,60); ?></td>
								<td><?php 

								if ($yorumlarcek['yorumlar_onay']==0) {?>

									<a href="kara-kutu/islemler.php?yorumlar_id=<?php echo $yorumlarcek['yorumlar_id'] ?>&yorumlar_one=1&yorumlar_onay=ok"><button style="background: #2ecc71; " class="btn text-white btn-xs">Onayla</button></a>


								<?php } elseif ($yorumlarcek['yorumlar_onay']==1) {?>


									<a href="kara-kutu/islemler.php?yorumlar_id=<?php echo $yorumlarcek['yorumlar_id'] ?>&yorumlar_one=0&yorumlar_onay=ok"><button style="background: #f1c40f; " class="btn text-white btn-xs">Kaldır</button></a>

									<?php } ?></td>
									<td><a href="kara-kutu/islemler.php?yorumlar_id=<?php echo $yorumlarcek['yorumlar_id']; ?>&yorumlarsil=ok"><button style="background: #FF2F47; " class="btn text-white ">Sil</button></a></td>
								</tr>

							<?php		} ?>
						</tbody>
					</table>
				</div>
			</div>
			<?php include('footer.php'); ?>
		</div>

