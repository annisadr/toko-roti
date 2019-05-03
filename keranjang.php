<tbody>

<?php
session_start();    
$sid = session_id();
include 'config/koneksi.php';
echo"<h1>Keranjang Belanja</h1>
          <table border=1>
          <tr>
                <th>Nama Produk</th>
                <th>Qty</th>
                <th>Harga</th>
                <th>Sub Total</th>
          </tr>
          ";  <br><br>//jalankan perintah inner join dari tabel keranjang dan produk
$query = mysqli_query($konek, "SELECT id, nama_produk, harga, subtotal FROM keranjang") or die(mysqli_error());       
while($d=mysql_fetch_array($sql)){
        $subtotal    = $d[harga]* $d[jumlah];
        $total       = $total + $subtotal;
        echo"<tr><td>$d[nama_produk]</td>
            <td>$d[jumlah]</td>
            <td>$d[harga]</td>
            <td>$subtotal</td></tr>";
}

while ($data = mysqli_fetch_array($query)) {
              $subtotal    = $d[harga]* $d[jumlah];
              $total       = $total + $subtotal;
              echo '<tr>';
              echo '<td>'.$no.'</td>';
              echo '<td>'.$data['nama_produk'].'</td>';
              echo '<td>'.$data['harga'].'</td>';
              echo '<td>'.$data['subtotal'].'</td>';
              echo '</tr>';
              $no++;
            }

echo"</table>
<h2>Total Belanja : <b>$total</b></h2>
<ul>
<li><a href='daftar_produk.php'>Tambah Barang</a></li>
<li><a href='selesai.php'>Selesai belanja</a></li>
</ul>";
?>

</tbody>