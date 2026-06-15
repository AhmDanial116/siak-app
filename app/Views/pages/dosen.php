<?php
echo $this->extend('layouts/main');
echo $this->section('title');
echo 'Data Dosen';
echo $this->endSection();
echo $this->section('content');
?>

<!-- Breadcrumb -->
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?= base_url('/') ?>">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Data Dosen</li>
  </ol>
</nav>

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Data Dosen</h1>
</div>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-success">Daftar Dosen</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-hover" width="100%">
                <thead class="thead-dark">
                    <tr>
                        <th>No</th>
                        <th>NIP</th>
                        <th>Nama</th>
                        <th>Mata Kuliah Diampu</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; foreach ($dosen as $d): ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= esc($d['nip']) ?></td>
                        <td><?= esc($d['nama']) ?></td>
                        <td><?= esc($d['matkul']) ?></td>
                        <td><?= esc($d['email']) ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php echo $this->endSection(); ?>