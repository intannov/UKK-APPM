<?= $this->extend('dashboard') ?>
<?= $this->section('content') ?>
<h2><i><b><u>Penambahan Data Masyarakat</u></b></i></h2>
<p><i>Silahkan gunakan form dibawah ini untuk mendata Masyarakat baru.</i></p>
<form method="POST" action="/masyarakat/simpan">
<div class="form-group">
<label class="font-weight-bold">Nik</label>
<input type="text" name="txtInputNik" class="form-control" placeholder="Masukan NIK" autocomplete="off" autofocus>
</div>
<div class="form-group">
<label class="font-weight-bold">Nama Lengkap</label>
<input type="text" name="txtInputNama" class="form-control" placeholder="Masukan nama lengkap" autocomplete="off">
</div>
<div class="form-group">
<label class="font-weight-bold">No Telphone</label>
<input  type="tel" id="phone"  name="txtInputTlp" class="form-control" placeholder="Masukan no telphone" autocomplete="off">
</div>
<div class="form-group">
<button class="btn btn-warning">Simpan</button>

</div>
</form>
<?= $this->endSection() ?>