        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Tambah Data</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="<?= base_url('formData'); ?>">Tambah Data</a></li>
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
                        <div class="col-lg-8 col-md-12">
                            <!-- card -->
                            <div class="card">
                                <div class="card-header">
                                    <div class="row">
                                        <div class="col-md-10">
                                            <h4>Silahkan Isi Form Di Bawah Ini</h4>
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
                                    <form action="<?= base_url('admin/save'); ?>" method="POST">
                                        <div class="form-group">
                                            <label for="nama">Nama</label>
                                            <input type="text" class="form-control <?= (form_error('nama')) ? 'is-invalid' : ''; ?>" id="nama" name="nama">
                                            <div class="invalid-feedback">
                                                <?= form_error('nama'); ?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="nim">NISN</label>
                                            <input type="text" class="form-control <?= (form_error('nisn')) ? 'is-invalid' : ''; ?>" id="nisn" name="nisn">
                                            <div class="invalid-feedback">
                                                <?= form_error('nisn'); ?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="no_alumni">Status Pekerjaan</label>
                                            <input type="text" class="form-control <?= (form_error('status_pekerjaan')) ? 'is-invalid' : ''; ?>" id="status_pekerjaan" name="status_pekerjaan">
                                            <div class="invalid-feedback">
                                                <?= form_error('status_pekerjaan'); ?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="no_alumni">Tahun Lulus</label>
                                            <select class="form-control" id="exampleFormControlSelect1" name="thn_lulus">
                                                <?php foreach ($thn as $t) : ?>
                                                    <option value="<?= $t['id_tahun']; ?>"><?= $t['tahun']; ?></option>
                                                <?php endforeach; ?>
                                            </select>

                                        </div>
                                        <div class="form-group">
                                            <label for="jurusan">Jurusan</label>
                                            <select class="form-control" id="exampleFormControlSelect1" name="jurusan">
                                                <?php foreach ($jurusan as $t) : ?>
                                                    <option value="<?= $t['id']; ?>"><?= $t['nama_jurusan']; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="tgl_lahir">Tanggal Lahir</label>
                                            <input type="date" class="form-control <?= (form_error('tgl_lahir')) ? 'is-invalid' : ''; ?>" id="tgl_lahir" name="tgl_lahir">
                                            <div class="invalid-feedback">
                                                <?= form_error('tgl_lahir'); ?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="tempat_lahir">Tempat Lahir</label>
                                            <input type="text" class="form-control <?= (form_error('tempat_lahir')) ? 'is-invalid' : ''; ?>" id="tempat_lahir" name="tempat_lahir">
                                            <div class="invalid-feedback">
                                                <?= form_error('tempat_lahir'); ?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="alamat">Alamat</label>
                                            <input type="text" class="form-control <?= (form_error('alamat')) ? 'is-invalid' : ''; ?>" id="alamat" name="alamat">
                                            <div class="invalid-feedback">
                                                <?= form_error('alamat'); ?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control <?= (form_error('email')) ? 'is-invalid' : ''; ?>" id="email" name="email">
                                            <div class="invalid-feedback">
                                                <?= form_error('email'); ?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="kontak">No Telp/WhatsApp</label>
                                            <input type="text" class="form-control <?= (form_error('kontak')) ? 'is-invalid' : ''; ?>" id="kontak" name="kontak">
                                            <div class="invalid-feedback">
                                                <?= form_error('kontak'); ?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="kontak">Password <span class="text-sm text-danger font-italic">Password Default : 123</span></label>
                                            <input type="text" class="form-control <?= (form_error('password')) ? 'is-invalid' : ''; ?>" id="password" name="password">
                                            <div class="invalid-feedback">
                                                <?= form_error('password'); ?>
                                            </div>
                                        </div>

                                        <button type="submit" class="btn btn-primary w-100">Simpan</button>
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