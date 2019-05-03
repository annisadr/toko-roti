<?php
 
 include 'koneksi.php';


 $name=$_POST['name'];
 $eaddress=$_POST['eaddress'];
 $phonenumber=$_POST['phonenumber']; 
 $title=$_POST['title'];
 $message=$_POST['message'];
 



 $input="INSERT INTO komentar(id,name,eaddress,phonenumber,title,message,level) values('','$name','$eaddress','$phonenumber','$title','$message','user')";
 $data=mysqli_query($konek,$input) or die (mysqli_error($konek));

 if($data){
  echo "<strong><center>Komentar Anda Terkirim";
  echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../index.php?page=contactus">'; 
 }

?>