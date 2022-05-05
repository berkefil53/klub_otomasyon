<?php
ob_start();
session_start();
if(!isset($_SESSION["kuladi"])){	
header( "Location: anasayfa.php");
}
?>

<!DOCTYPE html>
<?php
include("ayarlar.php");/*phpmyadmin veritabanını bağlamak için kullanılan sayfa */
?>
<head>
    <link href="assets/css/bootstrap.css" rel="stylesheet"> 
    <link href="assets/js/fancybox/jquery.fancybox.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet">
    <script src="assets/js/jquery.js"></script>
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
       		<div class="teknik1"><img src="img/teknik.png"></div>
            <div class="teknik1_2">
            <br>FUTBOL HOCASI
            <br>Ad-Soyad: Ünal Sarı
            <br>Sorumlu: U13 ve altı minikler
            <br>Spor Geçmişi: Eski 1.lig Futbolcusu (BursaSpor)</div>

              <!-- ikinxiTeknik-->
              
              
              <div class="teknik2"><img src="img/teknik.png"></div>
            <div class="teknik2_2">
            <br>FUTBOL HOCASI
            <br>Ad-Soyad: Erol Özmen
            <br>Sorumlu: U14 ve üstü gençler
            <br>Spor Geçmişi: Eski 2.lig Futbolcusu </div>
            
            
             <!-- üçTeknik-->
             
                <div class="teknik3"><img src="img/teknik.png"></div>
            <div class="teknik3_2">
            <br>FUTBOL YARDIMCI HOCA
            <br>Ad-Soyad: ARDA GÜLER
            <br>Sorumlu: Hepsi
            <br>Spor Geçmişi: Beden Öğretmeni </div>
                
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
	<script src="assets/js/fancybox/jquery.fancybox.js"></script>     
       <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>


  
  <script type="text/javascript">
      $(function() {
        //    fancybox
          jQuery(".fancybox").fancybox();
      });
</script>
</body>
</html>