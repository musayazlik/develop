		<!-- İletişim Alanı Başlangıç -->
		<style>
		#bos-alan {

			display: none;
		}

		#basari-islem {

			display: none;
		}

	</style>
	<section id="iletisim">
		<div class="arkaplan">
			<div class="container">
				<h2 style="font-weight: 800; color:white; font-size: 70px;" class="text-center mb-4 ">İLETİŞİM</h2>

				<div class="row justify-content-center">
					<div class="col-md-10">

						<div style="background: #e74c3c; font-weight: 800; border-radius: 100px;" id="bos-alan" class=" p-3 mb-2 text-center text-white">
							Form Alanlarının Hepsini Doldurmak Zorundasınız..
						</div>

						<div id="basari-islem" style="background: #2ecc71; font-weight: 800; border-radius: 100px;" class="p-3 mb-2 text-center text-white">
							
						</div>
						<form method="post" id="jquery-ekle">
							<div class="row justify-content-end">
								<div class="col-6 p-2">
									<label class="mb-2">Adınız </label>
									<input id="mesajlar_adi"  name="mesajlar_adi" type="text" class="form-control">
								</div>
								<div class="col-6 p-2">
									<label class="mb-2">Soyadınız</label>
									<input id="mesajlar_soyad" name="mesajlar_soyad" type="text" class="form-control">
								</div>
								<div class=" col-12 form-group mt-3 mb-3 p-0">
									<label for="exampleFormControlInput1">E-mail Adresiniz</label>
									<input id="mesajlar_mail" name="mesajlar_mail" type="email" class="form-control" id="exampleFormControlInput1">
								</div>
								<div class=" col-12 form-group mt-3 mb-3 p-0">
									<label for="exampleFormControlInput1">Cep Telefonunuz</label>
									<input id="mesajlar_tel"  name="mesajlar_tel" type="text" class="form-control" placeholder="">
								</div>
								<div class=" col-12 form-group mt-3 mb-3 p-0">
									<label for="exampleFormControlInput1">İletişim Konunuz</label>
									<input id="mesajlar_konu"  name="mesajlar_konu" type="text" class="form-control" >
								</div>
								<div class=" col-12 form-group mt-3 m-b-30 p-0">
									<label for="exampleFormControlTextarea1">Mesajınız</label>
									<textarea id="mesajlar_metin"  name="mesajlar_metin" class="form-control " id="exampleFormControlTextarea1" rows="10"></textarea>
								</div>
							</div>
							<input type="hidden" name="bilgiekle">
							<div class="col-12 text-center"><button type="button" id="gonder" style="font-weight: 800" class="btn btn-warning mb-5 text-white btn-lg ">GÖNDER</button></div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>


	<!-- İletişim Alanı Bitiş -->
