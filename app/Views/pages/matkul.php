<?php
echo $this->extend('layouts/main');
echo $this->section('title');
echo 'Mata Kuliah';
echo $this->endSection();
echo $this->section('content');
?>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?= base_url('/') ?>">Home</a></li>
    <li class="breadcrumb-item active">Mata Kuliah</li>
  </ol>
</nav>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
<h1 class="h3 mb-0 text-gray-800">Data Mata Kuliah</h1>
</div>
<div class="card shadow mb-4">
<div class="card-header py-3">
<h6 class="m-0 font-weight-bold text-success">Daftar Mata Kuliah</h6>
</div>
<div class="card-body">
<div class="table-responsive">
<table class="table table-bordered table-hover" width="100%">
<thead class="thead-dark">
<tr>
<th>No</th>
<th>Kode</th>
<th>Nama Mata Kuliah</th>
<th>SKS</th>
<th>Semester</th>
</tr>
</thead>
<tbody>
<?php $no = 1; foreach ($matkul as $mk): ?>
<tr>
<td><?= $no++ ?></td>
<td><?= esc($mk['kode']) ?></td>
<td><?= esc($mk['nama']) ?></td>
<td><?= esc($mk['sks']) ?></td>
<td><?= esc($mk['semester']) ?></td>
</tr>
<?php endforeach; ?>
</tbody>
</table>
</div>
</div>
</div>
<?php echo $this->endSection(); ?>