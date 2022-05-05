<?php
ob_start();
session_start();
?>
<?php
include("ayarlar.php");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Kullanıcı Girişi</title>
<link rel="stylesheet" type="text/css" href="css/giris_css.css"/>
</head>
<body>

      <div id="arma"></div>
          <div id="kutu1">
          <table height="400px" width="400px" border="1px solid">
        <form action="" method="post">
		<tr>
        <td colspan="2" class="yazi1">
        KULLANICI GİRİŞİ
        </td>
        </tr>
       	<tr><td>KULLANICI ADI : </td><td><input name="kuladi" type="text" /></td></tr>
        <tr><td>SİFRE :</td><td> <input name="kulsifre" type="password" /></br></td></tr>
        <tr><td colspan="2"><div align="center"><input name="kaydet" type="submit" value="GİRİS" class="buton1"/></div></td></tr>
      
        </form>
        </table>
        </div>
		<?php
		if(isset($_POST["kaydet"])){
		$kuladi=$_POST["kuladi"];
		$kulsifre=$_POST["kulsifre"];
		$sorgu=mysql_query("select * from kullaniciler where kuladi='$kuladi' and kulsifre='$kulsifre'");
		if(mysql_num_rows($sorgu)==0){
		echo "Kullanıcı Adı Veya Sifre Yanlış !!";	
		}else{
		session_start();
		$_SESSION["kulid"]=mysql_result($sorgu,0,1);
		$_SESSION["kuladi"]=mysql_result($sorgu,0,2);
		$_SESSION["admin_yetki"]=mysql_result($sorgu,0,4);
		header( "Location: index.php");
		}
		}
				?>
</body>
</html>