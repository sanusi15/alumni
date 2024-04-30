        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Report</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="<?= base_url('tahun'); ?>">Report</a></li>
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
                        <div class="col-lg-12">
                            <!-- card -->
                            <div class="card">
                                <div class="card-header">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <h3 class="card-title"></h3>
                                        </div>
                                        <div class="col-md-10">
                                            <?php if ($this->session->flashdata('pesan')) : ?>
                                                <div class="alert alert-success text-center" style="height: 45px; background: rgba(0, 225, 0, 0.1);" role="alert">
                                                    <span class="text-green" style="font-size:15px; font-weight:500;"><?= $this->session->flashdata('pesan'); ?></span>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <form action="<?= site_url('Admin/print') ?>" method="POST">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="row">
                                                            <div class="col-md-2">
                                                                <p>Jurusan</p>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <select name="jurusan" id="jurusan" class="form-control">
                                                                    <option value="all">Semua Jurusan</option>
                                                                    <?php foreach ($jurusan as $row) : ?>
                                                                        <option value="<?= $row['id'] ?>"><?= $row['nama_jurusan'] ?></option>
                                                                    <?php endforeach; ?>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-2"></div>
                                                            <div class="col-md-2">
                                                                <p>Tahun Angkatan</p>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <select name="thn_angkatan" id="thn_angkatan" class="form-control">
                                                                    <?php foreach ($tahun as $row) : ?>
                                                                        <option value="<?= $row['id_tahun'] ?>"><?= $row['tahun'] ?></option>
                                                                    <?php endforeach; ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mt-2">
                                                    <div class="col-md-6">
                                                        <button type="submit" class="btn btn-primary float-right ">Print</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- end card -->

                        </div>
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->