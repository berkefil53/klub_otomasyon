<?php
ob_start();
session_start();
if(!isset($_SESSION["kuladi"])){	
header( "Location: anasayfa.php");
}
?>
<?php
if($_SESSION["admin_yetki"]==1){
	header( "Location: index.php");
}
?>
<html>
<?php
include("ayarlar.php");/*phpmyadmin veritabanını bağlamak için kullanılan sayfa */
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
$admincek=mysql_fetch_assoc($adminsorgu);/*sadece  kullanıcı adı admın olan kişinin menu kısmında öğrenci ekle kısmı gözüksün.*/
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
        		<div id="GundemGaleriKapsayici">
             <?php
			 if($_SESSION["secim"]=="u14"){
		$oyuncuid=$_GET["oyuncuid"];
		$sorgu=mysql_query("select oyuncuadi,oyuncusoyadi,dogumtarihi,tckimlik,telefon,adres from u14 where oyuncuid='$oyuncuid'");
		$oyuncuadi=mysql_result($sorgu,0,0);
		$oyuncusoyadi=mysql_result($sorgu,0,1);
		$dogumtarihi=mysql_result($sorgu,0,2);
		$tckimlik=mysql_result($sorgu,0,3);
		$telefon=mysql_result($sorgu,0,4);
		$adres=mysql_result($sorgu,0,5);
			 }else  if($_SESSION["secim"]=="u15"){
		$oyuncuid=$_GET["oyuncuid"];
		$sorgu=mysql_query("select oyuncuadi,oyuncusoyadi,dogumtarihi,tckimlik,telefon,adres from u15 where oyuncuid='$oyuncuid'");
		$oyuncuadi=mysql_result($sorgu,0,0);
		$oyuncusoyadi=mysql_result($sorgu,0,1);
		$dogumtarihi=mysql_result($sorgu,0,2);
		$tckimlik=mysql_result($sorgu,0,3);
		$telefon=mysql_result($sorgu,0,4);
		$adres=mysql_result($sorgu,0,5);
			 }else  if($_SESSION["secim"]=="u16"){
		$oyuncuid=$_GET["oyuncuid"];
		$sorgu=mysql_query("select oyuncuadi,oyuncusoyadi,dogumtarihi,tckimlik,telefon,adres from u16 where oyuncuid='$oyuncuid'");
		$oyuncuadi=mysql_result($sorgu,0,0);
		$oyuncusoyadi=mysql_result($sorgu,0,1);
		$dogumtarihi=mysql_result($sorgu,0,2);
		$tckimlik=mysql_result($sorgu,0,3);
		$telefon=mysql_result($sorgu,0,4);
		$adres=mysql_result($sorgu,0,5);
			 }else  if($_SESSION["secim"]=="u17"){
		$oyuncuid=$_GET["oyuncuid"];
		$sorgu=mysql_query("select oyuncuadi,oyuncusoyadi,dogumtarihi,tckimlik,telefon,adres from u17 where oyuncuid='$oyuncuid'");
		$oyuncuadi=mysql_result($sorgu,0,0);
		$oyuncusoyadi=mysql_result($sorgu,0,1);
		$dogumtarihi=mysql_result($sorgu,0,2);
		$tckimlik=mysql_result($sorgu,0,3);
		$telefon=mysql_result($sorgu,0,4);
		$adres=mysql_result($sorgu,0,5);
			 }else  if($_SESSION["secim"]=="u18"){
		$oyuncuid=$_GET["oyuncuid"];
		$sorgu=mysql_query("select oyuncuadi,oyuncusoyadi,dogumtarihi,tckimlik,telefon,adres from u18 where oyuncuid='$oyuncuid'");
		$oyuncuadi=mysql_result($sorgu,0,0);
		$oyuncusoyadi=mysql_result($sorgu,0,1);
		$dogumtarihi=mysql_result($sorgu,0,2);
		$tckimlik=mysql_result($sorgu,0,3);
		$telefon=mysql_result($sorgu,0,4);
		$adres=mysql_result($sorgu,0,5);
			 }else  if($_SESSION["secim"]=="u19"){
		$oyuncuid=$_GET["oyuncuid"];
		$sorgu=mysql_query("select oyuncuadi,oyuncusoyadi,dogumtarihi,tckimlik,telefon,adres from u19 where oyuncuid='$oyuncuid'");
		$oyuncuadi=mysql_result($sorgu,0,0);
		$oyuncusoyadi=mysql_result($sorgu,0,1);
		$dogumtarihi=mysql_result($sorgu,0,2);
		$tckimlik=mysql_result($sorgu,0,3);
		$telefon=mysql_result($sorgu,0,4);
		$adres=mysql_result($sorgu,0,5);
			 }else  if($_SESSION["secim"]=="u21"){
		$oyuncuid=$_GET["oyuncuid"];
		$sorgu=mysql_query("select oyuncuadi,oyuncusoyadi,dogumtarihi,tckimlik,telefon,adres from u21 where oyuncuid='$oyuncuid'");
		$oyuncuadi=mysql_result($sorgu,0,0);
		$oyuncusoyadi=mysql_result($sorgu,0,1);
		$dogumtarihi=mysql_result($sorgu,0,2);
		$tckimlik=mysql_result($sorgu,0,3);
		$telefon=mysql_result($sorgu,0,4);
		$adres=mysql_result($sorgu,0,5);
			 }else  if($_SESSION["secim"]=="astakim"){
		$oyuncuid=$_GET["oyuncuid"];
		$sorgu=mysql_query("select oyuncuadi,oyuncusoyadi,dogumtarihi,tckimlik,telefon,adres from astakim where oyuncuid='$oyuncuid'");
		$oyuncuadi=mysql_result($sorgu,0,0);
		$oyuncusoyadi=mysql_result($sorgu,0,1);
		$dogumtarihi=mysql_result($sorgu,0,2);
		$tckimlik=mysql_result($sorgu,0,3);
		$telefon=mysql_result($sorgu,0,4);
		$adres=mysql_result($sorgu,0,5);
			 }
		?>
	   	<h2>OYUNCU GÜNCELLE</h2>
                <form action="" method="post">
          OYUNCU ADI:<input name="oyuncuadi" type="text" value="<?php echo $oyuncuadi; ?>"/><BR />
            OYUNCU SOYADI:<input name="oyuncusoyadi" type="text" value="<?php echo $oyuncusoyadi; ?>"/><BR />
            DOĞUM TARİHİ:<input name="dogumtarihi" type="text" pattern="^\d{4}$" placeholder="XXXX"value="<?php echo $dogumtarihi; ?>"/><BR />
           TC KİMLİK NO:<input name="tckimlik" type="text" pattern="[0-9]{11}" 
  placeholder="11 haneli T.C No Giriniz"value="<?php echo $tckimlik; ?>"/><BR />
            TELEFON:<input type="tel" name="telefon" placeholder="XXXXXXXXXX" pattern="^\d{11}$"
            value="<?php echo $telefon; ?>"/>
            <br/>
            ADRES:
            <textarea row="5" cols="30" type="text" name="adres" placeholder="Adres Giriniz..." /><?php echo $adres; ?></textarea><BR />
          <input name="kaydet" type="submit" value="GÜNCELLE"  />
          </form>
            <?php
			if(isset($_POST["kaydet"])){
			if($_SESSION["secim"]=="u14"){
			$oyuncuadi=$_POST["oyuncuadi"];
			$oyuncusoyadi=$_POST["oyuncusoyadi"];
			$dogumtarihi=$_POST["dogumtarihi"];
			$tckimlik=$_POST["tckimlik"];
			$telefon=$_POST["telefon"];
			$adres=$_POST["adres"];
				mysql_query("update u14 set oyuncuadi='$oyuncuadi', oyuncusoyadi='$oyuncusoyadi' ,dogumtarihi='$dogumtarihi',tckimlik='$tckimlik',telefon='$telefon',adres='$adres' where oyuncuid='$oyuncuid'");
			echo "<script>alert('ÜRÜN GÜNCELLENDİ');</script>";
			header("Location:oyuncular.php");
			}else if($_SESSION["secim"]=="u15"){
			$oyuncuadi=$_POST["oyuncuadi"];
			$oyuncusoyadi=$_POST["oyuncusoyadi"];
			$dogumtarihi=$_POST["dogumtarihi"];
			$tckimlik=$_POST["tckimlik"];
			$telefon=$_POST["telefon"];
			$adres=$_POST["adres"];
				mysql_query("update u15 set oyuncuadi='$oyuncuadi', oyuncusoyadi='$oyuncusoyadi' ,dogumtarihi='$dogumtarihi',tckimlik='$tckimlik',telefon='$telefon',adres='$adres' where oyuncuid='$oyuncuid'");
			echo "<script>alert('ÜRÜN GÜNCELLENDİ');</script>";
			header("Location:oyuncular.php");
			}else if($_SESSION["secim"]=="u16"){
			$oyuncuadi=$_POST["oyuncuadi"];
			$oyuncusoyadi=$_POST["oyuncusoyadi"];
			$dogumtarihi=$_POST["dogumtarihi"];
			$tckimlik=$_POST["tckimlik"];
			$telefon=$_POST["telefon"];
			$adres=$_POST["adres"];
				mysql_query("update u16 set oyuncuadi='$oyuncuadi', oyuncusoyadi='$oyuncusoyadi' ,dogumtarihi='$dogumtarihi',tckimlik='$tckimlik',telefon='$telefon',adres='$adres' where oyuncuid='$oyuncuid'");
			echo "<script>alert('ÜRÜN GÜNCELLENDİ');</script>";
			header("Location:oyuncular.php");
			}else if($_SESSION["secim"]=="u17"){
			$oyuncuadi=$_POST["oyuncuadi"];
			$oyuncusoyadi=$_POST["oyuncusoyadi"];
			$dogumtarihi=$_POST["dogumtarihi"];
			$tckimlik=$_POST["tckimlik"];
			$telefon=$_POST["telefon"];
			$adres=$_POST["adres"];
				mysql_query("update u17 set oyuncuadi='$oyuncuadi', oyuncusoyadi='$oyuncusoyadi' ,dogumtarihi='$dogumtarihi',tckimlik='$tckimlik',telefon='$telefon',adres='$adres' where oyuncuid='$oyuncuid'");
			echo "<script>alert('ÜRÜN GÜNCELLENDİ');</script>";
			header("Location:oyuncular.php");
			}else if($_SESSION["secim"]=="u18"){
			$oyuncuadi=$_POST["oyuncuadi"];
			$oyuncusoyadi=$_POST["oyuncusoyadi"];
			$dogumtarihi=$_POST["dogumtarihi"];
			$tckimlik=$_POST["tckimlik"];
			$telefon=$_POST["telefon"];
			$adres=$_POST["adres"];
				mysql_query("update u18 set oyuncuadi='$oyuncuadi', oyuncusoyadi='$oyuncusoyadi' ,dogumtarihi='$dogumtarihi',tckimlik='$tckimlik',telefon='$telefon',adres='$adres' where oyuncuid='$oyuncuid'");
			echo "<script>alert('ÜRÜN GÜNCELLENDİ');</script>";
			header("Location:oyuncular.php");
			}else if($_SESSION["secim"]=="u19"){
			$oyuncuadi=$_POST["oyuncuadi"];
			$oyuncusoyadi=$_POST["oyuncusoyadi"];
			$dogumtarihi=$_POST["dogumtarihi"];
			$tckimlik=$_POST["tckimlik"];
			$telefon=$_POST["telefon"];
			$adres=$_POST["adres"];
				mysql_query("update u19 set oyuncuadi='$oyuncuadi', oyuncusoyadi='$oyuncusoyadi' ,dogumtarihi='$dogumtarihi',tckimlik='$tckimlik',telefon='$telefon',adres='$adres' where oyuncuid='$oyuncuid'");
			echo "<script>alert('ÜRÜN GÜNCELLENDİ');</script>";
			header("Location:oyuncular.php");
			}else if($_SESSION["secim"]=="u21"){
			$oyuncuadi=$_POST["oyuncuadi"];
			$oyuncusoyadi=$_POST["oyuncusoyadi"];
			$dogumtarihi=$_POST["dogumtarihi"];
			$tckimlik=$_POST["tckimlik"];
			$telefon=$_POST["telefon"];
			$adres=$_POST["adres"];
				mysql_query("update u21 set oyuncuadi='$oyuncuadi', oyuncusoyadi='$oyuncusoyadi' ,dogumtarihi='$dogumtarihi',tckimlik='$tckimlik',telefon='$telefon',adres='$adres' where oyuncuid='$oyuncuid'");
			echo "<script>alert('ÜRÜN GÜNCELLENDİ');</script>";
			header("Location:oyuncular.php");
			}else if($_SESSION["secim"]=="astakim"){
			$oyuncuadi=$_POST["oyuncuadi"];
			$oyuncusoyadi=$_POST["oyuncusoyadi"];
			$dogumtarihi=$_POST["dogumtarihi"];
			$tckimlik=$_POST["tckimlik"];
			$telefon=$_POST["telefon"];
			$adres=$_POST["adres"];
				mysql_query("update astakim set oyuncuadi='$oyuncuadi', oyuncusoyadi='$oyuncusoyadi' ,dogumtarihi='$dogumtarihi',tckimlik='$tckimlik',telefon='$telefon',adres='$adres' where oyuncuid='$oyuncuid'");
			echo "<script>alert('ÜRÜN GÜNCELLENDİ');</script>";
			header("Location:oyuncular.php");
			}
		}	
			
		?>
           </div>
                
        </div>
        
        
        
