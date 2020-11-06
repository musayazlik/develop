		<!-- Bildiklerim Alanı Başlangıç -->

		<section id="bildiklerim">
			<div style="background: <?php echo $bildiklerimAyarcek ['bildiklerim_arkaPlanRenk']; ?>;" class="arkaplan">
				<div class="container">
					<div class="text-center mb-3">
						<h2>BİLDİKLERİM</h2>
					</div>

					<?php 
					while ($bildiklerimcek=$bildiklerimsor->fetch(PDO::FETCH_ASSOC)) { ?>



						<label style="color: <?php echo $bildiklerimAyarcek ['bildiklerim_yaziRenk']; ?>; 	border-bottom: 6px solid <?php echo $bildiklerimAyarcek ['bildiklerim_yaziBorderRenk']; ?>;"><?php echo $bildiklerimcek ['bildiklerim_adi']; ?></label>
						<div class="progress">
							<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="<?php echo $bildiklerimcek ['bildiklerim_deger']; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $bildiklerimcek ['bildiklerim_deger']; ?>%; background-color: <?php echo $bildiklerimcek ['bildiklerim_renk']; ?>">%<?php echo $bildiklerimcek ['bildiklerim_deger']; ?></div>
						</div>

					<?php } ?>

				</div>
			</div>
		</section>




		<!-- Bildiklerim Alanı Bitiş -->
