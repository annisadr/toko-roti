<?php 
	$id	= $_GET['id'];

	include 'koneksi.php';

		$hapus	="DELETE FROM komentar WHERE id='$id'";
		$query	= mysqli_query($konek, $hapus);

		//echo "Data Telah Terhapus"
		echo "<br><br><br><br><strong><center>Komentar telah di hapus";
		
		//echo "<meta http-equiv='refresh' content='o; url=../admin/index.php?page=info'>";

?>

<META HTTP-EQUIV='REFRESH' CONTENT ='0; URL=../admin/index.php?page=komentar'>