const hapus = document.querySelectorAll('#delete');

hapus.forEach(function(el) {
    el.addEventListener('click', (e) => {
        const konfirmasi = confirm('apakah Anda Yakin ingin menghapus akun ini?');
    if (konfirmasi == false) {
        e.preventDefault();
    }
    });
})
