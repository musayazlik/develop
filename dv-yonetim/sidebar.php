	<div class="left-side-bar">
		<div class="brand-logo">
			<a href="index.php">
				<img src="vendors/images/deskapp-logo.png" alt="">
			</a>
		</div>
		<div class="menu-block customscroll">
			<div style="background: #34495e;" class="text-center pt-2 pb-2"><p style="font-weight: 700; font-size: 20px;" class="m-0 text-white">MENÜLER</p></div>
			<div class="sidebar-menu pt-0">
				<ul id="accordion-menu">
					<?php 

					if ($kullanicicek['kullanici_yetki']== 1) { ?>

						<li>
							<a href="index.php" class="dropdown-toggle no-arrow">
								<span class="fa fa-calendar-o"></span><span class="mtext">Ana Sayfa</span>
							</a>
						</li>
					</ul>
					<li>
						<a href="hakkimda-ayar.php" class="dropdown-toggle no-arrow">
							<span class="fa fa-calendar-o"></span><span class="mtext">Hakkımda Ayarları</span>
						</a>
					</li>
					<li>
						<a href="bildiklerim-ayar.php" class="dropdown-toggle no-arrow">
							<span class="fa fa-calendar-o"></span><span class="mtext">Bildiklerim Ayarları</span>
						</a>
					</li>
					<li>
						<a href="hizmetlerim-ayar.php" class="dropdown-toggle no-arrow">
							<span class="fa fa-calendar-o"></span><span class="mtext">Hizmetlerim Ayarları</span>
						</a>
					</li>
					<li>
						<a href="yorumlar.php" class="dropdown-toggle no-arrow">
							<span class="fa fa-calendar-o"></span><span class="mtext">Yorumlar</span>
						</a>
					</li>
					<li>
						<a href="firmalar-ayar.php" class="dropdown-toggle no-arrow">
							<span class="fa fa-calendar-o"></span><span class="mtext">Firmalar </span>
						</a>
					</li>
					<li>
						<a href="instagram-ayar.php" class="dropdown-toggle no-arrow">
							<span class="fa fa-calendar-o"></span><span class="mtext">İnstagram Ayarları</span>
						</a>
					</li>
					<li>
						<a href="kullanici-ayar.php" class="dropdown-toggle no-arrow">
							<span class="fa fa-calendar-o"></span><span class="mtext">Kullanıcı Ayarları</span>
						</a>
					</li>

					<li>
						<a href="sosyal-ayar.php" class="dropdown-toggle no-arrow">
							<span class="fa fa-calendar-o"></span><span class="mtext">Sosyal Medya Ayarları</span>
						</a>
					</li>

					<li>
						<a href="mesajlar.php" class="dropdown-toggle no-arrow">
							<div class="row">
								<span class="fa fa-calendar-o"></span>
								<span class="mtext m-l-17">Mesajlar</span>
								<?php if ($okunmadısay >= 1) { ?>
									<p style="background: #e74c3c; color: white; padding: 2px 10px 2px 10px; border-radius: 100px;" class="m-l-30 mb-0"><?php echo $okunmadısay ?></p>
								<?php	} ?>
							</div>
						</a>
					</li>

				<?php } else { ?>


					<li>
						<a href="hesap-bilgilerim.php" class="dropdown-toggle no-arrow">
							<span class="fa fa-calendar-o"></span><span class="mtext">Hesap Bilgilerim</span>
						</a>
					</li>
					<li>
						<a href="mesaj-gonder.php" class="dropdown-toggle no-arrow">
							<span class="fa fa-calendar-o"></span><span class="mtext">Mesaj Gönder</span>
						</a>
					</li>

					<li>
						<a href="yorum-gonder.php" class="dropdown-toggle no-arrow">
							<span class="fa fa-calendar-o"></span><span class="mtext">Yorum Gönder</span>
						</a>
					</li>


				<?php		} ?>


			</ul>
		</div>
	</div>
</div>