		<!-- Hizmetlerim Alanı Başlangıç -->

		<?php 


		$hizmetlerimAyarsor=$db->prepare("SELECT * FROM hizmetlerim_ayar where hizmetlerim_id=:id");
		$hizmetlerimAyarsor->execute(array(
			'id' => 1
		));
		$say=$hizmetlerimAyarsor->rowCount();
		$hizmetlerimAyarcek=$hizmetlerimAyarsor->fetch(PDO::FETCH_ASSOC);


		?>

		<section style="background: url(dv-yonetim/<?php echo $hizmetlerimAyarcek['hizmetlerim_resim']; ?>) no-repeat center center fixed;" id="hizmetlerim">
			<div style="background: <?php echo $hizmetlerimAyarcek['hizmetlerim_renk']; ?> ;" class="arkaplan">
				<div class="container-fluid">
					<div class="row justify-content-center">
						<div class="col-12 text-center">
							<h2 style="border-bottom: 6px solid <?php echo $hizmetlerimAyarcek['hizmetlerim_baslik_border_renk'] ?>; color: <?php echo $hizmetlerimAyarcek['hizmetlerim_baslik_renk'] ?> !important;" class="m-b-60">HİZMETLERİM</h2>
						</div>

						<?php 
						while ($hizmetlerimcek=$hizmetlerimsor->fetch(PDO::FETCH_ASSOC)) { ?>


							<div class="col-12  col-md-4 col-lg-4 col-xl-4">
								<div class="card mx-auto hvr-grow-shadow ">
									<img class="card-img-top" height="275" src="<?php echo $hizmetlerimcek['hizmetlerim_oge_resim']; ?>" alt="Card image cap">
									<div class="card-body">
										<h5 class="card-title text-center"><?php echo $hizmetlerimcek['hizmetlerim_oge_baslik']; ?></h5>
										<hr>
										<p><?php echo $hizmetlerimcek['hizmetlerim_oge_metin']; ?></p>
										<div class="button text-center">
											<a style=" background: #2ecc71" href="#" class="btn mt-4">Fiyat İçin İletişime Geçin</a>
										</div>
									</div>
								</div>
							</div>

						<?php } ?>

					</div>
				</div>
			</div>
		</section>

		<!-- Hizmetlerim Alanı Bitiş -->