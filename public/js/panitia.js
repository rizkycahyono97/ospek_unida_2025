$(document).ready(function() {
	function showTable(table) {
		if (table === 'mahasiswa') {
			$('#tabel-mahasiswa').show();
			$('#tabel-mahasiswi').hide();
			$('#btn-mahasiswa').addClass('active');
			$('#btn-mahasiswi').removeClass('active');
		} else {
			$('#tabel-mahasiswa').hide();
			$('#tabel-mahasiswi').show();
			$('#btn-mahasiswa').removeClass('active');
			$('#btn-mahasiswi').addClass('active');
		}
	}

	// Set default state
	showTable('mahasiswa');

	// Attach event handlers
	$('#btn-mahasiswa').click(function() {
		showTable('mahasiswa');
	});
	$('#btn-mahasiswi').click(function() {
		showTable('mahasiswi');
	});
});
