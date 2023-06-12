function sendNim(data) {
    $('.modal').modal("show");
    $.ajax({
        type: 'POST',
        url: 'http://localhost/wisuda/Welcome/getNim/' + data,
        data: "data" + data,
        success: function (data) {
            const isi = JSON.parse(data)
            console.log(isi.results.nama);
            $('#nama').html(isi.results.nama)
            $('#alamat').html(isi.results.alamat)
            $('#jurusanMod').html(isi.results.jurusan)
            $('#ttl').html(isi.results.tempat_lahir+","+isi.results.tgl_lahir)
            $('#email').html(isi.results.email)
            $('#kontak').html(isi.results.kontak)
            $('#judulTA').html(isi.results.judul_tugas_akhir)
            $('#message').html(isi.results.pesan)
        }
    })
}

$(document).ready(function () {
    $('.tmbl-view').click(function () {
        const nim = $(this).data('id');
        sendNim(nim);
    });
});



