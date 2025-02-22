
// show barang
function showBarang(type) {
    // Sembunyikan semua kontainer
    document.getElementById('barang-mahasiswa').classList.add('d-none');
    document.getElementById('barang-mahasiswi').classList.add('d-none');

    // Hapus underline dari kedua tombol
    document.getElementById('btn-mahasiswa').classList.remove('active');
    document.getElementById('btn-mahasiswi').classList.remove('active');

    // Tampilkan yang dipilih
    document.getElementById('barang-' + type).classList.remove('d-none');
    document.getElementById('btn-' + type).classList.add('active');
}