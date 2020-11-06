		<!-- Footer Alanı Başlangıç -->

		<footer id="footer">
			<div class="arkaplan">
				<div class="container">
					<div class="row">
						<div class="col-md-7 align-self-center">
							<p class="mt-2">© 2018 -- DEVELOP -- TÜM HAKLARI SAKLIDIR</p>
						</div>
						<div class="col-md-5 align-self-center text-center">
							<div class="social">
								<a class="hvr-float-shadow" href="<?php echo $sosyalcek ['facebook']; ?>">
									<img width="30" height="30" src="images/icon2/facebook-logo-button.png" alt="facebook icon">
								</a>
								<a class="hvr-float-shadow" href="<?php echo $sosyalcek ['twitter']; ?>">
									<img width="30" height="30" src="images/icon2/twitter.png" alt="twitter icon">
								</a>
								<a class="hvr-float-shadow" href="<?php echo $sosyalcek ['codepen']; ?>">
									<img width="30" height="30" src="images/icon2/codepen.png" alt="codepen icon">
								</a>
								<a class="hvr-float-shadow" href="<?php echo $sosyalcek ['github']; ?>">
									<img width="30" height="30" src="images/icon2/github-logo.png" alt="github icon">
								</a>
								<a class="hvr-float-shadow" href="<?php echo $sosyalcek ['linkedin']; ?>">
									<img width="30" height="30" src="images/icon2/linkedin-button.png" alt="linkedin icon">
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>


		<!-- Footer Alanı Bitiş -->

		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery-ui.js"></script>
		<script>
			$(function(){



				$("#gonder").click(function(){

					if ($("#iletisimler_adi").val()=="" || $("#iletisimler_soyad").val()=="" || $("#iletisimler_mail").val()=="" || $("#iletisimler_tel").val()=="" || $("#iletisimler_konu").val()=="" || $("#iletisimler_metin").val()=="" ) {


						$("#bos-alan").fadeIn(2000);

						event.preventDefault();

					} else {			

						$.ajax({

							type:"post",
							url:"dv-yonetim/kara-kutu/islemler.php",
							data:$("#jquery-ekle").serialize(),

							success:function(cevap) {

								$("#basari-islem").fadeIn(1000).text(cevap).delay(3000).fadeOut(1000);

								$("#mesajlar_adi").val("");
								$("#mesajlar_soyad").val("");
								$("#mesajlar_mail").val("");
								$("#mesajlar_tel").val("");
								$("#mesajlar_konu").val("");
								$("#mesajlar_metin").val("");


							}

						})

					}

				});

			});
		</script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js "></script>
		<script src="js/owl.carousel.min.js "></script>
		<script src="https://use.fontawesome.com/0ed828c8b3.js"></script>
		<script src="js/style.js "></script>
		<script src="js/agency.js "></script>
		<script>
			$(document).ready(function(){
				$('#yorumlar').owlCarousel({
					margin:10,
					autoplay:false,
					responsive:{
						0:{
							items:1
						},
						600:{
							items:3
						},
						1000:{
							items:5
						}
					}
				})
			});
		</script>

		<script>
			$(document).ready(function(){
				$('.owl-carousel').owlCarousel({
					loop:true,
					margin:10,
					autoplay:false,
					nav:false,
					responsive:{
						0:{
							items:1
						},
						600:{
							items:2
						},
						1000:{
							items:3
						},
						1400:{
							items:4
						}
					}
				})
			});
		</script>

		<script>
			$('#yorumlar').owlCarousel({
				loop:true,
				margin:10,
				autoplay:true,
				autoplayTimeout:3000,
				nav:false,
				responsive:{
					300:{
						items:1
					},
					550:{
						items:2
					},
					800:{
						items:3
					},
					1000:{
						items:4
					},
					1500:{
						items:5
					}
				}
			})
		</script>

	</body>

	</html>