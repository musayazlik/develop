<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>
<?php 


$mesajlarsor=$db->prepare("SELECT * FROM mesajlar ");
$mesajlarsor->execute();




?>

<style>
div.main-container div.pd-ltr-20 div#mCSB_2 div#mCSB_2_container div.bg-white div.pd-20 table.table tbody tr td {
	font-weight: 500;
	font-size: 13px;
}
</style>

<div class="main-container">
	<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">

		<div style="background-color: #ff5d4d; " class="pt-2 pb-2 border-radius-4 box-shadow mb-30">
			<div class="clearfix">
				<h2 class=" ml-3 text-center" style=" text-shadow: 0 3px 0 #0006; font-weight: 700; font-size: 35px; color: white;">Gelen Mesajlar</h2>
				<small class="mt-2" style="text-shadow: 0 2px 0 #0006; font-weight: 600; font-size: 18px; color:#fff; display: block; text-align: center;"> Bu sayfadan iletişim alanından size gelen mesajları görebilirsiniz...</small>
			</div>
		</div>


		<div style=" border-bottom: 4px solid #2ecc71;" class=" bg-white border-radius-4 box-shadow mb-30">
			<div style="background: #2ecc71;" class="clearfix pd-20">
				<div class="pull-left">
					<h3 class="text-white"><b>Mesajlar Tablosu</b></h3>
				</div>
			</div>
			<div class="table-responsive pd-20">
				<table class="table table-striped">
					<thead>
						<tr>
							<th scope="col">#</th>
							<th scope="col">Adı</th>
							<th scope="col">Soyadı</th>
							<th scope="col">Mail</th>
							<th scope="col">Telefon</th>
							<th scope="col">Mesaj Konu</th>
							<th scope="col">Mesaj</th>
							<th></th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<?php 
						while ($mesajlarcek=$mesajlarsor->fetch(PDO::FETCH_ASSOC)) { ?>
							<tr>
								<td><?php echo $mesajlarcek['mesajlar_id']; ?></td>
								<td><?php echo $mesajlarcek['mesajlar_adi']; ?></td>
								<td><?php echo $mesajlarcek['mesajlar_soyad']; ?></td>
								<td><?php echo $mesajlarcek['mesajlar_mail']; ?></td>
								<td><?php echo $mesajlarcek['mesajlar_tel']; ?></td>
								<td><?php echo $mesajlarcek['mesajlar_konu']; ?></td>
								<td><?php echo $mesajlarcek['mesajlar_metin']; ?></td>
								<td width="10"><a href="mesajlar-oku.php?mesajlar_id=<?php echo $mesajlarcek['mesajlar_id']; ?>"><button style="background: #2ecc71; " class="btn text-white btn-sm ">Oku</button></a></td>
								<td><a href="kara-kutu/islemler.php?mesajlar_id=<?php echo $mesajlarcek['mesajlar_id']; ?>&mesajlarsil=ok"><button style="background: #FF2F47; " class="btn text-white ">Sil</button></a></td>
							</tr>

						<?php		} ?>
					</tbody>
				</table>
			</div>

		</div>
		<?php include('footer.php'); ?>
	</div>

