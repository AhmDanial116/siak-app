<?php
// app/Views/pages/dashboard.php
// Memanggil layout induk
echo $this->extend('layouts/main');
// Mengisi section 'title'
echo $this->section('title');
echo 'Dashboard';
echo $this->endSection();
// Mengisi section 'content'
echo $this->section('content');
?>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active">Home</li>
  </ol>
</nav>
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
<h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
</div>
<!-- Card Statistik -->
<div class="row">
<!-- Card Mahasiswa -->
<div class="col-xl-4 col-md-6 mb-4">
<div class="card border-left-primary shadow h-100 py-2">
<div class="card-body">
<div class="row no-gutters align-items-center">
<div class="col mr-2">
<div class="text-xs font-weight-bold text-primary text-uppercase
mb-1">
Total Mahasiswa
</div>
<div class="h5 mb-0 font-weight-bold text-gray-800">
<?= $totalMhs ?>
</div>
</div>
<div class="col-auto">
<i class="fas fa-users fa-2x text-gray-300"></i>
</div>
</div>
</div>
</div>
</div>
<!-- Card Mata Kuliah -->
<div class="col-xl-4 col-md-6 mb-4">
<div class="card border-left-success shadow h-100 py-2">
<div class="card-body">
<div class="row no-gutters align-items-center">
<div class="col mr-2">
<div class="text-xs font-weight-bold text-success text-uppercase
mb-1">Mata Kuliah
</div>
<div class="h5 mb-0 font-weight-bold text-gray-800">
<?= $totalMatkul ?>
</div>
</div>
<div class="col-auto">
<i class="fas fa-book fa-2x text-gray-300"></i>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- End Card Statistik -->
<?php echo $this->endSection(); ?>