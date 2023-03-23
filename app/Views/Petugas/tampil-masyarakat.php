<?= $this->extend('/dashboard') ?>
<?= $this->section('content') ?>
<h2><i><b><u>Data Masyarakat</u></b></i></h2>
<p><i>Berikut ini daftar masyarakat aplikasi pelayanan pengaduan yang
sudah terdaftar dalam database.</i></p>
<p>
<a href="/masyarakat/tambah" class="btn btn-success
btn-sm">Tambah Masyarakat</a>
</p>
<table class="table table-sm table-hovered">
<thead class="bg-primary text-center">
<tr>
<th>No</th>
<th>NIK</th>
<th>Nama</th>
<th>Nomor Telphone</th>
<th>Aksi</th>
</tr>
</thead>
<tbody>
<?php foreach($ListMasyarakat as $key => $row): ?>
                            <tr>
                                <td><?= $key + 1 ?></td>
                                <td><?= $row['nik'] ?></td>
                                <td><?= $row['nama'] ?></td>
                                <td><?= $row['telp'] ?></td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <a href="/masyarakat/edit/<?= $row['nik']?>" class="btn btn-danger btn-sm"><i class="far fa-edit"> Edit </i></a>
                                        <a onclick="return confirm('Anda Yakin Ingin Menghapus Y/N')" href="/masyarakat/hapus/<?=$row['nik']?>" class="btn btn-secondary btn-sm"><i class="fas fa-trash-alt"> Hapus </i></a>
                                    </div>
                                </td>
                            </tr>
                            <?php endforeach;?>
</tbody>
</table>
<?= $this->endSection() ?>