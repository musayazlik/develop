<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>

<?php 

$firmalarsor=$db->prepare("SELECT * FROM firmalar ");
$firmalarsor->execute();

?>

<style>
div.main-container div.pd-ltr-20 div#mCSB_2 div#mCSB_2_container div.bg-white div.clearfix.pd-20 div.pull-right a button.btn {
	background: white;
	color: #2ecc71;
	font-weight: 800;
}
 div.main-container div.pd-ltr-20 div#mCSB_2 div#mCSB_2_container div.bg-white div.clearfix.pd-20 div.pull-right a button.btn:hover {
	background: #e74c3c !important;
	color: white;
	border-color: #e74c3c;

}
</style>

<div class="main-container">
	<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">

		<div style="background-color: #ff5d4d; " class="pt-2 pb-2 border-radius-4 box-shadow mb-30">
			<div class="clearfix">
				<h2 class=" ml-3 text-center" style=" text-shadow: 0 3px 0 #0006; font-weight: 700; font-size: 35px; color: white;">Firmalar</h2>
				<small class="mt-2" style="text-shadow: 0 2px 0 #0006; font-weight: 600; font-size: 18px; color:#fff; display: block; text-align: center;"> Bu sayfada firmalar alanı ayarlarını yapabilirsiniz...</small>
			</div>
		</div>


		<div style=" border-bottom: 4px solid #2ecc71;" class=" bg-white border-radius-4 box-shadow mb-30">
			<div style="background: #2ecc71;" class="clearfix pd-20">
				<div class="pull-left">
					<h3 class="text-white"><b>Firmalar Tablosu</b></h3>
				</div>
				<div class="pull-right">
				  <a href="firmalar-yeni-ekle.php"><button style="background: white;" class="btn">Yeni Ekle</button></a>
				</div>
			</div>
			<div class="table-responsive pd-20">
				<table class="table table-striped">
					<thead>
						<tr>
							<th scope="col">#</th>
							<th scope="col">Firma Logosu</th>
							<th scope="col">Firma İsmi</th>
							<th scope="col">Durum</th>
							<th></th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<?php 
						while ($firmalarcek=$firmalarsor->fetch(PDO::FETCH_ASSOC)) { ?>
							<tr>
								<th scope="row"><?php echo $firmalarcek['firmalar_id']; ?></th>
								<th  scope="row"><img style="max-height: 60px; max-width: 60px;" src="<?php echo $firmalarcek['firmalar_logo']; ?>" alt="<?php echo $firmalarcek['firmalar_isim']; ?>"></th>
								<td><?php echo $firmalarcek['firmalar_isim']; ?></td>
								<td><?php if ($firmalarcek['firmalar_durum']==0) {?>
									<button disabled="" style="background: #e74c3c; " class="btn text-white ">Pasif</button>
								<?php	} else { ?>

									<button disabled="" style="background: #2ecc71; " class="btn text-white ">Aktif</button>

									<?php	} ?></td>
									<td width="15"><a href="firmalar-ayar-duzenle.php?firmalar_id=<?php echo $firmalarcek['firmalar_id']; ?>"><button style="background: #2ecc71; " class="btn text-white ">Düzenle</button></a></td>
									<td width="15"><a href="firmalar-ayar-duzenle.php?firmalar_id=<?php echo $firmalarcek['firmalar_id']; ?>"><button style="background: #e74c3c; " class="btn text-white ">Sil</button></a></td>
								</tr>

							<?php		} ?>
						</tbody>
					</table>
				</div>
			</div>
			<?php include('footer.php'); ?>
