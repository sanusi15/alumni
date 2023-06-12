<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap4.min.css"> -->

    <!-- mycss -->
    <link rel="stylesheet" href="<?= base_url('assets/css/glash2.css'); ?>">

    <!-- font aswome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <title>ALUMNI POLTEK PGRI BANTEN</title>
</head>

<body>
    <nav id="header" class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#" id="logo">
            <img src="assets/img/polgriBaru.png" style="width: 100px;" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="<?= base_url(''); ?>" style="color: #01839b; font-weight:700">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a href="" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #01839b; font-weight:700">
                        Short
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <p class="fw-bold ml-2" style="margin-bottom: 8px;">Jurusan :</p>
                        <a class="dropdown-item" href="<?= base_url('short/tm'); ?>">Teknik Mesin</a>
                        <a class="dropdown-item" href="<?= base_url('short/te'); ?>">Teknik Elektronika</a>
                        <a class="dropdown-item" href="<?= base_url('short/mi'); ?>">Manajemen Informatika</a>
                        <div class="dropdown-divider"></div>
                        <p class="fw-bold ml-2" style="margin-bottom: 8px;">Tahun Lulus :</p>
                        <a class="dropdown-item" href="<?= base_url('short/2018'); ?>">2018</a>
                        <a class="dropdown-item" href="<?= base_url('short/2019'); ?>">2019</a>
                        <a class="dropdown-item" href="<?= base_url('short/2020'); ?>">2020</a>
                        <a class="dropdown-item" href="<?= base_url('short/2021'); ?>">2021</a>
                        <a class="dropdown-item" href="<?= base_url('short/2022'); ?>">2022</a>
                        <a class="dropdown-item" href="<?= base_url('short/2023'); ?>">2023</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" style="color: #01839b; font-weight:700">About</a>
                </li>
                <li class="nav-item tambah">
                    <a class="nav-link" href="<?= base_url('tambah'); ?>" style="color: #f08519; font-weight:500"><i class="fa fa-plus-circle mr-2 ml-2"></i>Tambah</a>
                </li>
            </ul>
            <form method="post" action="<?= base_url(); ?>" autocomplete="off" class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Masukan nama..." aria-label="Search" name="keyword" id="keyword">
                <button id="cari" class="btn my-2 my-sm-0" type="submit">Cari</button>
            </form>
        </div>
    </nav>
    <div class="container">
        <h2 id="judul" style="color: rgba(244, 106, 15, 0.49);">ALUMNI POLITEKNIK PGRI BANTEN</h2>
        <?php if ($this->session->flashdata('pesan')) : ?>
            <div class="alert alert-danger" style="position:absolute; top:0; z-index:3; margin-top:-30px;" role="alert">
                <?= $this->session->flashdata('pesan'); ?>
            </div>
        <?php endif; ?>
        <?php foreach ($alumni as $row) : ?>
            <div class="card">
                <div class="content">
                    <img src="<?= base_url('assets/img/'); ?><?= $row['foto']; ?>" style="width: 70px; height:70px">
                    <h3><?= $row['nama']; ?></h3>
                    <p><?= $row['judul_tugas_akhir']; ?></p>
                    <p class="pesan">"<?= $row['pesan']; ?>"</p>
                    <button class="tmbl-view" data-id="<?= $row['nim']; ?>">Lihat</button>
                </div>
            </div>
        <?php endforeach; ?>
    </div>


    <!-- modal biodata -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">BIODATA MAHASISWA</h5>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-3">
                            <a href="" class="foto"><img class="foto"></a>
                        </div>
                        <div class="col-sm-9">
                            <h2 id="nama"></h2>
                            <p id="alamat"></p>
                        </div>
                    </div>
                    <hr>
                    <!-- ttl -->
                    <div class="row">
                        <div class="col-sm-4">
                            <h6>Tempat tanggal lahir </h6>
                        </div>
                        <div class="col-sm-8">
                            <p id="ttl"></p>
                        </div>
                    </div>
                    <!-- judul TA -->
                    <div class="row">
                        <div class="col-sm-4">
                            <h6>Judul TA</h6>
                        </div>
                        <div class="col-sm-8">
                            <p id="judulTA"></p>
                        </div>
                    </div>
                    <!-- jurusan -->
                    <div class="row">
                        <div class="col-sm-4">
                            <h6>Jurusan</h6>
                        </div>
                        <div class="col-sm-8">
                            <p id="jurusan"></p>
                        </div>
                    </div>

                    <!-- nim -->
                    <div class="row">
                        <div class="col-sm-4">
                            <h6>NIM</h6>
                        </div>
                        <div class="col-sm-8">
                            <p id="nim"></p>
                        </div>
                    </div>
                    <!-- no.alumni -->
                    <div class="row">
                        <div class="col-sm-4">
                            <h6>No. alumni</h6>
                        </div>
                        <div class="col-sm-8">
                            <p id="no_alumni"></p>
                        </div>
                    </div>
                    <!-- thn lulus -->
                    <div class="row">
                        <div class="col-sm-4">
                            <h6>Tahun lulus</h6>
                        </div>
                        <div class="col-sm-8">
                            <p id="thn_lulus"></p>
                        </div>
                    </div>
                    <!-- kontak -->
                    <div class="row">
                        <div class="col-sm-4">
                            <h6>Kontak</h6>
                        </div>
                        <div class="col-sm-8">
                            <p id="kontak"></p>
                        </div>
                    </div>
                    <!-- pesan -->
                    <div class="row">
                        <div class="col-sm-4">
                            <h6>Pesan</h6>
                        </div>
                        <div class="col-sm-8">
                            <p id="message" style="font-style: italic;"></p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                </div>
            </div>
        </div>
    </div>

    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
    <script src="assets/js/jquery-3.2.1.slim.min.js"></script>

    <!-- ajax -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
    <script src="assets/js/jquery.min.css"></script>


    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> -->
    <script src="assets/js/popper.min.js"></script>

    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->
    <script src="assets/js/bootstrap4.min.js"></script>

    <script type="text/javascript" src="<?= base_url('assets/js/myjs2.js'); ?>"></script>


    <script type="text/javascript" src="<?= base_url('assets/js/vanilla-tilt.js'); ?>"></script>
    <script>
        VanillaTilt.init(document.querySelectorAll(".card"), {
            max: 25,
            speed: 400,
            glare: 1,
        });
    </script>



</body>

</html>