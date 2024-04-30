        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Dashboard</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="<?= base_url('dashboard'); ?>">Dashboard</a></li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <?php if ($this->session->userdata('level') == 1) : ?>
                            <div class="col-lg-3">
                                <div class="card" style="border-radius: 20px;">
                                    <div class="card-top p-2 text-center" style="background: #24b8f2; border-radius: 20px;">
                                        <p class="text-white text-bold">Registrasi Baru</p>
                                    </div>
                                    <a href="<?= site_url('mhsRegist') ?>" class="text-dark">
                                        <div class="card-body text-center">
                                            <h3><?= $jml_r; ?> Orang</h3>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        <?php endif; ?>
                        <div class="col-lg-3">
                            <div class="card" style="border-radius: 20px;">
                                <div class="card-top p-2 text-center" style="background: tomato; border-radius: 20px;">
                                    <p class="text-white text-bold">Jumlah Alumni</p>
                                </div>
                                <a href="<?= site_url('formData') ?>" class="text-dark">
                                    <div class="card-body text-center">
                                        <h3><?= $jml_m; ?> Orang</h3>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <?php if ($this->session->userdata('level') == 1) : ?>
                            <div class="col-lg-3">
                                <div class="card" style="border-radius: 20px;">
                                    <div class="card-top p-2 text-center" style="background: #3477eb; border-radius: 20px;">
                                        <p class="text-white text-bold">Jumlah Jurusan</p>
                                    </div>
                                    <a href="<?= site_url('jurusan') ?>" class="text-dark">
                                        <div class="card-body text-center">
                                            <h3><?= $jml_j; ?> Jurusan</h3>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        <?php endif; ?>
                        <?php if ($this->session->userdata('level') == 1) : ?>
                            <div class="col-lg-3">
                                <div class="card" style="border-radius: 20px;">
                                    <div class="card-top p-2 text-center" style="background: #34eb6b; border-radius: 20px;">
                                        <p class="text-white text-bold">Jumlah Tahun Lulus</p>
                                    </div>
                                    <a href="<?= site_url('tahun') ?>" class="text-dark">
                                        <div class="card-body text-center">
                                            <h3><?= $jml_t; ?></h3>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->