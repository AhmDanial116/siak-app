<?php
echo $this->extend('layouts/main');
echo $this->section('title');
echo 'Data Mahasiswa';
echo $this->endSection();
echo $this->section('content');
?>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?= base_url('/') ?>">Home</a></li>
    <li class="breadcrumb-item active">Data Mahasiswa</li>
  </ol>
</nav>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
<h1 class="h3 mb-0 text-gray-800">Data Mahasiswa</h1>
</div>
<div class="card shadow mb-4">
<div class="card-header py-3">
<h6 class="m-0 font-weight-bold text-primary">Daftar Mahasiswa</h6>
</div>
<div class="card-body">
<div class="table-responsive">
<table class="table table-bordered table-hover" width="100%">
<thead class="thead-dark">
<tr>
<th>No</th>
<th>NIM</th>
<th>Nama</th>
<th>Program Studi</th>
<th>Angkatan</th>
</tr>
</thead>
<tbody>
<?php $no = 1; foreach ($mahasiswa as $mhs): ?>
<tr>
<td><?= $no++ ?></td>
<td><?= esc($mhs['nim']) ?></td><td><?= esc($mhs['nama']) ?></td>
<td><?= esc($mhs['prodi']) ?></td>
<td><?= esc($mhs['angkatan']) ?></td>
</tr>
<?php endforeach; ?>
</tbody>
</table>
</div>
</div>
</div>
<?php echo $this->endSection(); ?>