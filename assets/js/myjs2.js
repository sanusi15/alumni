var url = $('#base_url').data('url')

function sendNim(data) {
    $('#exampleModal').modal("show");
    $.ajax({
        type: 'POST',
        url: url + 'welcome/getDetailCard',
        data: { "data": data },
        success: function (data) {
            const isi = JSON.parse(data)     
            console.log(isi.tempat_lahir)
            $('#nama').html(isi.nama)
            $('#alamat').html(isi.alamat)
            $('#jurusan').html(isi.nama_jurusan)
            $('#ttl').html(isi.tempat_lahir+","+isi.tanggal_lahir)
            $('#email').html(isi.email)
            $('#kontak').html(isi.kontak)
            $('#judulTA').html(isi.judul_tugas_akhir)
            $('#message').html(isi.pesan)
            $('#nisn').html(isi.nisn)
            $('#no_alumni').html(isi.no_alumni)
            $('#tahun_lulus').html(isi.tahun)
            $('.foto').removeAttr("href")
            $('.foto').removeAttr("src")
            $('.foto').attr("href", url + 'assets/img/'+isi.foto)
            $('.foto').attr("src", url + 'assets/img/'+isi.foto)
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
        sendNim(nim);
    })

    $('#tmbhData').click(function () {
        $('#exampleModalCenter').modal('show')
    })
})