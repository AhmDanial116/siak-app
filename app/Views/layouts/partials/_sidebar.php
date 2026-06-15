<!-- app/Views/layouts/partials/_sidebar.php -->
<!-- PERUBAHAN: bg-gradient-primary → bg-gradient-success (warna hijau) -->
<ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('/') ?>">
        <div class="sidebar-brand-icon rotate-n-15"><i class="fas fa-graduation-cap"></i></div>
        <div class="sidebar-brand-text mx-3">SIAK</div>
    </a>
    <hr class="sidebar-divider my-0">

    <!-- Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('/') ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i><span>Dashboard</span>
        </a>
    </li>
    <hr class="sidebar-divider">

    <div class="sidebar-heading">Akademik</div>

    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('mahasiswa') ?>">
            <i class="fas fa-fw fa-users"></i><span>Data Mahasiswa</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('matkul') ?>">
            <i class="fas fa-fw fa-book"></i><span>Mata Kuliah</span>
        </a>
    </li>

    <!-- BARU: Menu Data Dosen -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('dosen') ?>">
            <i class="fas fa-fw fa-chalkboard-teacher"></i><span>Data Dosen</span>
        </a>
    </li>

    <hr class="sidebar-divider d-none d-md-block">
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>