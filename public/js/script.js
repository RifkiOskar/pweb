// event pada saat link di klik
$('.page-scroll').on('click', function(e) {

    // ambil isi href
    var tujuan = $(this).attr('href');
    // ambil elemen
    var elemenTujuan = $(tujuan);

    // pindahkan scroll
    $('body').animated({
        scrollTop: elemenTujuan.offset().top - 50
    });

    e.preventDefault();

});