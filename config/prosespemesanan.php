<?php
 
 include 'koneksi.php';


 $username=$_POST['username'];
 $namapembeli=$_POST['namapembeli'];
 $nomortelepon=$_POST['nomortelepon']; 
 $apengiriman=$_POST['apengiriman'];
 $kota=$_POST['kota'];
 $jamdelivery=$_POST['jamdelivery'];
 $qty=$_POST['qty'];
 



 $input="INSERT INTO pemesanan(id,username,namapembeli,nomortelepon,apengiriman,kota,jamdelivery,qty) values('','$username','$namapembeli','$nomortelepon','$apengiriman','$kota','jamdelivery','qty')";
 $data=mysqli_query($konek,$input) or die (mysqli_error($konek));

 if($data){
  echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../index.php?page=chekout">'; 
 }

?>