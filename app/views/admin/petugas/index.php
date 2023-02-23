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
                        <h1 class="h3 mb-0 text-gray-800">Petugas</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Card -->
                        <?php require_once(__DIR__ . "/../partials/card.php");?>

                    <!-- Content Row -->
                    <a href="<?= BURL ?>/admin/tambahPetugas" class="btn btn-primary mb-3">Tambah Petugas</a>
                    <div class="row">
                    <div class="col-6 table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Id Pengguna</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr> 
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Id Pengguna</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php $i = 1; ?>
                                        <?php foreach($data['petugas'] as $petugas): ?>
                                        <tr>
                                            <td><?= $i ?></td>
                                            <td><?= $petugas['nama']?></td>
                                            <td><?= $petugas['pengguna_id']?></td>
                                            <td>
                                                <a href="<?= BURL ?>/admin/editPetugas/<?= $petugas['id']?>" class="btn btn-warning">Edit</a>
                                                <form action="<?= BURL?>/admin/deletePetugas" method="POST" class="d-inline">
                                                    <input type="hidden" name="id" value="<?= $petugas['pengguna_id'] ?>">
                                                    <button class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus <?= $petugas['nama']?>?')" type="submit">Delete</button> 
                                                </form>
                                            </td>
                                        </tr>
                                        <?php $i++ ?>
                                        <?php endforeach ?>
                                    </tbody>
                                </table>
                            </div>
                       <!-- <div class="col-6 table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <th>Nama</th>
                                <th>Pengguna_id</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                <?php foreach($data['users'] as $user):?>
                                    <tr>
                                        <td><?= $user['nama']?></td>
                                        <td><?= $user['pengguna_id']?></td>
                                        <td>
                                            <a href="" class="btn btn-warning">Edit</a>
                                            <form action="<?= BURL?>/admin/deletePetugas" class="d-inline">
                                            <input type="hidden" value="<?= $user['id']?>">
                                            <button class="btn btn-danger" onclick="returnconfirm('Yakin ingin menghapus <?= $user['nama']?>?'">Delete</button> 
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                       </div>  -->
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

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>
