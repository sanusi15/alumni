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
    <link rel="stylesheet" href="<?= base_url('assets/css/home.css'); ?>">

    <!-- font aswome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <title>WEB ALUMNI SMKN 1 ANYER</title>
</head>

<body>
    <nav id="header" class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="<?= base_url('/'); ?>" id="logo">
            <img src="assets/img/logo_smk.png" alt="">
        </a>
        <button class="navbar-toggler btn-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="<?= base_url('/'); ?>" style="color: #01839b; font-weight:700">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link" data-toggle="modal" data-target="#modalShorting" style="color: #01839b; font-weight:700">
                        Short
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= site_url('about') ?>" style="color: #01839b; font-weight:700">About</a>
                </li>
                <li class="nav-item tambah">
                    <a class="nav-link" href="<?= base_url('loginmhs'); ?>" style="color: #f08519; font-weight:500"><i class="fa fa-sign-in mr-2 ml-2"></i>Login Alumni</a>
                </li>
            </ul>
            <form autocomplete="off" class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Masukan nama..." aria-label="Search" name="keyword" id="keyword">
                <button id="cari" class="btn my-2 my-sm-0 btn-cari" type="button">Cari</button>
            </form>
        </div>
    </nav>
    <div class="container">
        <h2 id="judul" style="color: rgba(244, 106, 15, 0.49);">ALUMNI SMK N 1 ANYER</h2>
        <?php if ($this->session->flashdata('pesan')) : ?>
            <div class="alert alert-danger" style="position:absolute; top:0; z-index:3; margin-top:-30px;" role="alert">
                <?= $this->session->flashdata('pesan'); ?>
            </div>
        <?php endif; ?>
        <div id="view_card"></div>
    </div>


    <div class="modal fade" id="modalShorting" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Shorting Alumni</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p class="fw-bold ml-2" style="margin-bottom: 8px;">Jurusan :</p>
                    <select name="" id="select-jurusan" class="form-control">
                        <option selected disabled>- Pilih Jurusan -</option>
                        <option value="">Semua</option>
                        <?php foreach ($jurusan as $j) : ?>
                            <option value="<?= $j['id']; ?>"><?= $j['nama_jurusan']; ?></option>
                        <?php endforeach; ?>
                    </select>
                    <div class="dropdown-divider"></div>
                    <p class="fw-bold ml-2" style="margin-bottom: 8px;">Tahun Lulus :</p>
                    <select name="" id="select-tahun" class="form-control">
                        <option selected disabled>- Pilih Tahun -</option>
                        <option value="">Semua</option>
                        <?php foreach ($tahun as $j) : ?>
                            <option value="<?= $j['id_tahun']; ?>"><?= $j['tahun']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" data-dismiss="modal" id="btnSubmitShorting">Save changes</button>
                </div>
            </div>
        </div>
    </div>


    <!-- modal biodata -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">BIODATA SISWA</h5>
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
                    <!-- nisn -->
                    <div class="row">
                        <div class="col-sm-4">
                            <h6>NISN</h6>
                        </div>
                        <div class="col-sm-8">
                            <p id="nisn"></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <h6>No. ALumni</h6>
                        </div>
                        <div class="col-sm-8">
                            <p id="no_alumni"></p>
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
                            <h6>Tahun Ajaran</h6>
                        </div>
                        <div class="col-sm-8">
                            <p id="tahun_lulus"></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <h6>Tempat Tanggal Lahir</h6>
                        </div>
                        <div class="col-sm-8">
                            <p id="ttl"></p>
                        </div>
                    </div>
                    <!-- kontak -->
                    <div class="row">
                        <div class="col-sm-4">
                            <h6>No.Telp/WhatsApp</h6>
                        </div>
                        <div class="col-sm-8">
                            <p id="kontak"></p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                </div>
            </div>
        </div>
    </div>

    <script src="assets/js/jquery-3.2.1.slim.min.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap4.min.js"></script>

    <script>
        $(function() {
            var jurusan = '';
            var tahun_ajaran = '';

            $('#select-jurusan').change(function() {
                jurusan = $(this).val()
            })
            $('#select-tahun').change(function() {
                tahun_ajaran = $(this).val()
            })

            $('#btnSubmitShorting').click(function(e) {
                e.preventDefault()
                viewCard(jurusan, tahun_ajaran)
                $(this).parent('.modal').hide()
            })

            $('#cari').click(function(e) {
                e.preventDefault()
                var input = $('#keyword').val()
                $.ajax({
                    url: "<?= site_url('welcome/getViewCard') ?>",
                    method: "POST",
                    data: {
                        nama: input,
                    },
                    success: function(res) {
                        $('#view_card').html(res)
                    }
                })
            })


            viewCard(jurusan, tahun_ajaran)

            function viewCard(jurusan, tahun_ajaran) {
                $.ajax({
                    url: "<?= site_url('welcome/getViewCard') ?>",
                    method: "POST",
                    data: {
                        jurusan,
                        tahun_ajaran
                    },
                    success: function(res) {
                        $('#view_card').html(res)
                    }
                })
            }

        })
    </script>



</body>

</html>