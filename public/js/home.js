document.addEventListener("DOMContentLoaded", () => {
  const homeSectionSatu = document.getElementById("home-section-1");
  const homeSectionDua = document.getElementById("home-section-2");
  const logo = document.getElementById("logo-ospek");
  const textKiri = document.getElementById("text-kiri");
  const textKanan = document.getElementById("text-kanan");
  const waveSvg = document.getElementById("intro");
  const waveSvgDua = document.getElementById("wave-2");

  // responsive
  const breakpoints = {
    smallPhone: "(max-width: 480px)",          // Smartphone kecil
    largePhone: "(min-width: 481px) and (max-width: 767px)", // Smartphone besar
    tablet: "(min-width: 768px) and (max-width: 1024px)",    // Tablet
    smallLaptop: "(min-width: 1025px) and (max-width: 1440px)", // Laptop sedang
    desktop: "(min-width: 1441px) and (max-width: 1920px)",     // Desktop
    largeMonitor: "(min-width: 1921px)",       // Monitor besar
  };


  // --------------
  // section 1
  // --------------

  // power2.out animation
  // Animasi teks "OSPEK"
  gsap.matchMedia().add(breakpoints.desktop, () => {
    gsap.fromTo(
      textKiri,
      // Posisi awal (kiri agak atas, transparan)
      { x: -1400, 
        y: -300,  
      }, 
      // Posisi akhir (tengah, terlihat)
      { x: -500, 
        y: 0,  
        duration: 2, 
        delay: 2.3, 
        ease: "power2.out" } 
    );
  });

  gsap.matchMedia().add(breakpoints.smallLaptop, () => {
    gsap.fromTo(textKiri, {x: -900, y: -150}, {x: -350, y:0, duration: 2, delay: 2.3, ease: "power2.out"});
  });
    
  gsap.matchMedia().add(breakpoints.tablet, () => {
    gsap.fromTo(textKiri, {x: -700, y: -100}, {x: -280, y:0, duration: 2, delay: 2.3, ease: "power2.out"});
  });

  gsap.matchMedia().add(breakpoints.largePhone, () => {
    gsap.fromTo(textKiri, {x: -550, y: -70}, {x: -200, y:0, duration: 2, delay: 2.3, ease: "power2.out"});
  });

  gsap.matchMedia().add(breakpoints.smallPhone, () => {
    gsap.fromTo(textKiri, {x: -350, y: -80}, {x: -70, y:-170, duration: 2, delay: 2.3, ease: "power2.out"});
  });
    
  // Animasi teks "2025"
  gsap.matchMedia().add(breakpoints.desktop, () => {
    gsap.fromTo(
      textKanan,
      // Posisi awal (kanan agak atas, transparan)
      { x: 1400, 
        y: -300,  
      }, 
      // Posisi akhir (tengah, terlihat)
      { x: 500, 
        y: 0,  
        duration: 2, 
        delay: 2.3, 
        ease: "power2.out"} 
    );
  });

  gsap.matchMedia().add(breakpoints.smallLaptop, () => {
    gsap.fromTo(textKanan, {x: 900, y: -150}, {x: 350, y:0, duration: 2, delay: 2.3, ease: "power2.out"});
  });

  gsap.matchMedia().add(breakpoints.tablet, () => {
    gsap.fromTo(textKanan, {x: 700, y: -100}, {x: 280, y:0, duration: 2, delay: 2.3, ease: "power2.out"});
  });

  gsap.matchMedia().add(breakpoints.largePhone, () => {
    gsap.fromTo(textKanan, {x: 550, y: -70}, {x: 200, y:0, duration: 2, delay: 2.3, ease: "power2.out"});
  });

  gsap.matchMedia().add(breakpoints.smallPhone, () => {
    gsap.fromTo(textKanan, {x: 350, y: -60}, {x: 70, y:-170, duration: 2, delay: 2.3, ease: "power2.out"});
  });


  // logo ospek
  // gsap.fromTo(
  //   logo,
  //   { scale: 2 }, // Starting state (besar)
  //   { 
  //     scale: 1.2,       // Ending state (kecil)
  //     duration: 5,    // Durasi animasi mengecil
  //     delay: 1.5,       // Waktu berhenti sebelum mulai mengecil
  //     ease: "power2.out" 
  //   }
  // );

  // Tambahkan animasi berdasarkan breakpoint
  gsap.matchMedia().add(breakpoints.smallPhone, () => {
    gsap.fromTo(logo, { scale: 1.5 }, { scale: 1, duration: 5, delay: 1.5, ease: "power2.out" });
  });

  gsap.matchMedia().add(breakpoints.largePhone, () => {
    gsap.fromTo(logo, { scale: 1.8 }, { scale: 1, duration: 5, delay: 1.5, ease: "power2.out" });
  });

  gsap.matchMedia().add(breakpoints.tablet, () => {
    // console.log(alert('tablet'));
    gsap.fromTo(logo, { scale: 1.8 }, { scale: 1.2, duration: 5, delay: 1.5, ease: "power2.out" });
  });

  gsap.matchMedia().add(breakpoints.smallLaptop, () => {
    // console.log(alert('layar desktop'));
    gsap.fromTo(logo, { scale: 2 }, { scale: 1.5, duration: 5, delay: 1.5, ease: "power2.out" });
  });

  gsap.matchMedia().add(breakpoints.desktop, () => {
    // console.log(alert('layar desktop'));
    gsap.fromTo(logo, { scale: 2.8 }, { scale: 1.8, duration: 5, delay: 1.5, ease: "power2.out" });
  });

  gsap.matchMedia().add(breakpoints.largeMonitor, () => {
    gsap.fromTo(logo, { scale: 3.5 }, { scale: 3, duration: 5, delay: 1.5, ease: "power2.out" });
  });  

  // wave svg 1
  gsap.matchMedia().add(breakpoints.desktop, () => {
    gsap.fromTo(
      waveSvg,
      {
        y: "100%",
      },
      {
        y: -340, 
        x: 4,
        duration: 2,
        ease: "power2.out",
        delay: 2
      }
    );
  });

  gsap.matchMedia().add(breakpoints.smallLaptop, () => {
    gsap.fromTo(
      waveSvg, {y: "100%",}, {y: -250, duration: 2, delay: 2, ease: "power2.out"}
    )
  });

  gsap.matchMedia().add(breakpoints.tablet, () => {
    gsap.fromTo(
      waveSvg, {y: "100%",}, {y: -250, duration: 2, delay: 2, ease: "power2.out"}
    )
  });

  gsap.matchMedia().add(breakpoints.largePhone, () => {
    gsap.fromTo(
      waveSvg, {y: "100%",}, {y: -250, duration: 2, delay: 2, ease: "power2.out"}
    )
  });

  gsap.matchMedia().add(breakpoints.smallPhone, () => {
    gsap.fromTo(
      waveSvg, {y: "100%",}, {y: -250, duration: 2, delay: 2, ease: "power2.out"}
    )
  });
  // --------------
  // end section 1
  // --------------
  
  // --------------
  // section 2
  // --------------
  gsap.registerPlugin(ScrollTrigger);

  // Efek parallax untuk section 1 tenggelam saat section 2 muncul
  gsap.to(".home-section-1", {
    yPercent: 100, 
    ease: "none",
    scrollTrigger: {
      trigger: ".home-section-2", // Mulai saat section 2 muncul
      start: "top bottom",        
      end: "top top",             
      scrub: true,
    },
  });

  // animasi text h1
  gsap.to(".text-animation", {
    y: -100, // Animasi naik ke atas
    ease: "none",
    scrollTrigger: {
        trigger: ".home-section-2",
        start: "top center", // Mulai animasi ketika bagian atas .home-section-2 masuk ke tengah layar
        end: "bottom top", // Selesai animasi ketika bagian bawah .home-section-2 keluar dari layar atas
        scrub: 1, // Animasi mengikuti scroll
    }
  });
  // --------------
  // end section 2
  // --------------

  // ------------
  // section 3
  // ------------

  // wave-svg-2
  gsap.matchMedia().add(breakpoints.desktop, () => {
    gsap.to(waveSvgDua, {
      yPercent: -4, // Efek parallax tetap
      ease: "none",
      scrollTrigger: {
        trigger: ".home-section-2", // Menggunakan section 2 sebagai pemicu
        start: "top bottom",
        end: "bottom top",
        scrub: true
      }
    });
  });

  gsap.matchMedia().add(breakpoints.smallLaptop, () => {
    gsap.to(waveSvgDua, {yPercent: -4, ease: "none", scrollTrigger: {trigger: ".home-section-2", start: "top bottom", end: "bottom top", scrub: true}})
  });

  gsap.matchMedia().add(breakpoints.tablet, () => {
    gsap.to(waveSvgDua, {yPercent: -4, ease: "none", scrollTrigger: {trigger: ".home-section-2", start: "top bottom", end: "bottom top", scrub: true}})
  });
  
  gsap.matchMedia().add(breakpoints.largePhone, () => {
    gsap.to(waveSvgDua, {yPercent: -4, ease: "none", scrollTrigger: {trigger: ".home-section-2", start: "top bottom", end: "bottom top", scrub: true}})
  });
  
  gsap.matchMedia().add(breakpoints.smallPhone, () => {
    gsap.to(waveSvgDua, {yPercent: -4, ease: "none", scrollTrigger: {trigger: ".home-section-2", start: "top bottom", end: "bottom top", scrub: true}})
  });
  // --------------
  // end section 3
  // --------------
  
  // --------------
  // section 4
  // --------------

  // scroll kesamping
  let sections = gsap.utils.toArray(".panel");

  gsap.to(sections, {
    xPercent: -100 * (sections.length - 1),
    ease: "none",
    scrollTrigger: {
      trigger: ".home-section-4",
      pin: true,
      scrub: 1,
      snap: 1 / (sections.length - 1),
      // base vertical scrolling on how wide the container is so it feels more natural.
      end: "+=3500",
    }
  });

  // -------------
  // end section 4
  // -------------

});

