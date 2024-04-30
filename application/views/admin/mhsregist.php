        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">List Registrasi</h1>
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
                            <div class="card">
                                <div class="card-header">
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <?php if ($this->session->flashdata('msg')) : ?>
                                        <div class="alert alert-success" role="alert">
                                            <?= $this->session->flashdata('msg'); ?>
                                        </div>
                                    <?php endif; ?>
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Status Pekerjaan</th>
                                                <th>NISN</th>
                                                <th>Nama</th>
                                                <th>Jurusan</th>
                                                <th>Tahun Lulus</th>
                                                <th class="text-center">Aksi</th>
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
                                                    <td><?= $row['tahun']; ?></td>
                                                    <td class="text-center">
                                                        <form action="<?= base_url('validasi'); ?>" method="POST">
                                                            <input type="hidden" name="nisn" value="<?= $row['nisn']; ?>">
                                                            <input type="submit" name="aksi" class="btn btn-success" value="Terima">
                                                            <input type="submit" name="aksi" class="btn btn-danger" value="Tolak">
                                                            <button type="button" class="btn btn-warning btn-detail" data-toggle="modal" data-target="#exampleModal" data-id="<?= $row['id_alumni'] ?>">Lihat Detail</button>
                                                        </form>
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
                                <td>No. Alumni</td>
                                <td>:</td>
                                <td>${res.no_alumni}</td>
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