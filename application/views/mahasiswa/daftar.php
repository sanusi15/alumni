<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="<?= base_url('assets/css/daftarmhs.css'); ?>">
</head>

<body>
    <div class="contain">
        <div class="card ">
            <div class="atas">
                <div class="logo">
                    <img src="<?= base_url('assets/img/logo_smk.png'); ?>" alt="">
                </div>
                <h4>Form Registrasi Alumni SMK N 1 ANYER</h4>
            </div>
            <div class="bawah">
                <p class="info">Silahkan Isi Form Di Bawah Ini</p>
                <form action="<?= base_url('welcome/regist'); ?>" method="POST">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control <?= (form_error('nama')) ? 'is-invalid' : ''; ?>" id="nama" name="nama">
                        <div class="invalid-feedback">
                            <?= form_error('nama'); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nim">NISN</label>
                        <input type="text" class="form-control <?= (form_error('nim')) ? 'is-invalid' : ''; ?>" id="nisn" name="nisn">
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
                        <label for="kontak">Password <span class="text-sm text-danger font-italic">Mohon diingat password anda</span></label>
                        <input type="text" class="form-control <?= (form_error('password')) ? 'is-invalid' : ''; ?>" id="password" name="password">
                        <div class="invalid-feedback">
                            <?= form_error('password'); ?>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary w-100">Daftar</button>
                    <small id="emailHelp" class="form-text text-muted text-center mt-3">Sudah memiliki akun? <a href="<?= base_url('welcome/login'); ?>">Login</a></small>
                </form>

            </div>
        </div>
    </div>

    <script src="<?= site_url('assets/js/jquery-3.2.1.slim.min.js') ?>"></script>
    <script src="<?= site_url('assets/js/jquery.min.js') ?>"></script>
    <script src="<?= site_url('assets/js/popper.min.js') ?>"></script>
    <script src="<?= site_url('assets/js/bootstrap4.min.js') ?>"></script>

    <script>

    </script>
</body>

</html>