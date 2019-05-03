<?php
 
 include 'koneksi.php';


 $fullname=$_POST['fullname'];
 $username=$_POST['username'];
 $password=$_POST['password'];
 $address=$_POST['address'];
 $email=$_POST['email'];
 $phonenumber=$_POST['phonenumber'];
 $level=$_POST['level'];


 $input="INSERT INTO user(id,fullname,username,password,address,email,phonenumber,level) values('','$fullname','$username','$password','$address','$email','$phonenumber','user')";
 $data=mysqli_query($konek,$input) or die (mysqli_error($konek));

 if($data){
  echo "<strong><center>Anda berhasil mendaftar";
  echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../index.php?page=index">'; 
 }

?>