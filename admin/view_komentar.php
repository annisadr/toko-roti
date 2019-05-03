<div class="container">
<h2>Komentar User<br><br></h2>
<a href="#" class="btn btn-danger btn-lg">
  <span class="glyphicon glyphicon-plus"></span> Tambah
</a>
  <table class="table table-striped table-hover table-responsive">
    <thead>
      <tr style="align-text:center;">
        <th>No</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone Number</th>
        <th>Title</th>
        <th>Message</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
        include '../config/koneksi.php';

        $query = mysqli_query($konek, "SELECT id, name, eaddress, phonenumber, title, message, level FROM komentar") or die(mysqli_error());
          if(mysqli_num_rows($query) == 0){
            echo '<tr><td collspan="4" align="center">Tidak ada data!</td></tr>';
          }
          else{
            $no = 1;
            while ($data = mysqli_fetch_array($query)) {
              echo '<tr>';
              echo '<td>'.$no.'</td>';
              echo '<td>'.$data['name'].'</td>';
              echo '<td>'.$data['eaddress'].'</td>';
              echo '<td>'.$data['phonenumber'].'</td>';
              echo '<td>'.$data['title'].'</td>';
              echo '<td>'.$data['message'].'</td>';
              
              echo '<td><a href=../config/delete_komentar.php?id='.$data['id'].' class=btn btn-danger><span class="glyphicon glyphicon-remove-sign"></span> Delete</a></td>';
              echo '</tr>';
              $no++;
            }
          }
      ?>
    </tbody>
  </table>

  </div>