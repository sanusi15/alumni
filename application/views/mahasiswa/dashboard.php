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
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-2"></div>
                        <div class="col-lg-8 col-md-12">
                            <!-- card -->
                            <div class="card">
                                <div class="card-header <?= $mhs['status'] == 'pending' ? 'bg-warning' : '' ?> ">
                                    <?php if ($this->session->flashdata('update')) : ?>
                                        <div class="alert alert-<?= ($this->session->flashdata('update') == 'Update Berhasil') ? 'success' : 'warning' ?>" role="alert">
                                            <?= $this->session->flashdata('update') ?>
                                        </div>
                                    <?php endif; ?>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <?php if ($mhs['status'] == 'pending') : ?>
                                                <div class="bg-warning p-2 rounded">
                                                    <p>Akun anda masih dalam tahap validasi admin, mohon menunggu..</p>
                                                </div>
                                            <?php else : ?>
                                                <button class="btn btn-primary float-right" id="btnEdit">Edit Data</button>
                                            <?php endif; ?>
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
                                    <p class="text-center mb-5">Setelah data diisi maka akan ditampilkan pada halaman utama website alumni SMK N 1 Anyer.</p>
                                    <div class="row">
                                        <div class="col-md-3 ">
                                            <div class="image d-flex justify-content-center">
                                                <img src="<?= base_url('assets/img/' . $mhs['foto']); ?>" alt="foto_mahasiswa" style="width: 200px; height: 200px; border-radius:50%;" id="foto">
                                            </div>
                                            <div class="button text-center mt-5">
                                                <form action="<?= site_url('mahasiswa/updtImage') ?>" method="POST" enctype="multipart/form-data">
                                                    <input type="file" name="foto" id="inputFoto" style="display: none;">
                                                    <button type="button" <?= $mhs['status'] == 'pending' ? 'disabled' : '' ?> class="btn btn-primary btn-sm" id="btnInputFoto">Update Foto Profile</button>
                                                    <button type="submit" class="btn btn-success btn-sm" style="display: none;" id="btnSubmitFoto">Simpan Foto Profile</button>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <form action="mahasiswa/update" method="POST">

                                                <table width="100%">
                                                    <tr>
                                                        <td>Nama</td>
                                                        <td>:</td>
                                                        <td>
                                                            <input type="text" class="form-control" readonly name="name" id="name" value="<?= $mhs['nama'] ?>">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>No. Alumni</td>
                                                        <td>:</td>
                                                        <td>
                                                            <input type="text" class="form-control" readonly name="no_alumni" id="no_alumni" value="<?= $mhs['no_alumni'] ?>">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>NISN</td>
                                                        <td>:</td>
                                                        <td>
                                                            <input type="text" class="form-control" readonly name="nisn" id="nisn" value="<?= $mhs['nisn'] ?>">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Jurusan</td>
                                                        <td>:</td>
                                                        <td>
                                                            <select name="jurusan" id="jurusan" class="form-control" disabled>
                                                                <?php foreach ($jurusan as $t) : ?>
                                                                    <option value="<?= $t['id'] ?>" <?= $mhs['jurusan'] == $t['id'] ? 'selected' : '' ?>><?= $t['nama_jurusan'] ?></option>
                                                                <?php endforeach; ?>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tahun Lulus</td>
                                                        <td>:</td>
                                                        <td>
                                                            <select name="tahun_lulus" id="tahun_lulus" class="form-control" disabled>
                                                                <?php foreach ($tahun as $t) : ?>
                                                                    <option value="<?= $t['id_tahun'] ?>" <?= $mhs['tahun_lulus'] == $t['id_tahun'] ? 'selected' : '' ?>><?= $t['tahun'] ?></option>
                                                                <?php endforeach; ?>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Email</td>
                                                        <td>:</td>
                                                        <td>
                                                            <input type="text" class="form-control" readonly name="email" id="email" value="<?= $mhs['email'] ?>">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Kontak/No WhatsApp</td>
                                                        <td>:</td>
                                                        <td>
                                                            <input type="text" class="form-control" readonly name="kontak" id="kontak" value="<?= $mhs['kontak'] ?>">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tempat Lahir</td>
                                                        <td>:</td>
                                                        <td>
                                                            <input type="text" class="form-control" readonly name="tempat_lahir" id="tempat_lahir" value="<?= $mhs['tempat_lahir'] ?>">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tanggal Lahir</td>
                                                        <td>:</td>
                                                        <td>
                                                            <input type="text" class="form-control" readonly name="tanggal_lahir" id="tanggal_lahir" value="<?= $mhs['tanggal_lahir'] ?>">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Alamat</td>
                                                        <td>:</td>
                                                        <td>
                                                            <input type="text" class="form-control" readonly name="alamat" id="alamat" value="<?= $mhs['alamat'] ?>">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Password
                                                            <span class="icon-eye" style="cursor: pointer; color: black;">
                                                                <i class="nav-icon fas fa-eye-slash"></i>
                                                            </span>

                                                        </td>
                                                        <td>:</td>
                                                        <td>
                                                            <input type="password" class="form-control" readonly name="password" id="password" value="<?= $mhs['password'] ?>">
                                                        </td>
                                                    </tr>
                                                </table>
                                                <button type="submit" class="btn btn-primary w-100 mt-4" id="btnSimpan" hidden>Simpan</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- end card -->
                        </div>
                        <div class="col-lg-2"></div>
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->


        <script src="assets/admin/plugins/jquery/jquery.min.js"></script>
        <script>
            $(function() {
                $('#btnSubmitFoto').hide()
                $('#btnInputFoto').click(function(e) {
                    e.preventDefault()
                    $('#inputFoto').click()
                })
                $('#inputFoto').change(function(e) {
                    e.preventDefault()
                    var file = e.target.files[0]
                    if (file) {
                        var reader = new FileReader
                        reader.onload = function(e) {
                            console.log(e.target.result)
                            $('#foto').attr('src', e.target.result)
                        }
                        reader.readAsDataURL(file);
                        $('#btnInputFoto').hide()
                        $('#btnSubmitFoto').show()
                    }

                })

                $('#btnEdit').click(function() {
                    var name = $('#name')
                    var no_alumni = $('#no_alumni')
                    var jurusan = $('#jurusan')
                    var tahun_lulus = $('#tahun_lulus')
                    var email = $('#email')
                    var kontak = $('#kontak')
                    var tempat_lahir = $('#tempat_lahir')
                    var tanggal_lahir = $('#tanggal_lahir')
                    var alamat = $('#alamat')
                    var password = $('#password')

                    name.removeAttr('readonly')
                    no_alumni.removeAttr('readonly')
                    jurusan.removeAttr('disabled')
                    tahun_lulus.removeAttr('disabled')
                    email.removeAttr('readonly')
                    kontak.removeAttr('readonly')
                    tempat_lahir.removeAttr('readonly')
                    tanggal_lahir.removeAttr('readonly')
                    alamat.removeAttr('readonly')
                    password.removeAttr('readonly')
                    $('#btnSimpan').removeAttr('hidden')
                })

                $('.icon-eye').click(function() {
                    $(this).toggleClass('active')
                    if ($(this).hasClass('active')) {
                        $(this).find('i').removeClass()
                        $(this).find('i').addClass('nav-icon fas fa-eye')
                        $(this).css('color', 'blue')
                        $('#password').attr('type', 'text')
                    } else {
                        $(this).find('i').removeClass()
                        $(this).find('i').addClass('nav-icon fas fa-eye-slash')
                        $(this).css('color', 'black')
                        $('#password').attr('type', 'password')
                    }
                })

            })
        </script>