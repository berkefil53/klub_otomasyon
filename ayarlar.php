<?php /* veri tabanı bağlantısı*/
$con=mysql_connect("*","*","*");
if(!$con){
	echo "Bağlanılamadı".mysql_error();	/* böyle bir sayfa bulunamadıysa "Bağlanamadı yaz"*/
}
mysql_select_db("u505175880_futbol_klubu",$con);
mysql_query("SET NAMES utf8");/* Türkçe klavyeye izin ver*/
$db=new PDO("mysql:host=46.17.175.187;
dbname=u505175880_futbol_klubu;charset=utf8","u505175880_eminedilsiz","eminedilsiz53");
?>
