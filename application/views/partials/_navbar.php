 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<?php if ($this->session->userdata('id_level')== 1){?>
<a class="sidebar-brand d-flex align-items-center justify-content-center" href=<?= base_url('dashboard');?>>
  <div class="sidebar-brand-icon rotate-n-15">
    <i class="fas fa-id-badge"></i>
  </div>
  <div class="sidebar-brand-text mx-3">Admin</div>
</a>
<?php }?>
<?php if ($this->session->userdata('id_level')== 2){?>
<a class="sidebar-brand d-flex align-items-center justify-content-center " href=<?= base_url('dashboard');?>>
  <div class="sidebar-brand-icon rotate-n-15">
    <i class="fas fa-id-badge"></i>
  </div>
  <div class="sidebar-brand-text mx-3">Kasir</div>
</a>
<?php }?>
<?php if ($this->session->userdata('id_level')== 3){?>
<a class="sidebar-brand d-flex align-items-center justify-content-center " href=<?= base_url('dashboard');?>>
  <div class="sidebar-brand-icon rotate-n-15">
    <i class="fas fa-id-badge"></i>
  </div>
  <div class="sidebar-brand-text mx-3">Supplier</div>
</a>
<?php }?>
<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->

<li class="nav-item active">
  <a class="nav-link" href="<?= base_url('dashboard');?>">
    <i class="fas fa-fw fa-user-secret"></i>
    <span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">
<?php if ($this->session->userdata('id_level')== 1){?>
<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#website" aria-expanded="true" aria-controls="collapsePages">
    <i class="fas fa-fw fa-laptop"></i>
    <span>Website</span>
  </a>
  <div id="website" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <h6 class="collapse-header">Menu</h6>
      <a class="collapse-item" href="<?php echo site_url('Slide') ?>">Slide</a>
      <!-- <a class="collapse-item" href="<?php echo site_url('Kasir') ?>">Kasir</a>
      <a class="collapse-item" href="<?php echo site_url('Supplier') ?>">Supplier</a> -->
    </div>
  </div>
</li>
<?php }?>

<!-- Nav Item - Utilities Collapse Menu -->
<!-- <?php if ($this->session->userdata('id_level')== 2){?>
  <li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePagess" aria-expanded="true" aria-controls="collapsePagess">
  <i class="fas fa-fw fa-file-signature"></i>
    <span>Penjualan</span>
  </a>
  <div id="collapsePagess" class="collapse" aria-labelledby="headingPagess" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <h6 class="collapse-header">Menu</h6>
      <a class="collapse-item" href="<?php echo site_url('Transaksi') ?>">Transaksi</a>
      <a class="collapse-item" href="<?php echo site_url('Riwayat') ?>">Riwayat Transaksi</a>
    </div>
  </div>
</li>
  <?php }?> -->
<!-- Nav Item - Pages Collapse Menu -->
<?php if ($this->session->userdata('id_level')== 1){?>
<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
    <i class="fas fa-fw fa-user"></i>
    <span>User</span>
  </a>
  <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <h6 class="collapse-header">Menu</h6>
      <a class="collapse-item" href="<?php echo site_url('Admin') ?>">Admin</a>
      <a class="collapse-item" href="<?php echo site_url('Kasir') ?>">Kasir</a>
      <a class="collapse-item" href="<?php echo site_url('Supplier') ?>">Supplier</a>
    </div>
  </div>
</li>
<?php }?>

<!-- Nav Item - Charts -->
<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePage" aria-expanded="true" aria-controls="collapsePage">
    <i class="fas fa-fw fa-file"></i>
    <span>Laporan</span>
  </a>
  <div id="collapsePage" class="collapse" aria-labelledby="headingPage" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <h6 class="collapse-header">Menu</h6>
      <?php if ($this->session->userdata('id_level')== 1){?>
      <a class="collapse-item" href="<?php echo site_url('laporan') ?>">Laporan Pembelian</a>
      <a class="collapse-item" href="<?php echo site_url('laporan_penjualan') ?>">Laporan Penjualan</a>
      <?php }?>
      <?php if ($this->session->userdata('id_level')== 2){?>
      <a class="collapse-item" href="<?php echo site_url('laporan') ?>">Laporan Pembelian</a>
      <a class="collapse-item" href="<?php echo site_url('laporan_penjualan') ?>">Laporan Penjualan</a>
      <?php }?>
      <a class="collapse-item" href="<?php echo site_url('laporans') ?>">Laporan Supplier</a>
      <div class="collapse-divider"></div>
    </div>
  </div>
</li>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
  <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<div id="content">

  <!-- Topbar -->
  <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
      <i class="fa fa-bars"></i>
    </button>

    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">

      <!-- Nav Item - Search Dropdown (Visible Only XS) -->
      <li class="nav-item dropdown no-arrow d-sm-none">
        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-search fa-fw"></i>
        </a>
        <!-- Dropdown - Messages -->
        <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
          <form class="form-inline mr-auto w-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-success" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Nav Item - Alerts -->
      <li class="nav-item dropdown no-arrow mx-1">
        </a>
       
      <div class="topbar-divider d-none d-sm-block"></div>

      <!-- Nav Item - User Information -->
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="mr-2 d-none d-lg-inline text-gray-600 small">Log Out</span>
        </a>
        <!-- Dropdown - User Information -->
        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
         
          <a class="dropdown-item" href="<?= base_url('login/logout');?>">
          <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
            Log Out
          </a>
        </div>
      </li>

    </ul>

  </nav>
  <!-- End of Topbar -->
