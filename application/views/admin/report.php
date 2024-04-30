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
                                <li class="breadcrumb-item"><a href="#">Report</a></li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    <?php if ($this->session->userdata('level') == 1) : ?>
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
                                                        <div class="col-md-12">
                                                            <div class="row">
                                                                <div class="col-md-2">
                                                                    <p>Pilih Jurusan</p>
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <select name="jurusan" id="jurusan" class="form-control">
                                                                        <option value="all">Semua Jurusan</option>
                                                                        <?php foreach ($jurusan as $row) : ?>
                                                                            <option value="<?= $row['id'] ?>"><?= $row['nama_jurusan'] ?></option>
                                                                        <?php endforeach; ?>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <p>Pilih Tahun Angkatan</p>
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <select name="thn_angkatan" id="thn_angkatan" class="form-control">
                                                                        <?php foreach ($tahun as $row) : ?>
                                                                            <option value="<?= $row['id_tahun'] ?>"><?= $row['tahun'] ?></option>
                                                                        <?php endforeach; ?>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <button type="submit" class="btn btn-primary ">Print</button>
                                                                </div>
                                                            </div>
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
                    <?php endif; ?>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <?php if ($this->session->flashdata('msgUploadReport')) : ?>
                                    <div class="alert alert-<?= ($this->session->flashdata('msgUploadReport') == 'sukses' ? 'success' : 'warning') ?>">
                                        <p>Upload report <?= $this->session->flashdata('msgUploadReport') ?></p>
                                    </div>
                                <?php endif; ?>
                                <div class="card-header">
                                    <p>List Report</p>
                                    <?php if ($this->session->userdata('level') == 1) : ?>
                                        <button class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">Tambah Report</button>
                                    <?php endif; ?>
                                </div>
                                <div class="card-body">
                                    <table class="table">
                                        <thead>
                                            <th>No</th>
                                            <th>Tanggal Report</th>
                                            <th>Keterangan</th>
                                            <th>File</th>
                                        </thead>
                                        <tbody>
                                            <?php $no = 1;
                                            foreach ($report as $rp) : ?>
                                                <tr>
                                                    <td><?= $no++; ?></td>
                                                    <td><?= $rp['tgl_report'] ?></td>
                                                    <td><?= $rp['keterangan'] ?></td>
                                                    <td><a href="<?= site_url('assets/filereport/' . $rp['file']) ?>" download class="btn btn-warning">Download File</a></td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Upload Report</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="<?= site_url('Admin/uploadReport') ?>" method="POST" enctype="multipart/form-data">
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="tgl">Tanggal Report</label>
                                <input type="date" class="form-control" name="tgl">
                            </div>
                            <div class="form-group">
                                <label for="keterangan">Keterangan</label>
                                <input type="text" class="form-control" name="keterangan">
                            </div>
                            <div class="form-group">
                                <label for="keterangan">File <small class="font-italic text-danger ml-2">*format PDF</small></label>
                                <input type="file" class="form-control" name="file">
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>