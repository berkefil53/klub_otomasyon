<?php
ob_start();
session_start();
if(!isset($_SESSION["kuladi"])){	
header( "Location: anasayfa.php");
}
?>

<html>
<?php
include("ayarlar.php");
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>DUAÇINAR FUTBOL KULÜBÜ</title>
<link rel="stylesheet" type="text/css" href="css/GenelStil.css">

</head>
<body>
<div id="ust">

	 <div class="arma">
   
</div>
  <div id="AramaDiv">
     <form>
     <input type="text">
     <input type="button" value="ARA">
     </form>
     
     
     </div>
<div id="Kapsayici"><!-- Kapsayıcı açılıyor..  -->
<div id="sol">
<ul>
<li><a href="index.php">ANASAYFA</a>
<?php
$admin=$_SESSION["kuladi"];
$adminsorgu=mysql_query("select * from kullaniciler where kuladi='$admin'");
$admincek=mysql_fetch_assoc($adminsorgu);
if($admincek['admin_yetki']=="0"){
?>
<li><a href="oyuncular.php">OYUNCULAR</a>
<li><a href="oyuncuekle.php">OYUNCU EKLE</a>
<li><a href="oyuncusil.php">OYUNCU SİL</a>
<li><a href="galeriekle.php">GALERİ EKLE</a>
<?php }
?>
<li><a href="galeri.php">GALERİ</a>
<li><a href="teknikekip.php">TEKNİK EKİP</a>

<li><a href="takimlarimiz.php">TAKIMLARIMIZ</a>
<li><a href="iletisim.php">İLETİŞİM</a>

<li><a href="logout.php">ÇIKIŞ</a>
</ul>
</div>


        <div id="icerikDiv">
        	<div class="iletisimTable">
         <table height="350px" width="400px" border="1px solid">
        <form action="" method="post">
		<tr>
        <td colspan="2" class="yazi1">
        <H3> Duaçınar Futbol Kulübüne ULAŞIN </H3>
        </td>
        </tr>
       	<tr><td>Ad-Soyad : </td><td><input name="kuladi" type="text" value=""></td></tr>
        <tr><td>E-mail :</td><td><input name="kulsifre" type="text" value="">          </br></td></tr>
        <tr><td>Mesaj : </td><td><textarea name="textarea"></textarea></td></tr>
        <tr><td colspan="2"><div align="center"><input name="kaydet" type="submit" value="Gönder" class="buton1"/></div></td></tr>
      
        </form>
        </table>
        </div>
        
        <div class="iletisimAdres">
        <br>
        	<h3>Duaçınar Futbol Kulübü<br> Adres</h3>
            <p>Bulunduğu İl: BURSA </p>
            <p>Adres: Başol Spor Kompleksi </p>
            <p>Telefon: 05487563254  </p>
            
           
        </div>
        
        <!-- sştedeki harita yolu-->
        <br>
        <br>
        
        <p align="center" ><b>Adresimize Aşağıdaki Haritadan da ulaşabilirsiniz...</b></p>
        <br>
        <p class="harita">
        
        <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1Jg6ZkfKmlGSYoLjt_yIqKxVizRGXoDWO" width="640" height="480"></iframe></p>
        
        </div>

                        <div id="SagDiv">
                        
                        		<div id="kapsayiciDuyuru">
                	
                   <div class="DuyuruKutu0"><H4>ŞAMPİYON DUAÇINAR!!!!!🏆🏆🏆</H4></div>
                     <div class="DuyuruKutu1"><H4>Yıldıray Baştürk Duaçınar Spor antrenmanındaydı bugün🔥</H4></div>
                    <div class="DuyuruKutu2"><b>Duaçınar Spor = 3<br> Barbaros Spor =0</b> <br>👏👏👏</div>
                    <div class="DuyuruKutu3">Ligdeki en iyi rakibimiz olan Tunagençlik Sporu oynadıkları iyi futboldan dolayı tebrik ediyoruz.</div>
                    <div class="DuyuruKutu4"><b>Duaçınar Spor = 9<br> Burgaz Spor =0</b><br>👏👏👏</div>
                    <div class="DuyuruKutu5"><b>Duaçınar Spor = 8<br> Bahar Spor =0</b><br>👏👏👏</div>
                    
                </div>
                        
                        
                        </div>

<!-- Kapsayıcı kapanıyor..  -->

<div id="footer">
	<div id="footerIc">
		
        <div class="footerDuacinar">DUAÇINAR FUTBOL KULÜBÜ</div>
        <div class="SosyalMedyaClass">
        
        <table>
        <form>
        <tr><td>SOSYAL MEDYA  <br></td>
        <td>HESAPLARIMIZ<br></td>
        </tr>
        
        <tr>
        <td>FACEBOOK : </td>
        <td>Duaçınar Spor Kulübü <br></td>
        </tr>
        
         <tr>
        <td>INSTAGRAM :</td>
        <td>duacinari.16futbol<br></td>
        </tr>
        <tr>
        <td>TWITTER :</td>
        <td>duacinari.16futboltw <br></td>
        </tr>
        <tr>
        <td>E-MAIL:</td>
        <td>duacinari.16futbol@gmail.com</td>
        </tr>
        </form>
        </table>
        
        </div>
        
        
                <div id="FooterMenu">
<ul>
<li><a href="index.php">ANASAYFA</a>
<?php
$admin=$_SESSION["kuladi"];
$adminsorgu=mysql_query("select * from kullaniciler where kuladi='$admin'");
$admincek=mysql_fetch_assoc($adminsorgu);
if($admincek['admin_yetki']=="0"){
?>
<li><a href="oyuncular.php">OYUNCULAR</a>
<li><a href="oyuncuekle.php">OYUNCU EKLE</a>
<li><a href="oyuncusil.php">OYUNCU SİL</a>
<li><a href="galeriekle.php">GALERİ EKLE</a>
<?php }
?>
<li><a href="galeri.php">GALERİ</a>
<li><a href="teknikekip.php">TEKNİK EKİP</a>

<li><a href="takimlarimiz.php">TAKIMLARIMIZ</a>
<li><a href="iletisim.php">İLETİŞİM</a>

<li><a href="logout.php">ÇIKIŞ</a>
</ul>
</div>
        
        
        
        
        
        
        <div class="isimHakkim">© - Tüm Hakları Saklıdır. Gizlilik, Kullanım ve Telif Hakları bildiriminde belirtilen kurallar çerçevesinde hizmet sunulmaktadır. Copyright 2020 Emine Dilsiz ©</div>
        

        
    </div>
      
    </div>
     
</div>


</body>
</html>