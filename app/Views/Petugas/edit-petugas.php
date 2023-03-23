<?= $this->extend('dashboard') ?>
<?= $this->section('content') ?>
<h2><i><b><u>Perubahan Data Petugas</u></b></i></h2>
<p><i>Silahkan gunakan form dibawah ini untuk merubah data
petugas.</i></p>
<form method="POST" action=" /petugas/update ">
<div class="form-group">
<label class="font-weight-bold">Username</label>
<input type="text" name="txtInputUser" class="form-control" placeholder="Masukan username" value="<?=$detailPetugas[0]['username'];?>" readonly >
</div>
<div class="form-group">
<label class="font-weight-bold">Nama Lengkap</label>
<input type="text" name="txtInputNama" class="form-control" placeholder="Masukan nama lengkap
petugas" value="<?=$detailPetugas[0]['nama_petugas'];?>" autocomplete="off" autofocous reaquire >
</div>
<div class="form-group">
<label class="font-weight-bold">No Telphone</label>
<input type="text" name="txtInputTelp" class="form-control" placeholder="Masukan No Telphone
petugas" value="<?=$detailPetugas[0]['telp_petugas'];?>" autocomplete="off" autofocous reaquire >
</div>
<div class="form-group">
<label class="font-weight-bold">Password</label>
<input type="password" name="txtInputPassword" class="form-control" placeholder="Masukan password baru jika akan diganti" autocomplete="off">
</div>
<div class="form-group">
<label class="font-weight-bold">Level Petugas</label>
<select name="selectLevel" class="form-control">
<option <?=$detailPetugas[0]['level']=='admin' ?
'selected':null;?> value="admin">Admin</option>
<option <?=$detailPetugas[0]['level']=='petugas' ?
'selected':null;?> value="petugas">Petugas</option>
</select>
</div>
<div class="form-group">
<button class="btn btn-warning"> Update Petugas </button>
</div>
</form>
<?= $this->endSection() ?>