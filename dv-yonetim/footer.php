	<div class="footer-wrap bg-white pd-20 mb-20 border-radius-5 box-shadow">
		Develop -- Bilgisayar Programcılığı Bitirme Projesi -- Yapımcı : <a style="color: #FF264F;" href="https://musayazlik.site" target="_blank"><b>Musa Yazlık</b></a>
	</div>
</div>
</div>
<script src="vendors/scripts/script.js"></script>
<script src="src/plugins/highcharts-6.0.7/code/highcharts.js"></script>
<script src="src/plugins/highcharts-6.0.7/code/highcharts-more.js"></script>
<script src="src/plugins/jquery-asColor/dist/jquery-asColor.js"></script>
<script src="src/plugins/jquery-asGradient/dist/jquery-asGradient.js"></script>
<script src="src/plugins/jquery-asColorPicker/dist/jquery-asColorPicker.js"></script>
<script>
	$(".colorpicker").asColorPicker();
	$(".complex-colorpicker").asColorPicker({
		mode: 'complex'
	});
	$(".gradient-colorpicker").asColorPicker({
		mode: 'gradient'
	});
</script>
<script>
	// Resim Yükleme Kodları

	function readImage(file) {
		var reader = new FileReader();
		var image  = new Image();

		reader.readAsDataURL(file);  
		reader.onload = function(_file) {
			image.src = _file.target.result; 
			image.onload = function() {

				$('#uploadPreview').append('<img class="upload-resim" src="' + this.src + '"> ' + '<br>');
			};

		};
	}
</script>

<script>
	// Resim Yükleme Kodları

	function readImage(file) {
		var reader1 = new FileReader();
		var image1  = new Image();

		reader.readAsDataURL(file);  
		reader.onload = function(_file) {
			image.src = _file.target.result; 
			image.onload = function() {

				$('#uploadPreview1').append('<img class="upload-resim" src="' + this.src + '"> ' + '<br>');
			};

		};
	}
</script>

</body>
</html>