<!-- duyuru divi açılıyor..  -->
			<div id="SagDiv">
            
            	<div id="kapsayiciDuyuru">
                	
                    <div class="DuyuruKutu0"><H4>ŞAMPİYON DUAÇINAR!!!!!🏆🏆🏆</H4></div>
                     <div class="DuyuruKutu1"><H4>Yıldıray Baştürk Duaçınar Spor antrenmanındaydı bugün🔥</H4></div>
                    <div class="DuyuruKutu2"><b>Duaçınar Spor = 3<br> Barbaros Spor =0</b> <br>👏👏👏</div>
                    <div class="DuyuruKutu3">Ligdeki en iyi rakibimiz olan Tunagençlik Sporu oynadıkları iyi futboldan dolayı tebrik ediyoruz.</div>
                    <div class="DuyuruKutu4"><b>Duaçınar Spor = 9<br> Burgaz Spor =0</b><br>👏👏👏</div>
                    <div class="duyuruKutu5"><b>Duaçınar Spor = 8<br> Bahar Spor =0</b><br>👏👏👏</div>
                    
                </div>
            
            
            </div>
            
            
  <!-- duyuru kapanıyor..  -->               
            

</div><!-- Kapsayıcı kapanıyor..  -->

<div id="footer">
	<div id="footerIc">
 <div class="footerDuacinar">DUAÇINAR FUTBOL KULÜBÜ</div>
        <div class="SosyalMedyaClass">
        <!-- Footer kısmına tablo formu kullanarak içerik ekleniyor.-->
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
$admincek=mysql_fetch_assoc($adminsorgu);/*sadece  kullanıcı adı admın olan kişinin menu kısmında öğrenci ekle kısmı gözüksün.*/
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

        <div class="isimHakkim"> © Copyright 2020 Emine Dilsiz ©</div>

    </div>
   
</div>


</body>
</html>