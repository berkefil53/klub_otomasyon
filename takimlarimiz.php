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
<link rel="stylesheet" type="text/css" href="css/GenelStil.css">
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
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
                    TAKIM SEÇİNİZ :
			 <form action="" method="post">
   		 <select name="secim">
         <optgroup label="TAKIMLAR">
         <option value="u14">U14</option>
         <option value="u15">U15</option>
         <option value="u16">U16</option>
         <option value="u17">U17</option>
         <option value="u18">U18</option>
         <option value="u19">U19</option>
         <option value="u21">U21</option>
         <option value="astakim">ASTAKIM</option>
         </optgroup>
         </select>
          <input name="kaydet" type="submit" value="GÖSTER"  />
          </form>
		<?php
		if(isset($_POST["kaydet"])){
			$takim = $_POST['secim'];
			if($takim=='u14'){
			 echo  "<div class='col-md-12 mt'>";
	                  	echo"<div class='content-panel'>";
	                         echo"<table class='table table-hover'>";
	                  	  	  echo "<h4><i class='fa fa-angle-right'></i> OYUNCULAR</h4>";
	                  	  	  echo"<hr>
	                              <thead>
	                              <tr>
	                                  <th>OYUNCU ADI</th>
	                                  <th>OYUNCU SOYADI</th>
	                                  <th>DOĞUM TARİHİ</th>
	                              </tr>
	                              </thead>";
			$sorgu=mysql_query("select * from u14");
			while($satir=mysql_fetch_array($sorgu)){
			echo "<tbody>";
			echo "<tr>";
			echo "<td>".$satir["oyuncuadi"]."</td>";
			echo "<td>".$satir["oyuncusoyadi"]."</td>";
			echo "<td>".$satir["dogumtarihi"]."</td>";
			echo "</tr>";		
			}	
			echo "</tbody>  </table> </div> </div>";
			$_SESSION["secim"]="u14";
			}else 	if($takim=='u15'){
				$_SESSION["secim"]="u15";
				 echo  "<div class='col-md-12 mt'>";
	                  	echo"<div class='content-panel'>";
	                         echo"<table class='table table-hover'>";
	                  	  	  echo "<h4><i class='fa fa-angle-right'></i> OYUNCULAR</h4>";
	                  	  	  echo"<hr>
	                              <thead>
	                              <tr>
	                                  <th>OYUNCU ADI</th>
	                                  <th>OYUNCU SOYADI</th>
	                                  <th>DOĞUM TARİHİ</th>
	                              </tr>
	                              </thead>";
			$sorgu=mysql_query("select * from u15");
			while($satir=mysql_fetch_array($sorgu)){
			echo "<tbody>";
			echo "<tr>";
			echo "<td>".$satir["oyuncuadi"]."</td>";
			echo "<td>".$satir["oyuncusoyadi"]."</td>";
			echo "<td>".$satir["dogumtarihi"]."</td>";
			echo "</tr>";		
			}	
			echo "</tbody>  </table> </div> </div>";
			}else 	if($takim=='u16'){
				$_SESSION["secim"]="u16";
				 echo  "<div class='col-md-12 mt'>";
	                  	echo"<div class='content-panel'>";
	                         echo"<table class='table table-hover'>";
	                  	  	  echo "<h4><i class='fa fa-angle-right'></i> OYUNCULAR</h4>";
	                  	  	  echo"<hr>
	                              <thead>
	                              <tr>
	                                  <th>OYUNCU ADI</th>
	                                  <th>OYUNCU SOYADI</th>
	                                  <th>DOĞUM TARİHİ</th>
	                              </tr>
	                              </thead>";
			$sorgu=mysql_query("select * from u16");
			while($satir=mysql_fetch_array($sorgu)){
			echo "<tbody>";
			echo "<tr>";
			echo "<td>".$satir["oyuncuadi"]."</td>";
			echo "<td>".$satir["oyuncusoyadi"]."</td>";
			echo "<td>".$satir["dogumtarihi"]."</td>";
			echo "</tr>";		
			}	
			echo "</tbody>  </table> </div> </div>";
			}else 	if($takim=='u17'){
				$_SESSION["secim"]="u17";
				 echo  "<div class='col-md-12 mt'>";
	                  	echo"<div class='content-panel'>";
	                         echo"<table class='table table-hover'>";
	                  	  	  echo "<h4><i class='fa fa-angle-right'></i> OYUNCULAR</h4>";
	                  	  	  echo"<hr>
	                              <thead>
	                              <tr>
	                                  <th>OYUNCU ADI</th>
	                                  <th>OYUNCU SOYADI</th>
	                                  <th>DOĞUM TARİHİ</th>
	                              </tr>
	                              </thead>";
			$sorgu=mysql_query("select * from u17");
			while($satir=mysql_fetch_array($sorgu)){
			echo "<tbody>";
			echo "<tr>";
			echo "<td>".$satir["oyuncuadi"]."</td>";
			echo "<td>".$satir["oyuncusoyadi"]."</td>";
			echo "<td>".$satir["dogumtarihi"]."</td>";
			echo "</tr>";		
			}	
			echo "</tbody>  </table> </div> </div>";
			}else 	if($takim=='u18'){
				$_SESSION["secim"]="u18";
				 echo  "<div class='col-md-12 mt'>";
	                  	echo"<div class='content-panel'>";
	                         echo"<table class='table table-hover'>";
	                  	  	  echo "<h4><i class='fa fa-angle-right'></i> OYUNCULAR</h4>";
	                  	  	  echo"<hr>
	                              <thead>
	                              <tr>
	                                  <th>OYUNCU ADI</th>
	                                  <th>OYUNCU SOYADI</th>
	                                  <th>DOĞUM TARİHİ</th>
	                              </tr>
	                              </thead>";
			$sorgu=mysql_query("select * from u18");
			while($satir=mysql_fetch_array($sorgu)){
			echo "<tbody>";
			echo "<tr>";
			echo "<td>".$satir["oyuncuadi"]."</td>";
			echo "<td>".$satir["oyuncusoyadi"]."</td>";
			echo "<td>".$satir["dogumtarihi"]."</td>";
			echo "</tr>";		
			}	
			echo "</tbody>  </table> </div> </div>";
			}else 	if($takim=='u19'){
				$_SESSION["secim"]="u19";
				 echo  "<div class='col-md-12 mt'>";
	                  	echo"<div class='content-panel'>";
	                         echo"<table class='table table-hover'>";
	                  	  	  echo "<h4><i class='fa fa-angle-right'></i> OYUNCULAR</h4>";
	                  	  	  echo"<hr>
	                              <thead>
	                              <tr>
	                                  <th>OYUNCU ADI</th>
	                                  <th>OYUNCU SOYADI</th>
	                                  <th>DOĞUM TARİHİ</th>
	                              </tr>
	                              </thead>";
			$sorgu=mysql_query("select * from u19");
			while($satir=mysql_fetch_array($sorgu)){
			echo "<tbody>";
			echo "<tr>";
			echo "<td>".$satir["oyuncuadi"]."</td>";
			echo "<td>".$satir["oyuncusoyadi"]."</td>";
			echo "<td>".$satir["dogumtarihi"]."</td>";
			echo "</tr>";		
			}	
			echo "</tbody>  </table> </div> </div>";
			}else 	if($takim=='u21'){
				$_SESSION["secim"]="u21";
				 echo  "<div class='col-md-12 mt'>";
	                  	echo"<div class='content-panel'>";
	                         echo"<table class='table table-hover'>";
	                  	  	  echo "<h4><i class='fa fa-angle-right'></i> OYUNCULAR</h4>";
	                  	  	  echo"<hr>
	                              <thead>
	                              <tr>
	                                  <th>OYUNCU ADI</th>
	                                  <th>OYUNCU SOYADI</th>
	                                  <th>DOĞUM TARİHİ</th>
	                              </tr>
	                              </thead>";
			$sorgu=mysql_query("select * from u21");
			while($satir=mysql_fetch_array($sorgu)){
			echo "<tbody>";
			echo "<tr>";
			echo "<td>".$satir["oyuncuadi"]."</td>";
			echo "<td>".$satir["oyuncusoyadi"]."</td>";
			echo "<td>".$satir["dogumtarihi"]."</td>";
			echo "</tr>";		
			}	
			echo "</tbody>  </table> </div> </div>";
			}
			else if($takim=='astakim'){
				$_SESSION["secim"]="astakim";
				 echo  "<div class='col-md-12 mt'>";
	                  	echo"<div class='content-panel'>";
	                         echo"<table class='table table-hover'>";
	                  	  	  echo "<h4><i class='fa fa-angle-right'></i> OYUNCULAR</h4>";
	                  	  	  echo"<hr>
	                              <thead>
	                              <tr>
	                                  <th>OYUNCU ADI</th>
	                                  <th>OYUNCU SOYADI</th>
	                                  <th>DOĞUM TARİHİ</th>
	                              </tr>
	                              </thead>";
			$sorgu=mysql_query("select * from u14");
			while($satir=mysql_fetch_array($sorgu)){
			echo "<tbody>";
			echo "<tr>";
			echo "<td>".$satir["oyuncuadi"]."</td>";
			echo "<td>".$satir["oyuncusoyadi"]."</td>";
			echo "<td>".$satir["dogumtarihi"]."</td>";
			echo "</tr>";		
			}	
			echo "</tbody>  </table> </div> </div>";
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