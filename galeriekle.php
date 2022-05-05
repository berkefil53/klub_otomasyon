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
  <link href="assets/css/bootstrap.css" rel="stylesheet"> 
    <link href="assets/js/fancybox/jquery.fancybox.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet">
    <script src="assets/js/jquery.js"></script>
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
if(isset($_POST['resimyukle'])){
$yukleklasor= "assets/img/portfolio";//yüklenecek klasör
$tmp_name=$_FILES['yukle_resim']['tmp_name'];
$name=$_FILES['yukle_resim']['name'];
$boyut=$_FILES["yukle_resim"]["size"];
$tip=$_FILES["yukle_resim"]["type"];
$uzanti=substr($name,-4,4);
$rastgelesayi1=rand(10000,50000);
$rastgelesayi2=rand(10000,50000);
$_SESSION["ad"]=$rastgelesayi1.$rastgelesayi2;
$resimad=$rastgelesayi1.$rastgelesayi2.$uzanti;

//dosya varmı yokmu
if(strlen($name)==0){
	echo "bir dosya seçiniz";
	exit();
}
//boyut kontrol
if($boyut>(1024*1024*3)){
	echo "dosya boyutu çok fazla";
	exit();
}
//tip kontrol
if($tip!='image/jpeg' && $tip!='image/png'&&$uzanti!='.jpg' && $tip!='image/png'){
	echo "Yalnızca jpeg yada png formatında olabilir";
}
move_uploaded_file($tmp_name,"$yukleklasor/$resimad");

$resimsor=$db->prepare("insert into resim set resim_ad=:ad");
$resimyukle=$resimsor->execute(array('ad' =>$resimad));
}
?>
        <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="yukle_resim">
         <input type="submit" value="yükle" name="resimyukle"/>     
        </form>
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
<script src="assets/js/fancybox/jquery.fancybox.js"></script>     
       <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>


  
  <script type="text/javascript">
      $(function() {
        //    fancybox
          jQuery(".fancybox").fancybox();
      });
</script>
</html>