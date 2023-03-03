<!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= BURL ?>/admin">
                <div class="sidebar-brand-icon rotate-n-15">
                    <!-- <i class="fas fa-laugh-wink"></i> -->
                </div>
                <div class="sidebar-brand-text mx-3">Bayar Pajak</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item <?= ($data['section'] == 'dashboard') ? 'active' : '' ?>">
                <a class="nav-link" href="<?= BURL ?>/admin">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
               Menus 
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item <?= ($data['section'] == 'petugas') ? 'active' : '' ?>">
                <a class="nav-link collapsed" href="<?= BURL ?>/admin/petugas">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Petugas</span>
                </a>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item <?= ($data['section'] == 'siswa') ? 'active' : '' ?>">
                <a class="nav-link collapsed" href="<?= BURL ?>/admin/siswa">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Siswa</span>
                </a>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item <?= ($data['section'] == 'kelas') ? 'active' : '' ?>">
                <a class="nav-link collapsed" href="<?= BURL ?>/admin/kelas">
                    <i class="fas fa-fw fa-building"></i>
                    <span>Kelas</span>
                </a>
            </li>

            <li class="nav-item <?= ($data['section'] == 'pembayaran') ? 'active' : '' ?>">
                <a class="nav-link collapsed" href="<?= BURL ?>/admin/pembayaran">
                    <i class="fas fa-fw fa-money-bill-wave"></i>
                    <span>Pembayaran</span>
                </a>
            </li>

            <li class="nav-item <?= ($data['section'] == 'transaksi') ? 'active' : '' ?>">
                <a class="nav-link collapsed" href="<?= BURL ?>/admin/transaksi">
                    <i class="fas fa-fw fa-cash-register"></i>
                    <span>Transaksi</span>
                </a>
            </li> 
            <li class="nav-item <?= ($data['section'] == 'history_transaksi') ? 'active' : '' ?>">
                <a class="nav-link collapsed" href="<?= BURL ?>/admin/historyTransaksi">
                    <i class="fas fa-fw fa-clock"></i>
                    <span>History Transaksi</span>
                </a>
            </li> 

            <!-- Divider -->
            <hr class="sidebar-divider">

            </ul>
        <!-- End of Sidebar -->

