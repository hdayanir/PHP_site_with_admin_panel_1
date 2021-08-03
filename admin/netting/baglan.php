<?php
ob_start();
session_start();
?>

<?php
$host='localhost';
$user='root';
$pass='';
$db='tamirci';
$baglan = mysqli_connect($host,$user,$pass,$db)or die("Mysql bağlantı hatası");
mysqli_select_db($baglan,$db)or die("Veritabanı bağlantı hatası");
mysqli_query($baglan,"SET NAMES 'utf8'"); 
mysqli_query($baglan,"SET CHARACTER SET utf8"); 
mysqli_query($baglan,"SET COLLATION_CONNECTION = 'utf8_turkish_ci'");
$_SESSION["baglan"]=$baglan;
?>