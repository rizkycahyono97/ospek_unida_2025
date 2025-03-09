$(document).ready(function() {
	// Set default tampilan, hanya menampilkan "maklumat"
	$('#maklumat').show();
	$('#tabel-mahasiswa, #tabel-mahasiswi').hide();
	$('.btn-group .btn').removeClass('active');
	$('#btn-maklumat').addClass('active');

	// Fungsi untuk menampilkan tabel sesuai tombol yang ditekan
	function showTable(id) {
		// Sembunyikan semua
		$('#maklumat, #tabel-mahasiswa, #tabel-mahasiswi').hide();
		$('.btn-group .btn').removeClass('active');

		// Tampilkan yang sesuai dengan tombol yang ditekan
		if (id === 'maklumat') {
			$('#maklumat').show();
			$('#btn-maklumat').addClass('active');
		} else if (id === 'mahasiswa') {
			$('#tabel-mahasiswa').show();
			$('#btn-mahasiswa').addClass('active');
		} else if (id === 'mahasiswi') {
			$('#tabel-mahasiswi').show();
			$('#btn-mahasiswi').addClass('active');
		}
	}

	// Event listener tombol
	$('.btn-group .btn').click(function() {
		let id = $(this).attr('id').replace('btn-', ''); // Ambil id tombol tanpa "btn-"
		showTable(id);
	});
});
