<html><body>
    @foreach ($errors->all() as $error)
        <p class="error">{{ $error }}</p>
    @endforeach

    <form class="form-horizontal" role="form" method="">
        <div class="form-group">
      <label class="control-label col-sm-2" for="nama">Nama Pemohon:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="nama" placeholder="Masukkan nama">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="alamat">Alamat Pemohon:</label>
      <div class="col-sm-10">
        <textarea class="form-control" rows="5" id="alamat"></textarea>
      </div>
      </div>
      
       <div class="form-group">
      <label class="control-label col-sm-2" for="pos">Kode Pos Pemohon:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="pos">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="jenis_kel">Jenis Kelamin:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="jenis_kel">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="ttl">Tempat/Tanggal Lahir</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="ttl">
      </div>
    </div>

<div class="form-group">
      <label class="control-label col-sm-2" for="ktp">Nomor KTP</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="ktp">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="telp">No Telp/ No HP</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="telp">
      </div>
    </div>

<div class="form-group">
    <label class="control-label col-sm-2" for="email">Email Pemohon</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="email">
    </div>
  </div>

  <div class="form-group">
      <label class="control-label col-sm-2" for="kec">Kecamatan</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="kec">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="kel">Kelurahan</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="kel">
      </div>
    </div>

    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
    </form>
</body></html>