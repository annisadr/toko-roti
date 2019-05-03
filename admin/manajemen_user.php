<div class="container">
<center><h2>Manajemen User<br><br></h2></center>
<a href="index.php?page=formedit" class="btn btn-danger btn-md">
  <span class="glyphicon glyphicon-plus"></span> Tambah
</a>
<br><br>
  <table class="table table-striped table-hover table-responsive">
    <thead>
      <tr style="align-text:center;">
        <th>No</th>
        <th>Name</th>
        <th>Username</th>
        <th>Password</th>
        <th>Address</th>
        <th>Email</th>
        <th>Phone Number</th>
        <th>Level</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
        include '../config/koneksi.php';

        $query = mysqli_query($konek, "SELECT id, fullname, username, password, address, email, phonenumber, level FROM user") or die(mysqli_error());
          if(mysqli_num_rows($query) == 0){
            echo '<tr><td collspan="4" align="center">Tidak ada data!</td></tr>';
          }
          else{
            $no = 1;
            while ($data = mysqli_fetch_array($query)) {
              echo '<tr>';
              echo '<td>'.$no.'</td>';
              echo '<td>'.$data['fullname'].'</td>';
              echo '<td>'.$data['username'].'</td>';
              echo '<td>'.$data['password'].'</td>';
              echo '<td>'.$data['address'].'</td>';
              echo '<td>'.$data['email'].'</td>';
              echo '<td>'.$data['phonenumber'].'</td>';
              echo '<td>'.$data['level'].'</td>';
              echo '<td><a href=../config/delete_user.php?id='.$data['id'].'><span class="glyphicon glyphicon-remove-sign">Delete</span></a></td>';
              echo '</tr>';
              $no++;
            }
          }
      ?>
    </tbody>
  </table>

  </div>