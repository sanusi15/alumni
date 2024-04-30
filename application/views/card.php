<div id="base_url" data-url="<?= site_url() ?>"></div>
<?php foreach ($alumni as $row) : ?>
    <div class="card-alumni">
        <div class="content">
            <img src="<?= base_url('assets/img/') ?><?= $row['foto']; ?>" style="width: 70px; height:70px">
            <h3><?= $row['nama']; ?></h3>
            <p>Angkatan <?= $row['tahun'] ?></p>
            <p class="pesan">"<?= $row['nama_jurusan'] ?>"</p>
            <button class="tmbl-view" data-id="<?= $row['nisn']; ?>">Lihat</button>
        </div>
    </div>
<?php endforeach; ?>

<script type="text/javascript" src="<?= base_url('assets/js/myjs2.js'); ?>"></script>
<script type="text/javascript" src="<?= base_url('assets/js/vanilla-tilt.js'); ?>"></script>
<script>
    VanillaTilt.init(document.querySelectorAll(".card-alumni"), {
        max: 25,
        speed: 400,
        glare: 1,
    });
</script>