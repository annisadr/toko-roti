<div class="container">
<center><h2>Pemesanan<br><br></h2></center>
<br><br>
  <table class="table table-striped table-hover table-responsive">
    <thead>
      <tr style="align-text:center;">
        <th>No</th>
        <th>Username</th>
        <th>Nama Pembeli</th>
        <th>Nomor Telepon</th>
        <th>Alamat Pengiriman</th>
        <th>Kota</th>
        <th>Jam Delivery</th>
        <th>QTY</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
        include '../config/koneksi.php';

        $query = mysqli_query($konek, "SELECT id, username, namapembeli, nomortelepon, apengiriman, kota, jamdelivery, qty FROM pemesanan") or die(mysqli_error());
          if(mysqli_num_rows($query) == 0){
            echo '<tr><td collspan="4" align="center">Tidak ada data!</td></tr>';
          }
          else{
            $no = 1;
            while ($data = mysqli_fetch_array($query)) {
              echo '<tr>';
              echo '<td>'.$no.'</td>';
              echo '<td>'.$data['username'].'</td>';
              echo '<td>'.$data['namapembeli'].'</td>';
              echo '<td>'.$data['nomortelepon'].'</td>';
              echo '<td>'.$data['apengiriman'].'</td>';
              echo '<td>'.$data['kota'].'</td>';
              echo '<td>'.$data['jamdelivery'].'</td>';
              echo '<td>'.$data['qty'].'</td>';
              echo '<td><a href=../config/delete_user.php?id='.$data['id'].'><span class="glyphicon glyphicon-remove-sign">Delete</span></a></td>';
              echo '</tr>';
              $no++;
            }
          }
      ?>
    </tbody>
  </table>

  </div>