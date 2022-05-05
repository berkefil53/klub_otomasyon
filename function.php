<?php
ob_start();
session_start();
function giriskontrol() {
$adminkadi=$_SESSION['kuladi'];	
$adminsor=mysql_query("select * from kullaniciler where kuladi='$adminkadi' and admin_yetki='0'");
$adminsay=mysql_num_rows($adminsor);
if($adminsay==0){
header('location:index.php');	
}
}

?>