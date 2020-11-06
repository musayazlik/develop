
<?php 

// https://api.instagram.com/v1/users/self/?access_token=ACCESS-TOKEN

?>

<style>
body#anasayfa section#instagram div.container-fluid div.row nav.navbar.navbar-expand-lg div.collapse.navbar-collapse.instagram-alanı li {
	list-style-type: none;
}

body#anasayfa section#instagram div.container-fluid div.row nav.navbar div.instagram-alanı li a img {
	max-width: 100%;
	max-height: 300px;
	min-height: 300px;
	border-left: 2px solid #000;
	border-right: 2px solid #000;
}



</style>
<!-- İnstagram Alanı Başlangıç -->

<section id="instagram">
	<?php if ($instagramAyarcek['instagram_durum']==1) { ?>

		<div style="background: rgba(0,0,0,0.84);">
			<h2 style="margin: 0; padding-top: 10px;padding-bottom: 10px; font-family: 'Oswald', sans-serif;" class="text-center  text-white"><span><i class="fa fa-instagram text-white" aria-hidden="true"></i></span>
				Takip Etmeyi Unutmayın... <span><i class="fa fa-instagram text-white" aria-hidden="true"></i></span></h2>
			</div>
			<div style="padding: 0;" class="container-fluid">
				<div style="margin: 0;" class="row">
					<nav class="navbar navbar-expand-lg m-0 p-0">
						<div class="collapse navbar-collapse instagram-alanı img-fluid">
						</div>
					</nav>
				</div>
			</div>

		<?php } ?>
	</section>

	<!-- İnstagram Alanı Bitiş -->

	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>


	<script>

		$(function() {
			$.ajax({
				type: "GET",
				dataType: "jsonp",
				cache: false,
				url: "https://api.instagram.com/v1/users/<?php echo $instagramAyarcek['instagram_kul']; ?>/media/recent/?access_token=<?php echo $instagramAyarcek['instagram_access']; ?>",
				success: function(data) {
					for (var i = 0; i < 6; i++) {
						$(".instagram-alanı").append("<li><a target='_blank' href='" + data.data[i].link +"'><img  src='" + data.data[i].images.low_resolution.url +"' /></a></li>");
					}

				}
			});
		});

	</script>