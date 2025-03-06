$(document).ready(function() {
	// Cek apakah ada hash di URL saat halaman dimuat
	if (window.location.hash === '#mahasiswi') {
		$('#mahasiswi').show(); // Menampilkan elemen
	}

	// Fungsi untuk menampilkan kontainer sesuai pilihan
	window.showukm = function(type) {
		// Sembunyikan semua kontainer
		$('#ukm-mahasiswa, #ukm-mahasiswi').addClass('d-none');

		// Hapus underline dari kedua tombol
		$('#btn-mahasiswa, #btn-mahasiswi').removeClass('active');

		// Tampilkan yang dipilih
		$('#ukm-' + type).removeClass('d-none');
		$('#btn-' + type).addClass('active');
	};
});
