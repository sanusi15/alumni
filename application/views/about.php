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
    <link rel="stylesheet" href="<?= base_url('assets/css/about.css'); ?>">

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
    <div class="containere">
        <p>"Selamat datang di website Alumni SMK N 1 Anyer! Kami adalah sebuah sekolah menengah kejuruan yang berdedikasi untuk memberikan pendidikan berkualitas dan persiapan karir yang kokoh bagi para siswa kami. Sejak didirikan, kami telah berkomitmen untuk menjadi tempat yang mendorong pertumbuhan akademik, pengembangan keterampilan, dan pengalaman belajar yang berharga bagi setiap siswa."</p>
        <p>"Melalui sistem yang kami buat, kami bertujuan untuk memfasilitasi pengumpulan data alumni secara efisien dan terorganisir. Setiap alumni diharapkan untuk mendaftarkan diri mereka melalui sistem ini, yang akan kemudian divalidasi oleh admin kami. Setelah berhasil lolos validasi, data alumni akan ditampilkan secara terstruktur dalam bentuk kartu pada halaman website kami. Dengan demikian, sistem ini tidak hanya memungkinkan kami untuk merangkum informasi tentang para alumni, tetapi juga memperbarui catatan kami dengan kehadiran dan prestasi terbaru mereka. Mari bergabung dan berkontribusi dalam membangun jejak prestasi alumni SMK N 1 Anyer yang membanggakan melalui sistem ini."</p>
    </div>

    <script src="assets/js/jquery-3.2.1.slim.min.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap4.min.js"></script>





</body>

</html>