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
                                <li class="breadcrumb-item"><a href="<?= base_url('formData'); ?>">Form Data</a></li>
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
                                            <h3 class="card-title">
                                                <a href="<?= base_url('create'); ?>" class="btn btn-primary">Tambah Data</a>
                                            </h3>
                                        </div>
                                        <div class="col-md-10">
                                            <?php if($this->session->flashdata('pesan')) : ?>
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
                                                <th>No</th>
                                                <th>No Alumni</th>
                                                <th>Nim</th>
                                                <th>Nama</th>
                                                <th>Jurusan</th>
                                                <th>Email</th>
                                                <th>Tahun Lulus</th>
                                                <th width="15%">Judul Tugas Akhir</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i = 1;
                                            foreach ($data as $row) : ?>
                                                <tr>
                                                    <td><?= $i++; ?></td>
                                                    <td><?= $row['no_alumni']; ?></td>
                                                    <td><?= $row['nim']; ?></td>
                                                    <td><?= $row['nama']; ?></td>
                                                    <td><?= strtoupper($row['jurusan']); ?></td>
                                                    <td><?= $row['email']; ?></td>
                                                    <td><?= $row['tahun_lulus']; ?></td>
                                                    <td width="15%"><?= $row['judul_tugas_akhir']; ?></td>
                                                    <td>
                                                        <a href="<?= base_url('change/' . $row['no_alumni']); ?>" class="btn btn-success">Edit</a>
                                                        <a href="<?= base_url('delete/' . $row['no_alumni']); ?>" class="btn btn-danger">Hapus</a>
                                                    </td>
                                                </tr>
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