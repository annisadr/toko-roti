<?php 
	$id	= $_GET['id'];

	include 'koneksi.php';

		$hapus	="DELETE FROM user WHERE id='$id'";
		$query	= mysqli_query($konek, $hapus);

		//echo "Data Telah Terhapus"
		echo "<br><br><br><br><strong><center>User telah di hapus";
		
		//echo "<meta http-equiv='refresh' content='o; url=../admin/index.php?page=info'>";

?>

<META HTTP-EQUIV='REFRESH' CONTENT ='0; URL=../admin/index.php?page=index'>