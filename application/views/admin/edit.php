        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Edit Data</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="<?= base_url('formData'); ?>">Edit Data</a></li>
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
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <form action="<?= site_url('admin/update') ?>" method="POST" enctype="multipart/form-data">
                                        <table class="table table-bordered table-striped">
                                            <tr>
                                                <td>Nama</td>
                                                <td>:</td>
                                                <td>
                                                    <input type="text" class="form-control invalid" id=" validationCustom01" value="<?= $res['nama'] ?>" name="nama" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>NISN</td>
                                                <td>:</td>
                                                <td><input type="text" class="form-control" value="<?= $res['nisn'] ?>" name="nisn" /></td>
                                            </tr>
                                            <tr>
                                                <td>Status Pekerjaan</td>
                                                <td>:</td>
                                                <td><input type="text" class="form-control" value="<?= $res['status_pekerjaan'] ?>" name="status_pekerjaan" /></td>
                                            </tr>
                                            <tr>
                                                <td>Tahun Ajaran</td>
                                                <td>:</td>
                                                <td>
                                                    <select class="form-control" name="tahun_lulus">
                                                        <?php foreach ($tahun as $t) : ?>
                                                            <option value="<?= $t['id_tahun'] ?>" <?= ($t['id_tahun'] == $res['tahun_lulus'] ? 'selected' : '') ?>><?= $t['tahun'] ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Jurusan</td>
                                                <td>:</td>
                                                <td>
                                                    <select name="jurusan" class="form-control" name="jurusan">
                                                        <?php foreach ($jurusan as $t) : ?>
                                                            <option value="<?= $t['id'] ?>" <?= ($t['id'] == $res['jurusan'] ? 'selected' : '') ?>><?= $t['nama_jurusan'] ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Tanggal Lahir</td>
                                                <td>:</td>
                                                <td><input type="date" class="form-control" value="<?= $res['tanggal_lahir'] ?>" name="tanggal_lahir" /></td>
                                            </tr>
                                            <tr>
                                                <td>Tempat Lahir</td>
                                                <td>:</td>
                                                <td><input type="text" class="form-control" value="<?= $res['tempat_lahir'] ?>" name="tempat_lahir" /></td>
                                            </tr>
                                            <tr>
                                                <td>Alamat</td>
                                                <td>:</td>
                                                <td><input type="text" class="form-control" value="<?= $res['alamat'] ?>" name="alamat" /></td>
                                            </tr>
                                            <tr>
                                                <td>Email</td>
                                                <td>:</td>
                                                <td><input type="text" class="form-control" value="<?= $res['email'] ?>" name="email" /></td>
                                            </tr>
                                            <tr>
                                                <td>No.Telp/WhatsApp</td>
                                                <td>:</td>
                                                <td><input type="text" class="form-control" value="<?= $res['kontak'] ?>" name="kontak" /></td>
                                            </tr>
                                            <tr>
                                                <td>Foto</td>
                                                <td>:</td>
                                                <td><input type="file" class="form-control" name="foto" /></td>
                                            </tr>
                                        </table>
                                        <button type="submit" class="btn btn-primary float-right">Update Data</button>
                                    </form>
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