// scroll parralax effect
window.addEventListener("scroll", function () {
  let section2 = document.querySelector(".home-section-2");
  let section3 = document.querySelector(".home-section-3");

  let section3Top = section3.offsetTop;
  let windowHeight = window.innerHeight;
  let stopPosition = windowHeight * 0.8; // 80vh dari atas

  if (window.scrollY >= section3Top - stopPosition) {
    section2.style.position = "fixed";
    section2.style.top = "0";
    section2.style.width = "100%";
    section2.style.zIndex = "2";

    // Beri ruang agar section 3 muncul perlahan, bukan langsung naik
    section3.style.marginTop = `${section2.offsetHeight}px`;
  } else {
    section2.style.position = "relative";
    section3.style.marginTop = "0";
  }

});

// wave svg
function animateWave(waveId, waveHeight, waveDelta, speed) {
  var wave = document.getElementById(waveId);
  var container = document.body;
  var width = container.offsetWidth;
  var height = container.offsetHeight;
  var waveWidth = width;
  var wavePoints = 6;
  var lastUpdate;
  var totalTime = 0;

  function calculateWavePoints(factor) {
      var points = [];
      for (var i = 0; i <= wavePoints; i++) {
          var x = (i / wavePoints) * waveWidth;
          var sinSeed = (factor + (i % wavePoints)) * speed * 100;
          var sinHeight = Math.sin(sinSeed / 100) * waveDelta;
          var yPos = Math.sin(sinSeed / 100) * sinHeight + waveHeight;
          points.push({ x: x, y: yPos });
      }
      return points;
  }

  function buildPath(points) {
      var SVGString = 'M ' + points[0].x + ' ' + points[0].y;
      var cp0 = {
          x: (points[1].x - points[0].x) / 2,
          y: (points[1].y - points[0].y) + points[0].y + (points[1].y - points[0].y)
      };

      SVGString += ' C ' + cp0.x + ' ' + cp0.y + ' ' + cp0.x + ' ' + cp0.y + ' ' + points[1].x + ' ' + points[1].y;

      var prevCp = cp0;
      var inverted = -1;

      for (var i = 1; i < points.length - 1; i++) {
          var cp1 = {
              x: (points[i].x - prevCp.x) + points[i].x,
              y: (points[i].y - prevCp.y) + points[i].y
          };
          SVGString += ' C ' + cp1.x + ' ' + cp1.y + ' ' + cp1.x + ' ' + cp1.y + ' ' + points[i + 1].x + ' ' + points[i + 1].y;
          prevCp = cp1;
          inverted = -inverted;
      }

      SVGString += ' L ' + width + ' ' + height;
      SVGString += ' L 0 ' + height + ' Z';
      return SVGString;
  }

  function tick() {
      var now = window.Date.now();

      if (lastUpdate) {
          var elapsed = (now - lastUpdate) / 1000;
          lastUpdate = now;
          totalTime += elapsed;

          var factor = totalTime * Math.PI;
          wave.setAttribute('d', buildPath(calculateWavePoints(factor)));
      } else {
          lastUpdate = now;
      }

      window.requestAnimationFrame(tick);
  }
  
  tick();
}
// Menjalankan animasi untuk masing-masing wave
animateWave('wave', 100, 20, 1.1);  // Wave di section 2
animateWave('wave-2', 300, 20, 1.1); // Wave di section 3


