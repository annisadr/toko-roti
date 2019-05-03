<?php 	
	include 'koneksi.php';
	
	$username = $_POST['username'];
	$password = $_POST['password'];

	$query="SELECT * FROM user WHERE username='$username' AND password='$password'";

	$login = mysqli_query($konek,$query) or die (mysqli_error($konek));
	$jlhrecord = mysqli_num_rows($login);

		$data = mysqli_fetch_array($login, MYSQLI_BOTH);

		$username = $data['username'];
		$pasowrd = $data['password'];

	if($jlhrecord >0)
	{
		session_start();		
		$_SESSION['username'] 	= $username;
		$_SESSION['level'] 		= $data['level'];
		$_SESSION['id'] 		= session_id();

		if($data ['level']=='admin'){
			echo"<center><br><i><h3>Anda Berhasil login sebagai admin";
			echo '<META HTTP-EQUIV="REFRESH" CONTENT = "2; URL=../admin/view_komentar.php">';
		}

		else{
			echo"<center><br><i><h3>Anda berhasil login sebagai user";
			echo '<META HTTP-EQUIV="REFRESH" CONTENT = "2; URL=../index.php">';
		}
	}
	else{
		print "
			<script>
				alert(\"Username atau Password Anda Salah! Silahkan Login kembali\");
				history.back(-1);
			</script>";
	}
?>