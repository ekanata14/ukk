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
                        <h1 class="h3 mb-0 text-gray-800">Kelas</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Card -->
                        <?php require_once(__DIR__ . "/../partials/card.php");?>

                    <!-- Content Row -->
                    <?php Flasher::flash();?>
                    <a href="<?= BURL ?>/admin/tambahKelas" class="btn btn-primary mb-3">Tambah Kelas</a>
                    <div class="row">
                    <div class="col-6 table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Kelas</th>
                                            <th>Kompetensi Keahlian</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr> 
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Komptensi Keahlian</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php $i = 1; ?>
                                        <?php foreach($data['kelas'] as $kelas): ?>
                                        <tr>
                                            <td><?= $i ?></td>
                                            <td><?= $kelas['nama']?></td>
                                            <td><?= $kelas['kompetensi_keahlian']?></td>
                                            <td>
                                                <a href="<?= BURL ?>/admin/editKelas/<?= $kelas['id']?>" class="btn btn-warning">Edit</a>
                                                <form action="<?= BURL?>/admin/deleteKelasAct" method="POST" class="d-inline">
                                                    <input type="hidden" name="id" value="<?= $kelas['id'] ?>">
                                                    <button class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus <?= $kelas['nama']?>?')" type="submit">Delete</button> 
                                                </form>
                                            </td>
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
