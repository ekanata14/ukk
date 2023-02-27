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

                    <!-- Content Row -->
                    <div class="row">
                        <div class="col-6">
                        <form action="<?= BURL ?>/admin/tambahPetugasAct" method="POST">
                        <div class="form-group">  
                            <label for="username">NISN</label>
                            <input type="number" class="form-control" name="nisn">  
                        </div>
                        <div class="form-group">
                            <label for="nis">NIS</label>  
                            <input type="number" class="form-control" name="nis"> 
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama</label>  
                            <input type="text" class="form-control" name="nama"> 
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>  
                            <input type="text" class="form-control" name="alamat"> 
                        </div>
                        <div class="form-group">
                            <label for="telepon">Telepon</label>  
                            <input type="number" class="form-control" name="telepon"> 
                        </div>
                        <div class="form-group">
                            <label for="telepon">Kelas</label>   
                            <select name="kelas" id="kelas" class="form-control">
                                <?php foreach($data['kelas'] as $kelas): ?>
                                    <option value="<?= $kelas['id'] ?>"><?= $kelas['nama'] ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                        <button class="btn btn-primary mt-2 float-right" type="submit">Tambah <i class="fas fa-pen ml-1"></i></button> 
                        </div>
                       </form>
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
