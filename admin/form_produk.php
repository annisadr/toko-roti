
<form class="form-horizontal" method="post" action="../config/prosesproduk.php" enctype="multipart/form-data">
<fieldset>

<!-- Form Name -->
 <center><legend><h2>Tambah Data Product</h2></legend></center>
<br><br>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="kategori">Bread Name</label>  
  <div class="col-md-4">
    <input id="breadname" name="breadname" type="text" placeholder="Bread Name" class="form-control input-md">
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="harga">Harga</label>  
  <div class="col-md-4">
    <input id="harga" name="harga" type="text" placeholder="Harga" class="form-control input-md">
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="filebutton">Masukkan Gambar</label>  
  <div class="col-md-4">
  <input id="filebutton" name="fileToUpload" class="input-file" type="file">  
  </div>
</div>


<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="simpan"></label>
  <div class="col-md-8">
  <button type="submit" id="" name="simpan" class="btn btn-primary">Simpan</button>
      <button id="back" name="back" class="btn btn-danger">Back</button>
  </div>
</div>

</fieldset>
</form>
