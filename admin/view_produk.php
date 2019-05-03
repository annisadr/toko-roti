<div class="container">
<h2>Product<br><br></h2>
<a href="index.php?page=formproduk" class="btn btn-danger btn-md">
  <span class="glyphicon glyphicon-plus"></span> Tambah Product
</a>
  <table class="table table-striped table-hover table-responsive">
    <thead>
      <tr style="align-text:center;">
        <th>No</th>
        <th>Bread Name</th>
        <th>Harga</th>
        <th>Gambar</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
        include '../config/koneksi.php';

        $query = mysqli_query($konek, "SELECT id, breadname, harga, gambar FROM produk") or die(mysqli_error());
          if(mysqli_num_rows($query) == 0){
            echo '<tr><td collspan="4" align="center">Tidak ada data!</td></tr>';
          }
          else{
            $no = 1;
            while ($data = mysqli_fetch_array($query)) {
              echo '<tr>';
              echo '<td>'.$no.'</td>';
              echo '<td>'.$data['breadname'].'</td>';
              echo '<td>'.$data['harga'].'</td>';
              echo '<td>'.$data['gambar'].'</td>';
              echo '<td><a href=../config/delete_produk.php?id='.$data['id'].'><span class="glyphicon glyphicon-remove-sign">Delete</span></a></td>';
              echo '</tr>';
              $no++;
            }
          }
      ?>
    </tbody>
  </table>

  </div>