<?php /* app/Views/layouts/main.php */ ?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-
to-fit=no">

<title><?= $this->renderSection('title') ?> | SIAK</title>
<link href="<?= base_url('assets/vendor/fontawesome-free/css/all.min.css')
?>" rel="stylesheet">
<link href="<?= base_url('assets/css/sb-admin-2.min.css') ?>"
rel="stylesheet">
</head>
<body id="page-top">
<div id="wrapper">
<!-- SIDEBAR dipanggil dari file partial -->
<?= $this->include('layouts/partials/_sidebar') ?>
<div id="content-wrapper" class="d-flex flex-column">
<div id="content">
<!-- TOPBAR dipanggil dari file partial -->
<?= $this->include('layouts/partials/_topbar') ?>
<!-- KONTEN dari child view (section) -->
<div class="container-fluid">
<?= $this->renderSection('content') ?>
</div>
</div>
<!-- FOOTER dipanggil dari file partial -->
<?= $this->include('layouts/partials/_footer') ?>
</div>
</div>

<a class="scroll-to-top rounded" href="#page-top"><i class="fas fa-angle-
up"></i></a>

<script src="<?= base_url('assets/vendor/jquery/jquery.min.js') ?>"></script>
<script src="<?=
base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
<script src="<?= base_url('assets/js/sb-admin-2.min.js') ?>"></script>
<script src="<?= base_url('assets/vendor/chart.js/Chart.min.js')
?>"></script>
<?= $this->renderSection('scripts') ?>
</body>
</html>