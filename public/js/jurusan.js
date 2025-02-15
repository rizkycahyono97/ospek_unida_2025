// $(document).ready(function() {
// 	let slider = $('.fakultas-banner .slider');

// 	$('.fakultas-banner .slider .item').on('mousedown', function() {
// 		slider.css('animation-play-state', 'paused');
// 	});

// 	$(document).on('mouseup', function() {
// 		slider.css('animation-play-state', 'running');
// 	});

// 	console.log('cek');
// });

$(document).ready(function() {
	let isDragging = false;
	let startX,
		currentRotation = 0;

	$('.slider').on('mousedown touchstart', function(e) {
		e.preventDefault();
		isDragging = true;
		startX = e.pageX || e.originalEvent.touches[0].pageX;
		$('.slider').css('animation', 'none'); // Hentikan animasi otomatis
	});

	$(document).on('mousemove touchmove', function(e) {
		if (isDragging) {
			let moveX = (e.pageX || e.originalEvent.touches[0].pageX) - startX;
			currentRotation += moveX * 0.2; // Sensitivitas rotasi
			$('.slider').css(
				'transform',
				`perspective(1200px) rotateX(-2deg) rotateY(${currentRotation}deg)`
			);
			startX = e.pageX || e.originalEvent.touches[0].pageX;
		}
	});

	$(document).on('mouseup touchend', function() {
		isDragging = false;
		$('.slider').css('animation', 'autoRun 49s linear infinite'); // Kembali ke animasi otomatis
	});
});