// // svg
// var container = document.body;
// var width = container.offsetWidth;
// var height = container.offsetHeight;
// var wave = document.getElementById('wave');

// var waveWidth = container.offsetWidth;  // Wave SVG width (usually container width)
// var waveHeight = 200;                   // Position from the top of container
// var waveDelta = 20;                     // Wave amplitude
// var speed = 1.1;                        // Wave animation speed
// var wavePoints = 6;                     // How many point will be used to compute our wave

// var points = [];

// function calculateWavePoints(factor) {
//   var points = [];
  
//   for (var i = 0; i <= wavePoints; i++) {
//     var x = i/wavePoints * waveWidth;
//     var sinSeed = (factor + (i + i % wavePoints)) * speed * 100;
//     var sinHeight = Math.sin(sinSeed / 100) * waveDelta;
//     var yPos = Math.sin(sinSeed / 100) * sinHeight  + waveHeight;
//     points.push({x: x, y: yPos});
//   }

//   return points;
// }

// function buildPath(points) {
//   var SVGString = 'M ' + points[0].x + ' ' + points[0].y;

//   var cp0 = {
//     x: (points[1].x - points[0].x) / 2,
//     y: (points[1].y - points[0].y) + points[0].y + (points[1].y - points[0].y)
//   };

//   SVGString += ' C ' + cp0.x + ' ' + cp0.y + ' ' + cp0.x + ' ' + cp0.y + ' ' + points[1].x + ' ' + points[1].y;

