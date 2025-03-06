// show outfit
function showoutfit(type) {
	// Sembunyikan semua kontainer
	document.getElementById('outfit-mahasiswa').classList.add('d-none');
	document.getElementById('outfit-mahasiswi').classList.add('d-none');

	// Hapus underline dari kedua tombol
	document.getElementById('btn-mahasiswa').classList.remove('active');
	document.getElementById('btn-mahasiswi').classList.remove('active');

	// Tampilkan yang dipilih
	document.getElementById('outfit-' + type).classList.remove('d-none');
	document.getElementById('btn-' + type).classList.add('active');
}
