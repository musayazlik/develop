


<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>

<?php 

$mesajlarsor=$db->prepare("SELECT * FROM mesajlar where mesajlar_id=:id");
$mesajlarsor->execute(array(
	'id' => $_GET['mesajlar_id']
));

$mesajlarcek=$mesajlarsor->fetch(PDO::FETCH_ASSOC);


?>



<div class="main-container">
	<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">

		<div style="background-color: #ff5d4d; " class="pt-2 pb-2 border-radius-4 box-shadow mb-30">
			<div class="clearfix">
				<h2 class=" ml-3 text-center" style=" text-shadow: 0 3px 0 #0006; font-weight: 700; font-size: 35px; color: white;">mesajlar Düzenleme</h2>
			</div>
		</div>


		<div class="bg-white pd-20 mb-20 border-radius-5 box-shadow">

			<div class="form-group row">
				<label class="col-sm-12 col-md-2 col-form-label">Mesaj Sahibi</label>
				<div class="col-sm-12 col-md-10">
					<input class="form-control" type="text" value="<?php echo $mesajlarcek ['mesajlar_adi']; ?> <?php echo $mesajlarcek ['mesajlar_soyad'];  ?> ">
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-12 col-md-2 col-form-label">Mail</label>
				<div class="col-sm-12 col-md-10">
					<input type="text" class="form-control"  value="<?php echo $mesajlarcek ['mesajlar_mail']; ?>" >
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-12 col-md-2 col-form-label">Mesaj Konusu</label>
				<div class="col-sm-12 col-md-10">
					<input type="text" class="form-control"  value="<?php echo $mesajlarcek ['mesajlar_konu']; ?>" >
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-12 col-md-2 col-form-label">Mesaj Metni</label>
				<div class="col-sm-12 col-md-10">
					<textarea class="form-control"><?php echo $mesajlarcek ['mesajlar_metin']; ?></textarea>
				</div>

			</div>

			<div class="col-12 text-center"><a href="mesajlar.php"><button style="background: #e74c3c; color: white; font-weight: 700;" class="btn ">Geri Git</button></a></div>


		</div>
		<?php include('footer.php'); ?>