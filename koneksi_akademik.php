<?php 
try{
	$conn = new PDO('mysql:host=localhost;dbname=db_akademik', "root", "");
}catch(PDOException $e){
	print "Koneksi atau query bermasalah : " . $e->getMessage() . "<br/>";
	die();
}
?>