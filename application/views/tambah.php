<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- mycss -->
    <link rel="stylesheet" href="<?= base_url('assets/css/tambah.css'); ?>">

    <!-- font awsome -->
    <!-- <script src="<?= base_url('assets/js/all.js'); ?>"></script> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title><?= $title; ?></title>
</head>

<body>
    <nav class="navbar navbar-dark bg-dark">
        <h4 class="text-white float-right">Tambah Data</h4>
        <span class="navbar-text">
            <a href="<?= base_url(''); ?>">
                <i class="fa fa-arrow-circle-right" style="font-size:25px;"></i>
            </a>
        </span>
    </nav>

    <div class="container">
        <div class="row mt-5">
            <div class="col-lg">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="head bg-dark mb-2">
                            <p id="judulForm">Form tambah data</p>
                        </div>
                        <div class="content">
                            <form action="<?= base_url('send'); ?>" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="nama">Nama Lengkap</label>
                                    <input type="text" autocomplete="off" class="form-control <?= (form_error('nama')) ? 'is-invalid' : ''; ?> " name="nama" id="nama">
                                    <div class="invalid-feedback">
                                        <?= form_error('nama'); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="jurusan">Jurusan</label>
                                    <select class="form-control" style="height: 33px; font-size: 13px;" name="jurusan" id="jurusan">
                                        <option value="mi">Manajemen Informatika</option>
                                        <option value="te">Teknik Elektronika</option>
                                        <option value="tm">Teknik Mesin</option>
                                        <option value="bd">Bisnis Digital</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="judulTA">Judul Tugas Akhir</label>
                                    <input type="text" autocomplete="off" class="form-control  <?= (form_error('judul')) ? 'is-invalid' : ''; ?> " name="judul">
                                    <div class="invalid-feedback">
                                        <?= form_error('judul'); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="no_alumni">Nomor Alumni</label>
                                    <input type="text" autocomplete="off" class="form-control  <?= (form_error('no_alumni')) ? 'is-invalid' : ''; ?>" name="no_alumni" id="no_alumni">
                                    <div class="invalid-feedback">
                                        <?= form_error('no_alumni'); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="nim">NIM</label>
                                    <input type="text" autocomplete="off" class="form-control <?= (form_error('nim')) ? 'is-invalid' : ''; ?> " name="nim" id="nim">
                                    <div class="invalid-feedback">
                                        <?= form_error('nim'); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="thn_lulus">Tahun Lulus</label>
                                    <input type="text" autocomplete="off" class="form-control <?= (form_error('thn_lulus')) ? 'is-invalid' : ''; ?>" name="thn_lulus" id="thn_lulus">
                                    <div class="invalid-feedback">
                                        <?= form_error('thn_lulus'); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <input type="text" autocomplete="off" class="form-control  <?= (form_error('alamat')) ? 'is-invalid' : ''; ?>" name=" alamat" id="alamat">
                                    <div class="invalid-feedback">
                                        <?= form_error('alamat'); ?>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div id="head2" class="head bg-dark mb-2">
                        </div>
                        <div class="content">
                            <div class="form-group">
                                <label for="tgl_lahir">Tanggal Lahir</label>
                                <input type="date" class="form-control <?= (form_error('tgl_lahir')) ? 'is-invalid' : ''; ?>" name="tgl_lahir" id="tgl_lahir">
                                <div class="invalid-feedback">
                                    <?= form_error('tgl_lahir'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="tempat">Tempat Lahir</label>
                                <input type="text" autocomplete="off" class="form-control  <?= (form_error('tempat')) ? 'is-invalid' : ''; ?>" name="tempat" id="tempat">
                                <div class="invalid-feedback">
                                    <?= form_error('tempat'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="no_telepn">No Telepon</label>
                                <input type="text" autocomplete="off" class="form-control  <?= (form_error('kontak')) ? 'is-invalid' : ''; ?>" name="kontak" id="no_telepn">
                                <div class="invalid-feedback">
                                    <?= form_error('kontak'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" autocomplete="off" class="form-control <?= (form_error('email')) ? 'is-invalid' : ''; ?>" name="email" id="email">
                                <div class="invalid-feedback">
                                    <?= form_error('email'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="pesan">Pesan</label>
                                <input type="text" autocomplete="off" class="form-control <?= (form_error('pesan')) ? 'is-invalid' : ''; ?>" name="pesan" id="pesan">
                                <div class="invalid-feedback">
                                    <?= form_error('pesan'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="foto">Foto</label>
                                <input type="file" style="font-size: 10px; height: 34px;" class="form-control <?= (form_error('foto')) ? 'is-invalid' : ''; ?>" name="foto" id="foto">
                                <small class="ml-2" style="color: #e30909;">Max size : 2MB</small>
                                <div class="invalid-feedback">
                                    <?= form_error('foto'); ?>
                                </div>
                            </div>
                            <button type="submit" style="margin-top: 20px;" class="btn bg-dark text-white mb-4 mt-4 float-right">Tambah</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>















    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

    <!-- ajax -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script type="text/javascript" src="<?= base_url('assets/js/myjs2.js'); ?>"></script>


</body>

</html>