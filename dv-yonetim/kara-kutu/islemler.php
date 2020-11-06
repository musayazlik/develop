<?php

ob_start();
session_start();

include 'baglan.php';

// Kullanıcı Ve Admin Giriş Paneli Kodları

if (isset($_POST['kullanici-giris'])) {

	$kullanici_mail=$_POST['kullanici_mail'];
	$kullanici_password=sha1(md5($_POST['kullanici_password']));

	$kullanicisor=$db->prepare("SELECT * FROM kullanicilar where kullanici_mail=:mail and kullanici_password=:password");
	$kullanicisor->execute(array(
		'mail' => $kullanici_mail,
		'password' => $kullanici_password
	));

	$say=$kullanicisor->rowCount();

	if ($say==1) {

		$_SESSION['kullanici_mail']=$kullanici_mail;
		header("Location:../index.php");
		exit;

	} else {

		header("Location:../uye-giris.php?durum=yanlıs-parola-veya-kullaniciadi");

	}
	
}


// Yeni Üye Kayıt Paneli Kodları

if (isset($_POST['kullanicikaydet'])) {

	
	echo $kullanici_adiSoyad=htmlspecialchars($_POST['kullanici_adiSoyad']); echo "<br>";
	echo $kullanici_mail=htmlspecialchars($_POST['kullanici_mail']); echo "<br>";

	echo $kullanici_passwordone=trim($_POST['kullanici_passwordone']); echo "<br>";
	echo $kullanici_passwordtwo=trim($_POST['kullanici_passwordtwo']); echo "<br>";



	if ($kullanici_passwordone==$kullanici_passwordtwo) {


		if (strlen($kullanici_passwordone)>=6) {
			
// Başlangıç

			$kullanicisor=$db->prepare("select * from kullanicilar where kullanici_mail=:mail");
			$kullanicisor->execute(array(
				'mail' => $kullanici_mail
			));

			//dönen satır sayısını belirtir
			$say=$kullanicisor->rowCount();



			if ($say==0) {

				//md5 fonksiyonu şifreyi md5 şifreli hale getirir.
				$password=sha1(md5($kullanici_passwordone));


			//Kullanıcı kayıt işlemi yapılıyor...
				$kullanicikaydet=$db->prepare("INSERT INTO kullanicilar SET
					kullanici_adiSoyad=:kullanici_adiSoyad,
					kullanici_mail=:kullanici_mail,
					kullanici_password=:kullanici_password
					");
				$insert=$kullanicikaydet->execute(array(
					'kullanici_adiSoyad' => $kullanici_adiSoyad,
					'kullanici_mail' => $kullanici_mail,
					'kullanici_password' => $password
				));

				if ($insert) {


					header("Location:../kayit-ol.php?durum=kayitbasarili");


				//Header("Location:../production/genel-ayarlar.php?durum=ok");

				} else {


					header("Location:../kayit-ol.php?durum=kayitbasarisiz");
				}

			} else {

				header("Location:../kayit-ol.php?durum=mukerrerkayit");


			}

		// Bitiş

		} else {

			header("Location:../kayit-ol.php?durum=eksiksifre");

		}

	} else {

		header("Location:../kayit-ol.php?durum=farklisifre");
	}
	
}


// Hakkimda Arkaplan 1 Resim Düzenleme

if (isset($_POST['hakkimda_arkaplan1_resim_güncelle'])) {

	if ($_FILES['hakkimda_arkaplan1_resim']['size']>5242880) {
		header("Location:../hakkimda-ayar.php?durum=dosyabuyuk");
		exit;
	}

	$izinli_uzantılar=array('jpg','png');

	$ext=strtolower(substr($_FILES['hakkimda_arkaplan1_resim']["name"],strpos($_FILES['hakkimda_arkaplan1_resim']["name"],'.')+1));

	if (in_array($ext,$izinli_uzantılar) === false) {
		header("Location:../hakkimda-ayar.php?durum=izinsiz-uzanti");
		exit;
	}

	$uploads_dir = '../../images/hakkımda-arkaplan1-resim';

	@$tmp_name = $_FILES['hakkimda_arkaplan1_resim']["tmp_name"];
	@$name = $_FILES['hakkimda_arkaplan1_resim']["name"];

	$benzersizsayi4=rand(20000,32000);
	$refimgyol=substr($uploads_dir, 6)."/".$benzersizsayi4.$name;

	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizsayi4$name");

	
	$duzenle=$db->prepare("UPDATE hakkimda_ayar SET
		hakkimda_arkaplan1_resim=:resim1
		WHERE hakkimda_id=1");
	$update=$duzenle->execute(array(
		'resim1' => $refimgyol
	));



	if ($update) {

		$resimsilunlink=$_POST['eski_resim1'];
		unlink("../../$resimsilunlink");

		Header("Location:../hakkimda-ayar.php?durum=ok");

	} else {

		Header("Location:../hakkimda-ayar.php?durum=no");
	}

}

// Hakkimda Arkaplan 2 Resim Düzenleme

if (isset($_POST['hakkimda_arkaplan2_resim_güncelle'])) {

	if ($_FILES['hakkimda_arkaplan2_resim']['size']>5242880) {
		header("Location:../hakkimda-ayar.php?durum=dosyabuyuk");
	}

	$izinli_uzantılar=array('jpg','png');

	$ext=strtolower(substr($_FILES['hakkimda_arkaplan2_resim']["name"],strpos($_FILES['hakkimda_arkaplan2_resim']["name"],'.')+1));

	if (in_array($ext,$izinli_uzantılar) === false) {
		header("Location:../hakkimda-ayar.php?durum=izinsiz-uzanti");
	}

	$uploads_dir = '../../images/hakkımda-arkaplan2-resim';

	@$tmp_name = $_FILES['hakkimda_arkaplan2_resim']["tmp_name"];
	@$name = $_FILES['hakkimda_arkaplan2_resim']["name"];

	$benzersizsayi4=rand(20000,32000);
	$refimgyol=substr($uploads_dir, 6)."/".$benzersizsayi4.$name;

	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizsayi4$name");

	
	$duzenle=$db->prepare("UPDATE hakkimda_ayar SET
		hakkimda_arkaplan2_resim=:resim2
		WHERE hakkimda_id=1");
	$update=$duzenle->execute(array(
		'resim2' => $refimgyol
	));



	if ($update) {

		$resimsilunlink=$_POST['eski_resim2'];
		unlink("../../$resimsilunlink");

		Header("Location:../hakkimda-ayar.php?durum=ok");

	} else {

		Header("Location:../hakkimda-ayar.php?durum=no");
	}

}

if (isset($_POST['hakkimda-güncelle'])) {
	
	//Tablo güncelleme işlemi kodları...
	$ayarkaydet=$db->prepare("UPDATE hakkimda_ayar SET
		hakkimda_arkaplan1_renk1=:hakkimda_arkaplan1_renk1,
		hakkimda_arkaplan1_renk2=:hakkimda_arkaplan1_renk2,
		hakkimda_arkaplan2_renk1=:hakkimda_arkaplan2_renk1,
		hakkimda_arkaplan2_renk2=:hakkimda_arkaplan2_renk2,
		hakkimda_metin=:hakkimda_metin
		WHERE hakkimda_id=1");

	$update=$ayarkaydet->execute(array(
		'hakkimda_arkaplan1_renk1' => $_POST['hakkimda_arkaplan1_renk1'],
		'hakkimda_arkaplan1_renk2' => $_POST['hakkimda_arkaplan1_renk2'],
		'hakkimda_arkaplan2_renk1' => $_POST['hakkimda_arkaplan2_renk1'],
		'hakkimda_arkaplan2_renk2' => $_POST['hakkimda_arkaplan2_renk2'],
		'hakkimda_metin' => $_POST['hakkimda_metin']
	));


	if ($update) {

		header("Location:../hakkimda-ayar.php?durum=ok");

	} else {

		header("Location:../hakkimda-ayar.php?durum=no");
	}
	
}

// Bildiklerim Öge Düzenleme Kodları 

if (isset($_POST['bildiklerimduzenle'])) {

	$bildiklerim_id=$_POST['bildiklerim_id'];

	$ayarkaydet=$db->prepare("UPDATE bildiklerim_ayar_öge SET
		bildiklerim_adi=:bildiklerim_adi,
		bildiklerim_renk=:bildiklerim_renk,
		bildiklerim_deger=:bildiklerim_deger
		WHERE bildiklerim_id={$_POST['bildiklerim_id']}");

	$update=$ayarkaydet->execute(array(
		'bildiklerim_adi' => $_POST['bildiklerim_adi'],
		'bildiklerim_renk' => $_POST['bildiklerim_renk'],
		'bildiklerim_deger' => $_POST['bildiklerim_deger']
	));


	if ($update) {

		Header("Location:../bildiklerim-ayar-duzenle.php?bildiklerim_id=$bildiklerim_id&durum=ok");

	} else {

		Header("Location:../bildiklerim-ayar-duzenle.php?bildiklerim_id=$bildiklerim_id&durum=no");
	}

}

// Bildiklerim Ayar Düzenleme Kodları 

if (isset($_POST['bildiklerim-ayar-güncelle'])) {
	
	//Tablo güncelleme işlemi kodları...
	$ayarkaydet=$db->prepare("UPDATE bildiklerim_ayar SET
		bildiklerim_arkaPlanRenk=:bildiklerim_arkaPlanRenk,
		bildiklerim_yaziRenk=:bildiklerim_yaziRenk,
		bildiklerim_yaziBorderRenk=:bildiklerim_yaziBorderRenk
		WHERE bildiklerimAyar_id=1");

	$update=$ayarkaydet->execute(array(
		'bildiklerim_arkaPlanRenk' => $_POST['bildiklerim_arkaPlanRenk'],
		'bildiklerim_yaziRenk' => $_POST['bildiklerim_yaziRenk'],
		'bildiklerim_yaziBorderRenk' => $_POST['bildiklerim_yaziBorderRenk']
	));


	if ($update) {

		header("Location:../bildiklerim-ayar.php?durum=ok");

	} else {

		header("Location:../bildiklerim-ayar.php?durum=no");
	}
	
}


// Hizmetlerim Ögeler Ayar Düzenleme Kodları

if (isset($_POST['hizmetlerim-oge-duzenle'])) {


	if ($_FILES['hizmet-resim']['size']>0) { 


		$uploads_dir = '../../images';
		@$tmp_name = $_FILES['hizmet-resim']["tmp_name"];
		@$name = $_FILES['hizmet-resim']["name"];
		$benzersizsayi1=rand(20000,32000);
		$benzersizsayi2=rand(20000,32000);
		$benzersizsayi3=rand(20000,32000);
		$benzersizsayi4=rand(20000,32000);
		$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
		$refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;
		@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");

		$duzenle=$db->prepare("UPDATE hizmetlerim_ayar_öge SET
			hizmetlerim_oge_baslik=:hizmetlerim_oge_baslik,
			hizmetlerim_oge_metin=:hizmetlerim_oge_metin,
			hizmetlerim_oge_resim=:resimyol	
			WHERE hizmetlerim_oge_id={$_POST['giden_id']}");
		$update=$duzenle->execute(array(
			'hizmetlerim_oge_baslik' => $_POST['hizmetlerim_oge_baslik'],
			'hizmetlerim_oge_metin' => $_POST['hizmetlerim_oge_metin'],
			'resimyol' => $refimgyol
		));
		
		$hizmetlerim_ayar_oge=$_POST['giden_id'];

		if ($update) {

			$resimsilunlink=$_POST['hizmetlerim_resimyol'];
			unlink("../../$resimsilunlink");

			Header("Location:../hizmetlerim-ayar.php?hizmetlerim_ayar_oge=$hizmetlerim_ayar_oge&durum=ok");

		} else {

			Header("Location:../hizmetlerim-ayar.php?durum=no");
		}

	} else {
		$duzenle=$db->prepare("UPDATE hizmetlerim_ayar_öge SET
			hizmetlerim_oge_baslik=:hizmetlerim_oge_baslik,
			hizmetlerim_oge_metin=:hizmetlerim_oge_metin,	
			WHERE hizmetlerim_oge_id={$_POST['giden_id']}");
		$update=$duzenle->execute(array(
			'hizmetlerim_oge_baslik' => $_POST['hizmetlerim_oge_baslik'],
			'hizmetlerim_oge_metin' => $_POST['hizmetlerim_oge_metin'],

		));
		
		$hizmetlerim_ayar_oge=$_POST['giden_id'];

		if ($update) {

			Header("Location:../hizmetlerim-ayar.php?hizmetlerim_ayar_oge=$hizmetlerim_ayar_oge&durum=ok");

		} else {

			Header("Location:../hizmetlerim-ayar.php?durum=no");
		}
	}

} 


if (isset($_POST['hizmetlerim-ayar-güncelle'])) {

	if ($_FILES['hizmetlerim_resim']['size']>0) { 


		$uploads_dir = '../vendors/images/';
		@$tmp_name = $_FILES['hizmetlerim_resim']["tmp_name"];
		@$name = $_FILES['hizmetlerim_resim']["name"];
		$benzersizsayi1=rand(20000,32000);
		$benzersizsayi2=rand(20000,32000);
		$benzersizsayi3=rand(20000,32000);
		$benzersizsayi4=rand(20000,32000);
		$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
		$refimgyol=substr($uploads_dir, 3)."/".$benzersizad.$name;
		@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");

		$duzenle=$db->prepare("UPDATE hizmetlerim_ayar SET
			hizmetlerim_renk=:hizmetlerim_renk,
			hizmetlerim_baslik_border_renk=:hizmetlerim_baslik_border_renk,
			hizmetlerim_baslik_renk=:hizmetlerim_baslik_renk,
			hizmetlerim_resim=:hizmetlerim_resim
			WHERE hizmetlerim_id=1");
		$update=$duzenle->execute(array(
			'hizmetlerim_renk' => $_POST['hizmetlerim_renk'],
			'hizmetlerim_baslik_border_renk' => $_POST['hizmetlerim_baslik_border_renk'],
			'hizmetlerim_baslik_renk' => $_POST['hizmetlerim_baslik_renk'],
			'hizmetlerim_resim' => $refimgyol
		));
		
		if ($update) {

			$resimsilunlink=$_POST['eski_hizmetResim'];
			unlink("../$resimsilunlink");

			Header("Location:../hizmetlerim-ayar.php?durum=guncellemebasarili");

		} else {

			Header("Location:../hizmetlerim-ayar.php?durum=guncellemebasarisiz");
		}

	} else {
		$duzenle=$db->prepare("UPDATE hizmetlerim_ayar SET
			hizmetlerim_renk=:hizmetlerim_renk,
			hizmetlerim_baslik_border_renk=:hizmetlerim_baslik_border_renk,
			hizmetlerim_baslik_renk=:hizmetlerim_baslik_renk
			WHERE hizmetlerim_id=1");
		$update=$duzenle->execute(array(
			'hizmetlerim_renk' => $_POST['hizmetlerim_renk'],
			'hizmetlerim_baslik_border_renk' => $_POST['hizmetlerim_baslik_border_renk'],
			'hizmetlerim_baslik_renk' => $_POST['hizmetlerim_baslik_renk']


		));
		

		if ($update) {

			Header("Location:../hizmetlerim-ayar.php?durum=basarili");
			exit;

		} else {

			Header("Location:../hizmetlerim-ayar.php?durum=basarisiz");
			exit;
		}
	}

} 



// Yorum Onay Alanı Kodları

if ($_GET['yorumlar_onay']=="ok") {

	
	$duzenle=$db->prepare("UPDATE yorumlar SET
		
		yorumlar_onay=:yorumlar_onay
		
		WHERE yorumlar_id={$_GET['yorumlar_id']}");
	
	$update=$duzenle->execute(array(

		'yorumlar_onay' => $_GET['yorumlar_one']
	));



	if ($update) {

		

		Header("Location:../yorumlar.php?durum=ok");
		exit;

	} else {

		Header("Location:../yorumlar.php?durum=no");
		exit;
	}

}

// Yorum Sil Alanı Kodları 

if ($_GET['yorumlarsil']=="ok") {
	
	$sil=$db->prepare("DELETE from yorumlar where yorumlar_id=:yorumlar_id");
	$kontrol=$sil->execute(array(
		'yorumlar_id' => $_GET['yorumlar_id']
	));

	if ($kontrol) {

		
		Header("Location:../yorumlar.php?durum=silindi");
		exit;

	} else {

		Header("Location:../yorumlar.php?durum=silinmedi");
		exit;
	}

}


// Kullanici Sil Alanı Kodları 

if ($_GET['kullanicisil']=="ok") {
	
	$sil=$db->prepare("DELETE from kullanicilar where kullanici_id=:kullanici_id");
	$kontrol=$sil->execute(array(
		'kullanici_id' => $_GET['kullanici_id']
	));

	if ($kontrol) {

		
		Header("Location:../kullanici-ayar.php?durum=silindi");
		exit;

	} else {

		Header("Location:../kullanici-ayar.php?durum=silinmedi");
		exit;
	}

}


// İletişim Alanı Veri Kaydetme




if (isset($_POST['bilgiekle'])) {


	$mesajlar_adi=htmlspecialchars($_POST['mesajlar_adi']);
	$mesajlar_soyad=htmlspecialchars($_POST['mesajlar_soyad']);
	$mesajlar_mail=htmlspecialchars($_POST['mesajlar_mail']);
	$mesajlar_tel=htmlspecialchars($_POST['mesajlar_tel']);
	$mesajlar_konu=htmlspecialchars($_POST['mesajlar_konu']);
	$mesajlar_metin=htmlspecialchars($_POST['mesajlar_metin']);

	$iletisimekle=$db->prepare("INSERT INTO mesajlar SET
		mesajlar_adi=:mesajlar_adi,
		mesajlar_soyad=:mesajlar_soyad,
		mesajlar_mail=:mesajlar_mail,
		mesajlar_tel=:mesajlar_tel,
		mesajlar_konu=:mesajlar_konu,
		mesajlar_metin=:mesajlar_metin
		");

	$insert=$iletisimekle->execute(array(
		'mesajlar_adi' =>$mesajlar_adi,
		'mesajlar_soyad' => $mesajlar_soyad,
		'mesajlar_mail' => $mesajlar_mail,
		'mesajlar_tel' => $mesajlar_tel,
		'mesajlar_konu' => $mesajlar_konu,
		'mesajlar_metin' => $mesajlar_metin
	));


	if ($insert) {

		echo "Mesajınız elime ulaştı. En yakın zamanda sizinle iletişime geçeceğim...";

	} 

}

// Firmalar Ayar Düzenlem Alanı Kodları

if (isset($_POST['firmalarduzenle'])) {

	$firmalar_id=$_POST['firmalar_id'];

	$ayarkaydet=$db->prepare("UPDATE firmalar SET
		firmalar_isim=:firmalar_isim,
		firmalar_logo=:firmalar_logo,
		firmalar_url=:firmalar_url,
		firmalar_durum=:firmalar_durum
		WHERE firmalar_id={$_POST['firmalar_id']}");

	$update=$ayarkaydet->execute(array(
		'firmalar_isim' => $_POST['firmalar_isim'],
		'firmalar_logo' => $_POST['firmalar_logo'],
		'firmalar_url' => $_POST['firmalar_url'],
		'firmalar_durum' => $_POST['firmalar_durum']
	));


	if ($update) {

		Header("Location:../firmalar-ayar-duzenle.php?firmalar_id=$firmalar_id&durum=ok");

	} else {

		Header("Location:../firmalar-ayar-duzenle.php?firmalar_id=$firmalar_id&durum=no");
	}

}

// Firmalar Ekle Alanı Kodları

if (isset($_POST['firmalar-yeni-ekle'])) {


	$firmalar_isim=htmlspecialchars($_POST['firmalar_isim']);
	$firmalar_logo=htmlspecialchars($_POST['firmalar_logo']);
	$firmalar_url=htmlspecialchars($_POST['firmalar_url']);
	$firmalar_durum=htmlspecialchars($_POST['firmalar_durum']);

	$iletisimekle=$db->prepare("INSERT INTO firmalar SET
		firmalar_isim=:firmalar_isim,
		firmalar_logo=:firmalar_logo,
		firmalar_url=:firmalar_url,
		firmalar_durum=:firmalar_durum
		");

	$insert=$iletisimekle->execute(array(
		'firmalar_isim' =>$firmalar_isim,
		'firmalar_logo' => $firmalar_logo,
		'firmalar_url' => $firmalar_url,
		'firmalar_durum' => $firmalar_durum
	));


	if ($insert) {

		header('location:../firmalar-ayar.php?durum=ekleme-basarili');
		exit;

	} else {

		header('location:../firmalar-ayar.php?durum=ekleme-basarisiz');
		exit;

	}

}

// Mesaj Sil Alanı Kodları 

if ($_GET['mesajlarsil']=="ok") {
	
	$sil=$db->prepare("DELETE from mesajlar where mesajlar_id=:mesajlar_id");
	$kontrol=$sil->execute(array(
		'mesajlar_id' => $_GET['mesajlar_id']
	));

	if ($kontrol) {

		
		Header("Location:../mesajlar.php?durum=silindi");
		exit;

	} else {

		Header("Location:../mesajlar.php?durum=silinmedi");
		exit;
	}

}


if (isset($_POST['instagram-ayar-güncelle'])) {
	
	//Tablo güncelleme işlemi kodları...
	$ayarkaydet=$db->prepare("UPDATE instagram_ayar SET
		instagram_access=:instagram_access,
		instagram_kul=:instagram_kul,
		instagram_durum=:instagram_durum
		WHERE instagram_id=1");

	$update=$ayarkaydet->execute(array(
		'instagram_access' => $_POST['instagram_access'],
		'instagram_kul' => $_POST['instagram_kul'],
		'instagram_durum' => $_POST['instagram_durum']
	));


	if ($update) {

		header("Location:../instagram-ayar.php?durum=ok");

	} else {

		header("Location:../instagram-ayar.php?durum=no");
	}
	
}


if (isset($_POST['yorum-gonder'])) {


	 echo $yorumlar_metni=htmlspecialchars($_POST['yorumlar_metni']); echo "<br>";
 echo 	$kullanici_id=$_POST['kullanici_id'];

	exit;


	$iletisimekle=$db->prepare("INSERT INTO yorumlar SET
		yorumlar_metni=:yorumlar_metni,
		kullanici_id=:kullanici_id
		");

	$insert=$iletisimekle->execute(array(
		'yorumlar_metni' =>$yorumlar_metni,
		'kullanici_id' => $kullanici_id

	));


	if ($insert) {

		echo "Mesajınız elime ulaştı. En yakın zamanda sizinle iletişime geçeceğim...";

	} 

}

if (isset($_POST['sosyal-guncelle'])) {
	
	//Tablo güncelleme işlemi kodları...
	$ayarkaydet=$db->prepare("UPDATE sosyal SET
		facebook=:facebook,
		instagram=:instagram,
		codepen=:codepen,
		twitter=:twitter,
		github=:github,
		linkedin=:linkedin
		WHERE sosyal_id=1");

	$update=$ayarkaydet->execute(array(
		'facebook' => $_POST['facebook'],
		'instagram' => $_POST['instagram'],
		'codepen' => $_POST['codepen'],
		'twitter' => $_POST['twitter'],
		'github' => $_POST['github'],
		'linkedin' => $_POST['linkedin']
	));


	if ($update) {

		header("Location:../sosyal-ayar.php?durum=ok");

	} else {

		header("Location:../sosyal-ayar.php?durum=no");
	}
	
}


?>