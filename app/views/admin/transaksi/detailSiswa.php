    <!-- Page Wrapper -->
    <div id="wrapper">

        <?php require_once(__DIR__ . "/../partials/sidebar.php"); ?>
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

            <?php require_once(__DIR__ . "/../partials/topbar.php")?>
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Siswa | <?= $data['title'] ?></h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="card-body">
                                <h3>NISN: <?= $data['siswa']['nisn'] ?></h3>
                                <h3>NIS: <?= $data['siswa']['nis'] ?></h3>
                                <h3>Nama: <?= $data['siswa']['nama'] ?></h3>
                                <h4>Total Pembayaran: Rp. <?= $data['totalPembayaran']['total'] ?></h4>
                            </div>
                        </div>
                    </div>
                    <!-- Content Row -->
                    <?php Flasher::flash();?>
                    <div class="row">
                        <?php $i = 0 ?>
                        <?php for($i = 0; $i < count($data['bulan']); $i++): ?>
                            <?php foreach($data['transaksi'] as $transaksi): ?>
                                <?php if($transaksi['bulan_dibayar'] == $data['bulan'][$i]): ?>
                                    <div class="col-xl-3 col-md-6 mb-4">
                                        <div class="card border-left-success shadow h-100 py-2">
                                            <div class="card-body">
                                                <div class="row no-gutters align-items-center">
                                                    <div class="col mr-2">
                                                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1"></div>
                                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $data['bulan'][$i] ?></div>
                                                    </div>
                                                    <div class="col-auto">
                                                        <button class="btn btn-success">Lunas</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php $data['created'] = true; ?>
                                <?php endif ?> 
                        <?php endforeach ?>
                        <?php if(!$data['created']): ?>
                                    <div class="col-xl-3 col-md-6 mb-4">
                                        <div class="card border-left-danger shadow h-100 py-2">
                                            <div class="card-body">
                                                <div class="row no-gutters align-items-center">
                                                    <div class="col mr-2">
                                                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1"></div>
                                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $data['bulan'][$i] ?></div>
                                                    </div>
                                                    <div class="col-auto">
                                                        <form action="<?= BURL ?>/admin/transaksiAct" method="POST">
                                                            <input type="hidden" name="bulan_dibayar" value="<?= $data['bulan'][$i]?>">
                                                            <input type="hidden" name="tahun_dibayar" value="<?= date('Y') ?>">
                                                            <input type="hidden" name="siswa_id" value="<?= $data['siswa']['id_siswa']?>">
                                                            <input type="hidden" name="petugas_id" value="<?= $_SESSION['user']['id']?>">
                                                            <input type="hidden" name="pembayaran_id" value="<?= $data['siswa']['pembayaran_id']?>">
                                                            <button type="submit" class="btn btn-primary" onclick="return confirm('Bayar Bulan <?= $data['bulan'][$i]?>?')">Bayar</button> 
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>
                                <?php $data['created'] = false;?>
                        <?php endfor ?>
                    </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Modal -->
    <?php require_once(__DIR__ . "/../partials/modal.php"); ?>
