
<!doctype html>
<html lang="tr">
<head>
	<!-- Required meta tags -->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
	<meta name="title" content="Develop -- Kişisel Blog Scripti"/>
	<meta http-equiv="Content-Language" content="tr" />
	<meta name="robots" content="index, follow" />
	<meta name="description" content="Kişisel bir blog scriptine mi ihtiyacın var? Web yazılımcılar için tasarlanmış yüzde yüz seo uyumlu develop blog scripti." />
	<meta name="keywords" content="Blog,kişisel blog, web yazılım, develop, php,script,html, tema"/>
	<meta name="author" content="Musa Yazlık"/>
	<!-- Siteye ait içeriklerin telif hakkını kime ait oldugunu söyler. -->
	<meta name="owner" content="Musa Yazlık"/>
	<!-- Sitenin kuruluş tarihini söyler  -->
	<meta name="copyright" content="(c) 2018"/>
	<title>DEVELOP</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/jquery-ui.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/hover-min.css">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/owl.theme.green.min.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/MinClass.css">
	<link rel="stylesheet" href="responsive.css">

	<link href="https://fonts.googleapis.com/css?family=Lato:400,700,700i,900&amp;subset=latin-ext" rel="stylesheet">
	<!-- font-family: 'Lato', sans-serif; -->

	<link href="https://fonts.googleapis.com/css?family=Lobster&amp;subset=latin-ext" rel="stylesheet">
	<!-- font-family: 'Lobster', cursive; -->

	<link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans+Condensed:300,400,500,600,700" rel="stylesheet">
	<!-- font-family: 'IBM Plex Sans Condensed', sans-serif; -->

	<link href="https://fonts.googleapis.com/css?family=Oswald:400,500,600,700&amp;subset=latin-ext" rel="stylesheet">
	<!-- font-family: 'Oswald', sans-serif; -->

	<link href="https://fonts.googleapis.com/css?family=Fjalla+One&amp;subset=latin-ext" rel="stylesheet">

	<!-- font-family: 'Fjalla One', sans-serif; -->

</head>

<body id="anasayfa">

	<div class="pre">
		<div class="preload">
			<div class="loader">
				<div class="spin">

				</div>
			</div>
		</div>
	</div>

	<div id="yukaricik">
		<a href="javascript:;"><img class="hvr-float-shadow" width="80" height="80" src="images/icon/yukari.ico" alt="Yukarı Çık"></a>
	</div>

	<!-- Menü Alanı -->
	<nav  class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
		<div class="container">
			<a class="navbar-brand js-scroll-trigger" href="#ana-sayfa">
				<h1 class="">DEVELOP</h1>
			</a>
			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				<i class="fa fa-bars"></i>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav text-uppercase ml-auto">
					<li class="nav-item ">
						<a class="nav-link js-scroll-trigger" href="#hakkimda">HAKKIMDA</a>
					</li>
					<li class="nav-item ">
						<a class="nav-link js-scroll-trigger" href="#bildiklerim">BİLDİKLERİM</a>
					</li>
					<li class="nav-item ">
						<a class="nav-link js-scroll-trigger" href="#hizmetlerim">HİZMETLERİM</a>
					</li>
					<li class="nav-item ">
						<a class="nav-link js-scroll-trigger" href="#yorumlar">YORUMLAR</a>
					</li>
					<li class="nav-item  ">
						<a class="nav-link js-scroll-trigger" href="#iletisim">İLETİŞİM</a>
					</li>
					<li class="login1 nav-item text-center ml-5 mb-2 mr-3 align-self-center">
						<a style="font-weight: 700; background-color: #ff9d00; padding: 10px 20px; color: white; border-radius: 100px; box-shadow: 0 4px 1px #0000004d;" href="dv-yonetim/uye-giris.php">ÜYE GİRİŞ</a>
					</li>
					<li class="login2 nav-item text-center mb-2 align-self-center">
						<a style="font-weight: 700; background-color: #ff9d00; padding: 10px 20px; color: white; border-radius: 100px; box-shadow: 0 4px 1px #0000004d;" href="dv-yonetim/kayit-ol.php">ÜYE OL</a>
					</li>
					<li class=" login3 nav-item text-center ml-3 mb-2 align-self-center">
						<a style="font-weight: 700; background-color: #ff9d00; padding: 10px 20px; color: white; border-radius: 100px; box-shadow: 0 4px 1px #0000004d;;" href="dv-yonetim/uye-giris.php">ÜYE/GİRİŞ</a>
					</ul>
				</div>
			</div>
		</nav>

		<!-- Header Alanı -->
		<header class="masthead">
			<div class="arkaplan">
				<div class="container">
					<div class="intro-text ">
						<div class="baslik animated bounceInLeft">BEN BİR</div>
						<div class="anametin animated bounceInRight">Yazılımcıyım</div>
						<div class="social animated bounceInUp">
							<a href="<?php echo $sosyalcek ['facebook']; ?>"><img style="margin: 0 5px; border:4px solid #000000b3; border-radius:100%" class="hvr-float-shadow" width="40" height="40" src="images/social/facebook.png" alt=""></a>
							<a href="<?php echo $sosyalcek ['twitter']; ?>"><img  style="margin: 0 5px; border:4px solid #000000b3; border-radius:100%"  class="hvr-float-shadow"   width="40" height="40" src="images/social/twitter.png" alt=""></a>
							<a href="<?php echo $sosyalcek ['instagram']; ?>"><img  style="margin: 0 5px; border:4px solid #000000b3; border-radius:100%"  class="hvr-float-shadow"   width="40" height="40" src="images/social/instagram.png" alt=""></a>
							<a href="<?php echo $sosyalcek ['linkedin']; ?>"><img  style="margin: 0 5px; border:4px solid #000000b3; border-radius:100%"  class="hvr-float-shadow"   width="40" height="40" src="images/social/linkedin.png" alt=""></a>
							<a href="<?php echo $sosyalcek ['codepen']; ?>"><img  style="margin: 0 5px; border:4px solid #000000b3; border-radius:100%"  class="hvr-float-shadow"  width="40" height="40" src="images/social/3d-outlined-shape.png" alt=""></a>
							<a href="<?php echo $sosyalcek ['github']; ?>"><img  style="margin: 0 5px; border:4px solid #000000b3; border-radius:100%"  class="hvr-float-shadow"  width="40" height="40" src="images/social/github-logo.png" alt=""></a>
						</div>
					</div>
				</div>
			</div>
		</header>
