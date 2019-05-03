<div class="container">
<div class="row">

  <form action="config/prosesdaftaruser.php" method="POST" class="form-horizontal">

  <h3>Isi Data Pengiriman<hr></h3><br>    

    <div class="form-group">
      <label class="control-label col-sm-2" for="fullname">Nama Penerima:</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" id="namapenerima" name="namapenerima">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="phonenumber">Nomor Telepon:</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" id="nomortelepon" name="nomortelepon">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="address">Alamat  Pengiriman:</label>
      <div class="col-sm-5">          
        <textarea class="form-control" id="address" rows="2" name="address"></textarea>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="address">Pilih Kota:</label>
      <div class="col-sm-2">          
        <select class="form-control" id="kota">
        <option>--pilih kota--</option>
        <option>Jakarta</option>
        <option>Bekasi</option>
        <option>Bogor</option>
      </select>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="jam">Pilih Kota:</label>
      <div class="col-sm-2">          
        <select class="form-control" id="jam">
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
      <div class="col-sm-offset-2 col-sm-5">
        <button type="submit" class="btn btn-success">Pesan Sekarang</button>
        <button type="submit" class="btn btn-basic">Cancle</button>
      </div>
    </div>
  </form>
</div>
</div>


