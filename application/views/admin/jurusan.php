        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Form Data</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="<?= base_url('jurusan'); ?>">Form Jurusan</a></li>
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
                        <div class="col-lg-6">
                            <!-- card -->
                            <div class="card">
                                <div class="card-header">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <h3 class="card-title">
                                                <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Tambah Data</button>
                                            </h3>
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
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th class="text-center">No</th>
                                                <th>Jurusan</th>
                                                <th class="text-center">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i = 1;
                                            foreach ($jurusan as $row) : ?>
                                                <tr>
                                                    <td class="text-center"><?= $i++; ?></td>
                                                    <td><?= $row['nama_jurusan']; ?></td>
                                                    <td class="text-center">
                                                        <button class="btn btn-success" data-toggle="modal" data-target="#exampleModal<?= $row['id']; ?>">Edit</button>
                                                        <button class="btn btn-danger" data-toggle="modal" data-target="#hapus<?= $row['id']; ?>">Hapus</button>
                                                    </td>
                                                </tr>
                                                <div class="modal fade" id="exampleModal<?= $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Edit Jurusan</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form action="<?= base_url('jurusan/update'); ?>" method="post">
                                                                    <div class="form-group">
                                                                        <label for="nama">Nama Jurusan</label>
                                                                        <input type="text" class="form-control" name="nama" required value="<?= $row['nama_jurusan']; ?>">
                                                                        <input type="hidden" name="id" value="<?= $row['id']; ?>">
                                                                    </div>
                                                                    <button type="submit" class="btn btn-primary float-right">Simpan</button>
                                                                </form>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal fade" id="hapus<?= $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Hapus Jurusan</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form action="<?= base_url('jurusan/delete'); ?>" method="post">
                                                                    <div class="form-group">
                                                                        <label for="nama">Apa Kamu Yakin?</label>
                                                                        <input type="hidden" name="id" value="<?= $row['id']; ?>">
                                                                    </div>
                                                                    <button type="submit" class="btn btn-danger float-right mx-2">Hapus</button>
                                                                    <button type="submit" class="btn btn-primary float-right" data-dismiss="modal">Batal</button>
                                                                </form>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
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


        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Jurusan</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="<?= base_url('jurusan/simpan'); ?>" method="post">
                            <div class="form-group">
                                <label for="nama">Nama Jurusan</label>
                                <input type="text" class="form-control" name="nama" required placeholder="masukan nama jurusan">
                            </div>
                            <button type="submit" class="btn btn-primary float-right">Simpan</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>