//   var prevCp = cp0;
//   var inverted = -1;

//   for (var i = 1; i < points.length-1; i++) {
//     var cpLength = Math.sqrt(prevCp.x * prevCp.x + prevCp.y * prevCp.y);
//     var cp1 = {
//       x: (points[i].x - prevCp.x) + points[i].x,
//       y: (points[i].y - prevCp.y) + points[i].y
//     };

//     SVGString += ' C ' + cp1.x + ' ' + cp1.y + ' ' + cp1.x + ' ' + cp1.y + ' ' + points[i+1].x + ' ' + points[i+1].y;
//     prevCp = cp1;
//     inverted = -inverted;
//   };

//   SVGString += ' L ' + width + ' ' + height;
//   SVGString += ' L 0 ' + height + ' Z';
//   return SVGString;
// }

// var lastUpdate;
// var totalTime = 0;

// function tick() {
//   var now = window.Date.now();

//   if (lastUpdate) {
//     var elapsed = (now-lastUpdate) / 1000;
//     lastUpdate = now;

//     totalTime += elapsed;
    
//     var factor = totalTime*Math.PI;
//     wave.setAttribute('d', buildPath(calculateWavePoints(factor)));
//   } else {
//     lastUpdate = now;
//   }
  
//   window.requestAnimationFrame(tick);
// };
// tick();


// end section 1
