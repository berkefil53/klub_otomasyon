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
<link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
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
             
                    
       	<h2>OYUNCU EKLE</h2>

                <form action="" method="post">
          Ad:<input name="oyuncuadi" type="text" />
            Soyad:<input name="oyuncusoyadi" type="text" />
		 Doğum Tarihi:<input name="dogumtarihi" type="text"pattern="^\d{4}$" placeholder="XXXX" /><br><br>
         Tc Kimlik No:<input type="text" name="tckimlik" pattern="[0-9]{11}" 
  placeholder="11 haneli T.C No Giriniz" />
  		 Telefon No:<input type="tel" name="telefon" placeholder="XXXXXXXXXX" pattern="^\d{11}$"><br><br>
         Adres:<textarea row="5" cols="30" type="text" name="adres" placeholder="Adres Giriniz..."></textarea>
  		Takım:
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
          <input name="kaydet" type="submit" value="ekle"  />
          </form>
            <?php
			if(isset($_POST["kaydet"])){
			$oyuncuadi=$_POST["oyuncuadi"];
			$oyuncusoyadi=$_POST["oyuncusoyadi"];
			$dogumtarihi=$_POST["dogumtarihi"];
			$tckimlik=$_POST["tckimlik"];
			$telefon=$_POST["telefon"];
			$adres=$_POST["adres"];
			$takim = $_POST['secim'];//selecteki veriyi aldık.	
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
									  <th>TC KİMLİK NO</th>
									  <th>TELEFON</th>
									  <th>ADRES</th>
	                              </tr>
	                              </thead>";
								  mysql_query("INSERT INTO u14 (oyuncuadi,oyuncusoyadi,dogumtarihi,tckimlik,telefon,adres) VALUES ('$oyuncuadi','$oyuncusoyadi','$dogumtarihi','$tckimlik','$telefon','$adres')");
			$sorgu=mysql_query("select * from u14");
			while($satir=mysql_fetch_array($sorgu)){
			echo "<tbody>";
			echo "<tr>";
			echo "<td>".$satir["oyuncuadi"]."</td>";
			echo "<td>".$satir["oyuncusoyadi"]."</td>";
			echo "<td>".$satir["dogumtarihi"]."</td>";
			echo "<td>".$satir["tckimlik"]."</td>";
			echo "<td>".$satir["telefon"]."</td>";
			echo "<td>".$satir["adres"]."</td>";
			echo "</tr>";		
			}	
			echo "</tbody>  </table> </div> </div>";
			}else if($takim=='u15'){	
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
									  <th>TC KİMLİK NO</th>
									  <th>TELEFON</th>
									  <th>ADRES</th>
	                              </tr>
	                              </thead>";
								  mysql_query("INSERT INTO u15 (oyuncuadi,oyuncusoyadi,dogumtarihi,tckimlik,telefon,adres) VALUES ('$oyuncuadi','$oyuncusoyadi','$dogumtarihi','$tckimlik','$telefon','$adres')");
			$sorgu=mysql_query("select * from u15");
			while($satir=mysql_fetch_array($sorgu)){
			echo "<tbody>";
			echo "<tr>";
			echo "<td>".$satir["oyuncuadi"]."</td>";
			echo "<td>".$satir["oyuncusoyadi"]."</td>";
			echo "<td>".$satir["dogumtarihi"]."</td>";
			echo "<td>".$satir["tckimlik"]."</td>";
			echo "<td>".$satir["telefon"]."</td>";
			echo "<td>".$satir["adres"]."</td>";
			echo "</tr>";		
			}	
			echo "</tbody>  </table> </div> </div>";
			}else if($takim=='u16'){	
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
									  <th>TC KİMLİK NO</th>
									  <th>TELEFON</th>
									  <th>ADRES</th>
	                              </tr>
	                              </thead>";
								  mysql_query("INSERT INTO u16 (oyuncuadi,oyuncusoyadi,dogumtarihi,tckimlik,telefon,adres) VALUES ('$oyuncuadi','$oyuncusoyadi','$dogumtarihi','$tckimlik','$telefon','$adres')");
			$sorgu=mysql_query("select * from u16");
			while($satir=mysql_fetch_array($sorgu)){
			echo "<tbody>";
			echo "<tr>";
			echo "<td>".$satir["oyuncuadi"]."</td>";
			echo "<td>".$satir["oyuncusoyadi"]."</td>";
			echo "<td>".$satir["dogumtarihi"]."</td>";
			echo "<td>".$satir["tckimlik"]."</td>";
			echo "<td>".$satir["telefon"]."</td>";
			echo "<td>".$satir["adres"]."</td>";
			echo "</tr>";		
			}	
			echo "</tbody>  </table> </div> </div>";
			}else if($takim=='u17'){	
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
									  <th>TC KİMLİK NO</th>
									  <th>TELEFON</th>
									  <th>ADRES</th>
	                              </tr>
	                              </thead>";
								  mysql_query("INSERT INTO u17 (oyuncuadi,oyuncusoyadi,dogumtarihi,tckimlik,telefon,adres) VALUES ('$oyuncuadi','$oyuncusoyadi','$dogumtarihi','$tckimlik','$telefon','$adres')");
			$sorgu=mysql_query("select * from u17");
			while($satir=mysql_fetch_array($sorgu)){
			echo "<tbody>";
			echo "<tr>";
			echo "<td>".$satir["oyuncuadi"]."</td>";
			echo "<td>".$satir["oyuncusoyadi"]."</td>";
			echo "<td>".$satir["dogumtarihi"]."</td>";
			echo "<td>".$satir["tckimlik"]."</td>";
			echo "<td>".$satir["telefon"]."</td>";
			echo "<td>".$satir["adres"]."</td>";
			echo "</tr>";		
			}	
			echo "</tbody>  </table> </div> </div>";
			}else if($takim=='u18'){	
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
									  <th>TC KİMLİK NO</th>
									  <th>TELEFON</th>
									  <th>ADRES</th>
	                              </tr>
	                              </thead>";
								  mysql_query("INSERT INTO u18 (oyuncuadi,oyuncusoyadi,dogumtarihi,tckimlik,telefon,adres) VALUES ('$oyuncuadi','$oyuncusoyadi','$dogumtarihi','$tckimlik','$telefon','$adres')");
			$sorgu=mysql_query("select * from u18");
			while($satir=mysql_fetch_array($sorgu)){
			echo "<tbody>";
			echo "<tr>";
			echo "<td>".$satir["oyuncuadi"]."</td>";
			echo "<td>".$satir["oyuncusoyadi"]."</td>";
			echo "<td>".$satir["dogumtarihi"]."</td>";
			echo "<td>".$satir["tckimlik"]."</td>";
			echo "<td>".$satir["telefon"]."</td>";
			echo "<td>".$satir["adres"]."</td>";
			echo "</tr>";		
			}	
			echo "</tbody>  </table> </div> </div>";
			}else if($takim=='u19'){	
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
									  <th>TC KİMLİK NO</th>
									  <th>TELEFON</th>
									  <th>ADRES</th>
	                              </tr>
	                              </thead>";
								  mysql_query("INSERT INTO u19 (oyuncuadi,oyuncusoyadi,dogumtarihi,tckimlik,telefon,adres) VALUES ('$oyuncuadi','$oyuncusoyadi','$dogumtarihi','$tckimlik','$telefon','$adres')");
			$sorgu=mysql_query("select * from u19");
			while($satir=mysql_fetch_array($sorgu)){
			echo "<tbody>";
			echo "<tr>";
			echo "<td>".$satir["oyuncuadi"]."</td>";
			echo "<td>".$satir["oyuncusoyadi"]."</td>";
			echo "<td>".$satir["dogumtarihi"]."</td>";
			echo "<td>".$satir["tckimlik"]."</td>";
			echo "<td>".$satir["telefon"]."</td>";
			echo "<td>".$satir["adres"]."</td>";
			echo "</tr>";		
			}	
			echo "</tbody>  </table> </div> </div>";
			}else if($takim=='u21'){	
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
									  <th>TC KİMLİK NO</th>
									  <th>TELEFON</th>
									  <th>ADRES</th>
	                              </tr>
	                              </thead>";
								  mysql_query("INSERT INTO u21 (oyuncuadi,oyuncusoyadi,dogumtarihi,tckimlik,telefon,adres) VALUES ('$oyuncuadi','$oyuncusoyadi','$dogumtarihi','$tckimlik','$telefon','$adres')");
			$sorgu=mysql_query("select * from u21");
			while($satir=mysql_fetch_array($sorgu)){
			echo "<tbody>";
			echo "<tr>";
			echo "<td>".$satir["oyuncuadi"]."</td>";
			echo "<td>".$satir["oyuncusoyadi"]."</td>";
			echo "<td>".$satir["dogumtarihi"]."</td>";
			echo "<td>".$satir["tckimlik"]."</td>";
			echo "<td>".$satir["telefon"]."</td>";
			echo "<td>".$satir["adres"]."</td>";
			echo "</tr>";		
			}	
			echo "</tbody>  </table> </div> </div>";
			}else if($takim=='astakim'){	
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
									  <th>TC KİMLİK NO</th>
									  <th>TELEFON</th>
									  <th>ADRES</th>
	                              </tr>
	                              </thead>";
								  mysql_query("INSERT INTO astakim (oyuncuadi,oyuncusoyadi,dogumtarihi,tckimlik,telefon,adres) VALUES ('$oyuncuadi','$oyuncusoyadi','$dogumtarihi','$tckimlik','$telefon','$adres')");
			$sorgu=mysql_query("select * from astakim");
			while($satir=mysql_fetch_array($sorgu)){
			echo "<tbody>";
			echo "<tr>";
			echo "<td>".$satir["oyuncuadi"]."</td>";
			echo "<td>".$satir["oyuncusoyadi"]."</td>";
			echo "<td>".$satir["dogumtarihi"]."</td>";
			echo "<td>".$satir["tckimlik"]."</td>";
			echo "<td>".$satir["telefon"]."</td>";
			echo "<td>".$satir["adres"]."</td>";
			echo "</tr>";		
			}	
			echo "</tbody>  </table> </div> </div>";
			}
			}
			?>      
</table>
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