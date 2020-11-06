<?php 
session_start();

session_destroy();
header("Location:uye-giris.php?durum=cikis-yapildi");
exit;

 ?>