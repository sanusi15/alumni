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
                                                <th>No</th>
                                                <th>Status Pekerjaan</th>
                                                <th>NSIN</th>
                                                <th>Nama</th>
                                                <th>Jurusan</th>
                                                <th>Email</th>
                                                <th>Tahun Lulus</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i = 1;
                                            foreach ($data as $row) : ?>
                                                <tr>
                                                    <td><?= $i++; ?></td>
                                                    <td><?= $row['status_pekerjaan']; ?></td>
                                                    <td><?= $row['nisn']; ?></td>
                                                    <td><?= $row['nama']; ?></td>
                                                    <td><?= $row['nama_jurusan']; ?></td>
                                                    <td><?= $row['email']; ?></td>
                                                    <td><?= $row['tahun']; ?></td>
                                                    <td>
                                                        <a href="<?= base_url('change/' . $row['nisn']); ?>" class="btn btn-success">Edit</a>
                                                        <a href="<?= base_url('delete/' . $row['nisn']); ?>" class="btn btn-danger">Hapus</a>
                                                        <button type="button" class="btn btn-warning btn-detail" data-toggle="modal" data-target="#exampleModal" data-id="<?= $row['id_alumni'] ?>">Lihat Detail</button>
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

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Detail Data Registrasi</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Kembali</button>
                    </div>
                </div>
            </div>
        </div>


        <script src="<?= site_url('assets/js/jquery-3.2.1.slim.min.js') ?>"></script>
        <script>
            $('.btn-detail').click(function(e) {
                e.preventDefault()
                var id = $(this).data('id')
                var modalBody = $('.modal-body')
                $.ajax({
                    url: "<?= site_url('welcome/getDataRegist') ?>",
                    method: "POST",
                    data: {
                        id
                    },
                    beforeSend: function() {
                        modalBody.append('<p>Loading...</p>')
                    },
                    success: function(result) {
                        modalBody.empty()
                        var res = JSON.parse(result)
                        var content = `
                        <table class="table">
                            <tr>
                                <td>Nama</td>
                                <td>:</td>
                                <td>${res.nama}</td>
                            </tr>
                            <tr>
                                <td>NISN</td>
                                <td>:</td>
                                <td>${res.nisn}</td>
                            </tr>
                            <tr>
                                <td>Status Pekerjaan</td>
                                <td>:</td>
                                <td>${res.status_pekerjaan}</td>
                            </tr>
                            <tr>
                                <td>Tahun Ajaran</td>
                                <td>:</td>
                                <td>${res.tahun}</td>
                            </tr>
                            <tr>
                                <td>Jurusan</td>
                                <td>:</td>
                                <td>${res.nama_jurusan}</td>
                            </tr>
                            <tr>
                                <td>Tempat Tanggal Lahir</td>
                                <td>:</td>
                                <td>${res.tempat_lahir}, ${res.tanggal_lahir}</td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td>:</td>
                                <td>${res.alamat}</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>:</td>
                                <td>${res.email}</td>
                            </tr>
                            <tr>
                                <td>No.Telp/WhatsApp</td>
                                <td>:</td>
                                <td>${res.kontak}</td>
                            </tr>
                        </table>
                        `;
                        modalBody.append(content)
                    }
                })

            })
        </script>