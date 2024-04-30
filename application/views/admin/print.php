<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Data Alumni SMK N 1 Anyer Tahun Angkatan </title>
    <style>
        body {
            margin: 0;
            padding: 0;
        }

        .table {
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        .table td,
        #table th {
            border: 1px solid #ddd;
            padding: 2px;
        }

        #table tbody tr td {
            padding: 2px;
        }


        .table th {
            color: white;
        }

        .tocenter {
            text-align: center;
        }

        .pl {
            padding-left: 10px;
            padding-top: 10px;
            padding-bottom: 10px;
        }

        .txtsmall {
            font-size: 11px;
        }

        .tableFoot {
            position: absolute;
            bottom: 0;
            margin-bottom: 120px;
        }

        .tableFoot tr {
            text-align: center;
        }

        .tableFoot tr td:nth-child(2) {
            padding-bottom: 80px;
        }
    </style>
</head>

<body>
    <div style="position: relative;">
        <table class="tableHead" width="100%">
            <tr>
                <td rowspan="2" width="10%">
                    <img src="<?= base_url('assets/img/logo_smk.png'); ?>" height="50px" alt="logo">
                </td>
                <td width="90%" colspan="3" class="tocenter tittle">Laporan Data Alumni<br>SMKN 1 Anyer</td>
            </tr>
            <tr>
                <td colspan="3" class="tocenter txtsmall">Jurusan : <?= $jurusan['nama_jurusan'] ?> <br> Tahun Angkatan <?= $tahunAngkatan['tahun']; ?></td>
            </tr>
            <tr>
                <td colspan="4" height="10px"></td>
            </tr>
        </table>
        <table class="table" width="100%">
            <tr>
                <td class="tocenter txtsmall">No</td>
                <td class="tocenter txtsmall">Status Pekerjaan</td>
                <td class="tocenter txtsmall">Nama Siswa</td>
                <td class="tocenter txtsmall">NISN</td>
                <td class="tocenter txtsmall">Jurusan</td>
                <td class="tocenter txtsmall">TTL</td>
                <td class="tocenter txtsmall">Email</td>
                <td class="tocenter txtsmall">Kontak</td>
                <td class="tocenter txtsmall">Alamat</td>
            </tr>
            <?php $i = 1;
            foreach ($data as $row) : ?>
                <tr>
                    <td class="txtsmall"><?= $i++; ?></td>
                    <td class="txtsmall"><?= $row['status_pekerjaan'] ?></td>
                    <td class="txtsmall"><?= $row['nama'] ?></td>
                    <td class="txtsmall"><?= $row['nisn'] ?></td>
                    <td class="txtsmall"><?= $row['nama_jurusan'] ?></td>
                    <td class="txtsmall"><?= $row['tempat_lahir'] ?>, <?= $row['tanggal_lahir'] ?></td>
                    <td class="txtsmall"><?= $row['email'] ?></td>
                    <td class="txtsmall"><?= $row['kontak'] ?></td>
                    <td class="txtsmall"><?= $row['alamat'] ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
    <!-- <div class="container">
        <div class="header">
            <div class="date-detail">Printed on <?= date('Y-m-d') ?> By Admin</div>
        </div>
        <div class="title">
            <p>Data Alumni SMK N 1 Anyer</p>
            <p>Tahun Angkatan : <?= $tahunAngkatan['tahun'] ?></p>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <td>No</td>
                    <td>Status Pekerjaan</td>
                    <td>Nama Siswa</td>
                    <td>NISN</td>
                    <td>Jurusan</td>
                    <td>TTL</td>
                    <td>Email</td>
                    <td>Kontak</td>
                    <td>Alamat</td>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1;
                foreach ($data as $row) : ?>
                    <tr>
                        <td><?= $i++; ?></td>
                        <td><?= $row['status_pekerjaan'] ?></td>
                        <td><?= $row['nama'] ?></td>
                        <td><?= $row['nisn'] ?></td>
                        <td><?= $row['nama_jurusan'] ?></td>
                        <td><?= $row['tempat_lahir'] ?>, <?= $row['tanggal_lahir'] ?></td>
                        <td><?= $row['email'] ?></td>
                        <td><?= $row['kontak'] ?></td>
                        <td><?= $row['alamat'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <div class="footer">
            <table>
                <tr>
                    <td>Mengetahui</td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td><u>Kepala Sekolah</u></td>
                </tr>
            </table>
        </div>
    </div> -->
</body>

</html>