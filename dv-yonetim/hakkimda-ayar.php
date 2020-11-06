<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>
<style>
.upload-resim {
	width: 200px;
	height: 200px !important;
}
</style>
<div class="main-container">
	<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">

		<div style="background-color: #ff5d4d; " class="pt-2 pb-2 border-radius-4 box-shadow mb-30">
			<div class="clearfix">
				<h2 class=" ml-3 text-center" style=" text-shadow: 0 3px 0 #0006; font-weight: 700; font-size: 35px; color: white;">Hakkımda Ayarları</h2>
				<small class="mt-2" style="text-shadow: 0 2px 0 #0006; font-weight: 600; font-size: 18px; color:#fff; display: block; text-align: center;"> Bu sayfadan hakkımda alanının ayarlarını yapabilirsiniz...</small>
			</div>
		</div>


		<div class=" bg-white border-radius-4 box-shadow height-100-p mb-30">
			<div style="background: #2ecc71; border-top-right-radius: 4px; border-top-left-radius: 4px;" class="clearfix mb-10 m-t-20  p-t-15 p-b-15 p-l-15 p-r-15 ">
				<div class="pull-left m-l-10">
					<h4 style="border-top-right-radius: 5px; font-weight: 700; border-bottom: 4px solid;" class="text-white p-b-3"><span class="mr-2"><i class="fa fa-cogs" aria-hidden="true"></i>
					</span>Arka Plan Resim Ayarları</h4>
				</div>
			</div>
			<div class="row">
				<div class="col-md-5 col-sm-5 col-10 m-l-20 m-r-20">
					<div class="form-group">
						<form action="kara-kutu/islemler.php" method="POST" enctype="multipart/form-data">
							<div class="text-center"><label style="color: #34495e;">1. Arka Plan Resmi</label></div>
							<div class="text-center"><input required="" name="hakkimda_arkaplan1_resim" class="mb-2" type="file" id="choose" multiple="multiple" /> <br></div>
							<div class="row text-center">
								<div class="col-md-12 p-0">
									<h5 class="ml-4 mb-2 mr-4"><b>Yüklü Resim</b></h5>
									<img name="hakkimda_arkaplan1_resim" class="img-fluid upload-resim" src="../<?php echo $hakkimdacek['hakkimda_arkaplan1_resim']; ?>" alt="">
								</div>
								<input type="hidden" name="eski_resim1" value="<?php echo $hakkimdacek['hakkimda_arkaplan1_resim']; ?>">
								<div class="col-md-12">
									<div class="text-center mt-5">
										<button name="hakkimda_arkaplan1_resim_güncelle" class="btn btn-success pt-1 pb-1 pl-5 pr-5">KAYDET</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
				<div class="col-md-5 col-sm-5 col-10 m-r-20 m-l-20">
					<div class="form-group">
						<form action="kara-kutu/islemler.php" method="POST" enctype="multipart/form-data">
							<div class="text-center"><label style="color: #34495e;">2. Arka Plan Resmi</label></div>
							<div class="text-center"><input required="" name="hakkimda_arkaplan2_resim" class="mb-2" type="file" id="choose1" multiple="multiple" /> <br></div>
							<div class="row text-center">
								<div class="col-md-12 p-0">
									<h5 class="ml-4 mb-2 mr-4"><b>Yüklü Resim</b></h5>
									<img name="hakkimda_arkaplan2_resim" class="img-fluid upload-resim" src="../<?php echo $hakkimdacek['hakkimda_arkaplan2_resim']; ?>" alt="">
								</div>
								<input type="hidden" name="eski_resim2" value="<?php echo $hakkimdacek['hakkimda_arkaplan2_resim']; ?>">
								<div class="col-md-12">
									<div class="text-center mt-5">
										<button name="hakkimda_arkaplan2_resim_güncelle" class="btn btn-success pt-1 pb-1 pl-5 pr-5">KAYDET</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<form action="kara-kutu/islemler.php" method="POST">
				<div style="background: #2ecc71;" class="clearfix mb-10 m-t-20  p-t-15 p-b-15 p-l-15 p-r-15 ">
					<div class="pull-left m-l-10">
						<h4 style="border-top-right-radius: 5px; font-weight: 700; border-bottom: 4px solid;" class="text-white p-b-3"><b>1.</b> Arka Plan Renk Ayarı</h4>
					</div>
				</div>
				<div class="row">
					<div class="col-md-5 col-sm-5 col-10 m-l-20 m-r-20">
						<div class="form-group">
							<label style="color: #34495e;">1. Renk</label>
							<input name="hakkimda_arkaplan1_renk1" type="text" class="complex-colorpicker form-control" value="<?php echo $hakkimdacek['hakkimda_arkaplan1_renk1']; ?>" />
						</div>
					</div>
					<div class="col-md-5 col-sm-5 col-10 m-r-20 m-l-20">
						<div class="form-group">
							<label  style="color: #34495e;">2. Renk</label>
							<input name="hakkimda_arkaplan1_renk2" type="text" class="complex-colorpicker form-control" value="<?php echo $hakkimdacek['hakkimda_arkaplan1_renk2']; ?>" />
						</div>
					</div>
				</div>
				<div style="background: #2ecc71;" class="clearfix mb-10 m-t-20  p-t-15 p-b-15 p-l-15 p-r-15 ">
					<div class="pull-left m-l-10">
						<h4 style="border-top-right-radius: 5px; font-weight: 700; border-bottom: 4px solid;" class="text-white p-b-3"><b>2.</b> Arka Plan Renk Ayarı</h4>
					</div>
				</div>
				<div class="row">
					<div class="col-md-5 col-sm-5 col-10 m-l-20 m-r-20">
						<div class="form-group">
							<label style="color: #34495e;">1. Renk</label>
							<input name="hakkimda_arkaplan2_renk1" type="text" class="complex-colorpicker form-control" value="<?php echo $hakkimdacek['hakkimda_arkaplan2_renk1']; ?>" />
						</div>
					</div>
					<div class="col-md-5 col-sm-5 col-10 m-r-20 m-l-20">
						<div class="form-group">
							<label  style="color: #34495e;">2. Renk</label>
							<input name="hakkimda_arkaplan2_renk2" type="text" class="complex-colorpicker form-control" value="<?php echo $hakkimdacek['hakkimda_arkaplan2_renk2']; ?>" />
						</div>
					</div>
				</div>


				<div style="background: #2ecc71;" class="clearfix  m-t-20  p-t-15 p-b-15 p-l-15 p-r-15 ">
					<div class="pull-left m-l-10">
						<h4 style="border-top-right-radius: 5px; font-weight: 700; border-bottom: 4px solid;" class="text-white p-b-3"><span class="mr-2"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
						</span>Hakkımda Alanı Metin Ayarı</h4>
					</div>
				</div>
				<div class="html-editor pd-20 box-shadow mb-30">
					<textarea name="hakkimda_metin" class="textarea_editor form-control border-radius-0"><?php echo $hakkimdacek['hakkimda_metin']; ?></textarea>
				</div>
				<div class="col-md-12">
					<div class="text-center">
						<button name="hakkimda-güncelle" class="btn btn-outline-success p-t-5 p-b-5 p-l-35 p-r-35 m-b-25"><b>KAYDET</b></button>
					</div>
				</div>
			</form>
		</div>


		<?php include('footer.php'); ?>