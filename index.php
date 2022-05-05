<?php
ob_start();
session_start();
if(!isset($_SESSION["kuladi"])){	
header( "Location: anasayfa.php");
}
?>

<html>
<?php
include("ayarlar.php");/*phpmyadmin veritabanını bağlamak için kullanılan sayfa */
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>DUAÇINAR FUTBOL KULÜBÜ</title>


<!-- Script açılıyor..//// fotoğrafların geri ileri tuşuna basıldığında buyuk resim değişsin  -->
	<script>
    function resim(resimsrc){
document.getElementById("buyuka").src=resimsrc;
	}
	var dizi=new Array('img/resim1.jpg','img/resim2.jpg','img/resim3.jpg','img/resim4.jpg','img/resim5.jpg','img/resim6.jpg');/*resim dizisini tanımladım*/
var rno=0;
function geri(){
rno--;
document.getElementById("buyuka").src=dizi[rno];	
if(rno==0)
{
document.getElementById("sbut").disabled=true;	
}
document.getElementById("ilerib").disabled=false;
}
function ileri(){
rno++;
document.getElementById("buyuka").src=dizi[rno];
if(rno==5){
document.getElementById("ilerib").disabled=true;	
	
}
	document.getElementById("sbut").disabled=false;	
}
</script>


<!-- Script kapanıyor..  -->




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
                	<div id="resimdiv">
                    	<div class="resimdivButonGeri">
                   		<button id="sbut" onClick="geri();" disabled="disabled">Geri</button></div>
                    <img src="img/resim1.jpg" id="buyuka">
                    
                   <div class="resimdivButonIleri"> <button id="ilerib" onClick="ileri();">İleri</button></div><!-- resmi ileri geri tuşu ile değiştir. -->
                   </div>
                   
                    
                    <div id="alt"><!-- küçük resimin üzerine gelindiğinde büyük resmin yerinde gözüksün -->
                      <img src="img/resim1.jpg" onMouseMove="resim('img/resim1.jpg')"/>
                      <img src="img/resim2.jpg" onMouseMove="resim('img/resim2.jpg')"/>
                      <img src="img/resim3.jpg" onMouseMove="resim('img/resim3.jpg')"/>
                      <img src="img/resim4.jpg" onMouseMove="resim('img/resim4.jpg')"/>
                      <img src="img/resim5.jpg" onMouseMove="resim('img/resim5.jpg')"/>
                      <img src="img/resim6.jpg" onMouseMove="resim('img/resim6.jpg')"/>
                      </div>
                
                
                
                <!-- icerikyazı için div açılıyor..  -->
                <br>
                <br>
                <br>
              <h2 align="center">Duaçınarı Finalde!!</h2>
<img id="icerikResim"   align="left">30 Ağustos-2 Eylül arasında ESKİŞEHİRDE düzenlenen Zafer kupası turnuvasında u-11

<div class="maddeler">
<ul>
<li> BURSASPOR</li>
<li>KASIMPAŞA</li>
<li>OSMANLISPOR</li>
<li>ESKİŞEHİR</li>
<li>KONYASPOR</li>
<li>BEŞİKTAŞ</li>
<li>ALTINORDU</li>
<li>FENERBAHÇE</li>
<li>ALTAY</li>
</ul>
</div>

gibi önemli takımlarında bulunduğu turnuvada Takımımız Finale kalmıştır.

DUAÇINARSPOR - GÖZTEPE Final müsabakası saat 13:00 da eskişehirde oynanacaktır.Tüm taraftarımızı bekliyoruz...

Aynı zamanda u-10 takımımız yarı finalde penaltılar sonucunda kaybederek
3.lük 4.lük maçı oynayacaktır.

Takımımızı sağladıkları büyük başarıdan dolayı tebrik ediyoruz..

<br>

                <!-- icerikyazı için div kapanıyor...  -->
                
               
                <div class="ulusalbanner"></div>
                 <br>
                <br>
                <br>
                	<h2 align="center">Duaçınardan BursaSpora Transfer Coşkumuz...</h2>
                	<img id="icerikResim2"   align="right">
                    <br>
                    <br>
                    Zamanında Duaçınar Futbol Okulundan BursaSpora transfer olan  2008 doğumlu  topçularımızdan
                   
Mehmet BIYIK, Abdullah ATA ve Talha KUMAŞ ın takımı BURSASPORDA 2008'lerde şampiyon olmuşlardır.Onları gönülden tebrik ediyoruz.Başarılarınızın devamını dileriz çocuklar.

<br>
                
                
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