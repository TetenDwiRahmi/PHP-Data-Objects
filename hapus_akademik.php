<?php 
	include("koneksi_akademik.php"); 
	try{
		 $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		 $hapus="DELETE FROM mahasiswa WHERE nim='$_GET[nim]'"; 
		 $result = $dbh->exec($hapus);
		 if ($hapus) {  
			echo "<script>alert('Berhasil Menghapus Data');window.location='index.php?p=list_akademik';</script>";
			$p=isset($_GET['p']) ? $_GET['p'] : 'list_akademik';
						if($p=='list_akademik') include 'list_akademik.php';
		 } else { 
			echo "<script>alert('Gagal Menghapus Data');window.location='index.php?p=list_akademik';</script>";
			$p=isset($_GET['p']) ? $_GET['p'] : 'list_akademik';
						if($p=='list_akademik') include 'list_akademik.php';
		 } 
	 $dbh = null;
	}catch (PDOException $e){
		print "Koneksi atau query bermasalah : " . $e->getMessage() . "<br/>";
		die();
	}
?> 