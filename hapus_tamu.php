<?php 
	include("koneksi_tamu.php"); 
	try{
		$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		 $hapus="DELETE FROM tamu WHERE id = '$_GET[id]'"; 
		 $result = $dbh->exec($hapus);
		 if ($hapus) {  
			echo "<script>alert('Berhasil Menghapus Data');window.location='index.php?p=list_tamu';</script>";
			$p=isset($_GET['p']) ? $_GET['p'] : 'list_tamu';
						if($p=='list_tamu') include 'list_tamu.php';
		 } else { 
			echo "<script>alert('Gagal Menghapus Data');window.location='index.php?p=list_tamu';</script>";
			$p=isset($_GET['p']) ? $_GET['p'] : 'list_tamu';
						if($p=='list_tamu') include 'list_tamu.php';
		 } 
		 //hapus koneksi
		$dbh = null;
	}catch (PDOException $e){
		print "Koneksi atau query bermasalah : " . $e->getMessage() . "<br/>";
		die();
	}
?> 