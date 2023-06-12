function sendNim(data, a) {
    $('#exampleModal').modal("show");
    $.ajax({
        type: 'POST',
        url: 'http://localhost/wisuda/Welcome/getNim/' + data,
        data: "data" + data,
        success: function (data) {
            const isi = JSON.parse(data)
            console.log(a+isi.results.foto);
            $('#nama').html(isi.results.nama)
            $('#alamat').html(isi.results.alamat)
            $('#jurusan').html(isi.results.jurusan)
            $('#ttl').html(isi.results.tempat_lahir+","+isi.results.tgl_lahir)
            $('#email').html(isi.results.email)
            $('#kontak').html(isi.results.kontak)
            $('#judulTA').html(isi.results.judul_tugas_akhir)
            $('#message').html(isi.results.pesan)
            $('#nim').html(isi.results.nim)
            $('#no_alumni').html(isi.results.no_alumni)
            $('#thn_lulus').html(isi.results.tahun_lulus)
            $('.foto').removeAttr("href")
            $('.foto').removeAttr("src")
            $('.foto').attr("href",'http://localhost/wisuda/assets/img/'+isi.results.foto)
            $('.foto').attr("src",'http://localhost/wisuda/assets/img/'+isi.results.foto)
        }
    })
}


$(document).ready(function () {   
    // hide navbar
     var prevScrollpos = window.pageYOffset;
        window.onscroll = function() {
            var currentScrollPos = window.pageYOffset;
            if (prevScrollpos > currentScrollPos) {
            document.getElementById("header").classList.remove('show');
            }
            else { document.getElementById("header").classList.add('show');
            }
            prevScrollpos = currentScrollPos;
        }
    // hide navbar

    $('.tmbl-view').click(function () {
        const nim = $(this).data('id');
        var a = 'assets/img/';
        sendNim(nim, a);
    })

    $('#tmbhData').click(function () {
        $('#exampleModalCenter').modal('show')
    })
})