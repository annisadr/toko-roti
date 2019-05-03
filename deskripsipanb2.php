<?php
    if (!isset($_SESSION['id'])){
      print"
        <script>
            alert(\"Anda Harus Login\");
            history.back(-1);
        </script>";
    }
?>

<a href="index.php?page=product">Product</a> |
<a href="index.php?page=pbread">Pan Bread</a> |
Pemesanan

<div class="row">

  <div class="col-sm-4">
  	<img src="gambar/panb2.jpg">
  </div>

  
  <div class="col-sm-8">
    <h2>DOUBLE CHEESE PAN BREAD</h2><br>
    <h5>
    	Mini Pan Bread lembut berisi keju cheddar dan roll cheese yang melimpah, kaya akan rasa keju asli
    </h5>
    <h4>Rp 35.000/piece</h4><br><br>
    
    <form class="form-horizontal" action="config/prosespemesanan.php" method="POST">
    
        <div class="form-group">
            <label class="control-label col-sm-2" for="username">Username:</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" id="username" name="username" required>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="fullname">Nama Pembeli:</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" id="namapembeli" name="namapembeli" required>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="phonenumber">Nomor Telepon:</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" id="nomortelepon" name="nomortelepon" required>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="apengiriman">Alamat  Pengiriman:</label>
            <div class="col-sm-5">          
              <textarea class="form-control" id="apengiriman" rows="2" name="apengiriman" required></textarea>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="kota">Pilih Kota:</label>
            <div class="col-sm-3">          
              <select class="form-control" id="kota" name="kota" required>
                  <option>--pilih kota--</option>
                  <option>Jakarta</option>
                  <option>Bekasi</option>
                  <option>Bogor</option>
              </select>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="jamdelivery">Jam Delivery:</label>
            <div class="col-sm-3">          
              <select class="form-control" id="jamdelivery" name="jamdelivery" required>
                  <option>--jam delivery--</option>
                  <option>10:00</option>
                  <option>11:00</option>
                  <option>12:00</option>
                  <option>13:00</option>
                  <option>14:00</option>
                  <option>15:00</option>
                  <option>16:00</option>
                  <option>17:00</option>
                  <option>18:00</option>
                  <option>19:00</option>
              </select>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="qty">Quantity:</label>
            <div class="col-sm-2">          
              <select class="form-control" id="qty" name="qty" required>
                  <option>6</option>
                  <option>7</option>
                  <option>8</option>
                  <option>9</option>
                  <option>10</option>
              </select>
            </div>
            <p><i>Minimal pembelian 6pcs Roti</i></p>
        </div>

        <div class="form-group">        
            <div class="col-sm-offset-2 col-sm-5">
              <button type="submit" class="btn btn-success">Pesan Sekarang</button>
              <button type="submit" class="btn btn-basic">Cancle</button>
            </div>
        </div>
    </form>     
  </div>
  
</div>