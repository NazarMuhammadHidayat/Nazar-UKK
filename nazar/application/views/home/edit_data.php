<div class="container fluid">

<h3>Halaman Tambah Data</h3>
<hr>
<br>

<form method="post" action="<?php echo base_url('home/proses_edit_data/') ?>">

<input type="hidden" name="nisn" value="<?php echo $peserta['nisn']; ?>">


  <div class="row mb-3">
    <label for="nama_peserta" class="col-sm-2 col-form-label">Nama</label>
    <div class="col-sm-5">
      <input type="tex" class="form-control" name="nama_peserta"
      required="" value="<?php echo $peserta['nama_peserta'];?>">
    </div>
  </div>


<div class="row mb-3">
    <label for="jenis_kelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
    <div class="col-sm-5">
      <input type="tex" class="form-control" name="jenis_kelamin"
      required="" value="<?php echo $peserta['jenis_kelamin'];?>">
    </div>
  </div>


<div class="row mb-3">
    <label for="no_hp" class="col-sm-2 col-form-label">No Hp</label>
    <div class="col-sm-5">
      <input type="number" class="form-control" name="no_hp"
      required="" value="<?php echo $peserta['no_hp'];?>">
    </div>
  </div>


<div class="row mb-3">
    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
    <div class="col-sm-5">
      <input type="tex" class="form-control" name="alamat"
      required="" value="<?php echo $peserta['alamat'];?>">
    </div>
  </div>




 
    <div class="col-sm-5">
        <button type ="submit" class="btn btn-primary">Selesai</button>
        <button type ="reset" class="btn btn-danger">Reset</button>
      
    </div>
  </div
  >
</from>
</div>