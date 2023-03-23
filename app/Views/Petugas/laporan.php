<?=$this->extend('dashboard');?>
<?=$this->section('content');?>
<h2><i><b><u>Laporan Pengaduan Masyarakat Kecamatan Kadugede</u></b></i></h2>
<p class="font-weight-bold"><i>Untuk menampilkan laporan Pengaduan Masyarakat Kecamatan Kadugede, silahkan masukan tanggal pengaduan.</i></p>

    <div class="form-group">
    <label class="font-weight-bold">Tanggal Pengaduan</label>
        <div class="input-group">
            <input type="date" class="form-control" id="txtTglPengaduan" autofocus autocomplete="off">
            <div class="input-group-append">
                <button type="button" class="btn btn-dark" id="tampilLaporan">Tampilkan</button>
            </div>
        </div>
    </div>

<div id="hasilCariLaporan">
</div>
<?=$this->endSection();?>
