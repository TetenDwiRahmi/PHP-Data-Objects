<?php 
try{
	$dbh = new PDO('mysql:host=localhost;dbname=db_bukutamu', "root", "");
}catch(PDOException $e){
	print "Koneksi atau query bermasalah : " . $e->getMessage() . "<br/>";
	die();
}
?>