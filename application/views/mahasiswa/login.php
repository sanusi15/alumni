<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="<?= base_url('assets/css/loginmhs.css'); ?>">
</head>

<body>
    <div class="contain">
        <div class="flashdata" data-flash="<?= $this->session->flashdata('message') ?>"></div>
        <div class="card">
            <div class="left">
                <div class="logo">
                    <img src="<?= site_url('assets/img/logo_smk.png') ?>" alt="">
                </div>
            </div>
            <div class="right">
                <h1>SMK N 1 ANYER</h1>
                <h4>Silahkan Login</h4>
                <form action="<?= site_url('welcome/proseslogin') ?>" method="POST">
                    <div class="input-container">
                        <div class="input">
                            <input type="text" class="form-control" placeholder="Masukan NISN" name="nisn">
                        </div>
                        <div class="input">
                            <input type="password" class="form-control" placeholder="Masukan Password" name="password">
                        </div>
                        <div class="input">
                            <p>Belum memiliki akun? <a href="<?= site_url('welcome/daftar') ?>">daftar sekararang</a></p>
                        </div>
                        <div class="input">
                            <button type="submit" class="btn">Login</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="<?= site_url('assets/js/jquery-3.2.1.slim.min.js') ?>"></script>
    <script src="<?= site_url('assets/js/jquery.min.js') ?>"></script>
    <script src="<?= site_url('assets/js/popper.min.js') ?>"></script>
    <script src="<?= site_url('assets/js/bootstrap4.min.js') ?>"></script>
    <script src="<?= site_url('assets/js/sweatalert2.js') ?>"></script>

    <script>
        var flashdata = $('.flashdata').data('flash')
        if (flashdata != '') {
            if (flashdata == 'registrasisukses') {
                Swal.fire({
                    title: "Berhasil",
                    text: "Mohon menunggu proses validasi admin",
                    icon: "success"
                });
            } else if (flashdata == 'Login Gagal') {
                Swal.fire({
                    title: "Gagal",
                    text: "NISN atau Password tidak sesuai",
                    icon: "error"
                });
            } else if (flashdata == 'Login Ditolak') {
                Swal.fire({
                    title: "Gagal",
                    text: "Akun anda tidak lolos proses validasi admin, silahkan daftar kembali",
                    icon: "error"
                });
            }
        }
    </script>
</body>

</html>