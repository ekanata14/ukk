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
                        <h1 class="h3 mb-0 text-gray-800">Siswa</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Card -->
                        <?php require_once(__DIR__ . "/../partials/card.php");?>

                    <!-- Content Row -->
                    <!-- <a href="<?= BURL ?>/admin/tambahSiswa" class="btn btn-primary mb-3">Tambah Siswa</a> -->
                    <div class="row">
                    <div class="col-12 table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Tanggal</th>
                                            <th>Bulan</th>
                                            <th>Tahun</th>
                                            <th>Tahun Ajaran</th>
                                            <th>Nominal</th>
                                            <th>Siswa Id</th>
                                            <th>Petugas Id</th>
                                            <th>Pembayaran Id</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr> 
                                            <th>No</th>
                                            <th>Tanggal</th>
                                            <th>Bulan</th>
                                            <th>Tahun</th>
                                            <th>Tahun Ajaran</th>
                                            <th>Nominal</th>
                                            <th>Siswa Id</th>
                                            <th>Petugas Id</th>
                                            <th>Pembayaran Id</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php $i = 1; ?>
                                        <?php foreach($data['transaksi'] as $transaksi): ?>
                                        <tr>
                                            <td><?= $i ?></td>
                                            <td><?= $transaksi['tanggal_bayar']?></td>
                                            <td><?= $transaksi['bulan_dibayar']?></td>
                                            <td><?= $transaksi['tahun_dibayar']?></td>
                                            <td><?= $transaksi['tahun_ajaran']?></td>
                                            <td><?= $transaksi['nominal']?></td>
                                            <td><?= $transaksi['siswa_id']?></td>
                                            <td><?= $transaksi['petugas_id']?></td>
                                            <td><?= $transaksi['pembayaran_id']?></td>
                                        </tr>
                                        <?php $i++ ?>
                                        <?php endforeach ?>
                                    </tbody>
                                </table>
                            </div>
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
