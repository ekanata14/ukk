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
                        <h1 class="h3 mb-0 text-gray-800">Petugas | <?= $data['title'] ?></h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>

                    <!-- Content Row -->
                    <div class="row">
                        <div class="col-6">
                        <form action="<?= BURL ?>/admin/editPetugasAct" method="POST">
                        <input type="hidden" name="id" value="<?= $data['petugas']['id'] ?>"> 
                        <input type="hidden" name="pengguna_id" value="<?= $data['petugas']['pengguna_id'] ?>"> 
                        <div class="form-group">  
                            <label for="username">Username</label>
                            <input type="text" class="form-control" name="username" value="<?= $data['petugas']['nama'] ?>">  
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>  
                            <input type="password" class="form-control" name="pass" value="<?= $data['petugas']['pass'] ?>"> 
                        </div> 
                        <button class="btn btn-warning mt-2 float-right" type="submit">Edit <i class="fas fa-pen ml-1"></i></button> 
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

    <!-- Modal -->
    <?php require_once(__DIR__ . "/../partials/modal.php");
