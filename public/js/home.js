document.addEventListener("DOMContentLoaded", () => {
  const homeSectionSatu = document.getElementById("home-section-1");
  const homeSectionDua = document.getElementById("home-section-2");
  const logo = document.getElementById("logo-ospek");
  const textKiri = document.getElementById("text-kiri");
  const textKanan = document.getElementById("text-kanan");
  const waveSvg = document.getElementById("intro");

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

  // wave svg
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
      waveSvg, {y: "100%",}, {y: -300, duration: 2, delay: 2, ease: "power2.out"}
    )
  });

  gsap.matchMedia().add(breakpoints.tablet, () => {
    gsap.fromTo(
      waveSvg, {y: "100%",}, {y: -250, duration: 2, delay: 2, ease: "power2.out"}
    )
  });

  gsap.matchMedia().add(breakpoints.largePhone, () => {
    gsap.fromTo(
      waveSvg, {y: "100%",}, {y: -300, duration: 2, delay: 2, ease: "power2.out"}
    )
  });

  gsap.matchMedia().add(breakpoints.smallPhone, () => {
    gsap.fromTo(
      waveSvg, {y: "100%",}, {y: -300, duration: 2, delay: 2, ease: "power2.out"}
    )
  });
  // --------------
  // end section 1
  // --------------
  
  // --------------
  // section 2
  // --------------
  // Inisialisasi Locomotive Scroll, scrollTrigger GSAP animation
  const scroll = new LocomotiveScroll({
    el: document.querySelector("[data-scroll-container]"),
    smooth: true, // Mengaktifkan smooth scrolling
    multiplier: 1, // Kecepatan scroll (bisa disesuaikan)
  });
  gsap.registerPlugin(ScrollTrigger);
  

  // integrasi Locomotive scroll dengan GSAP
  scroll.on("scroll", ScrollTrigger.update);
  ScrollTrigger.scrollerProxy("[data-scroll-container]", {
    scrollTop(value) {
      return arguments.length
        ? scroll.scrollTo(value, 0, 0)
        : scroll.scroll.instance.scroll.y;
    },
    getBoundingClientRect() {
      return { top: 0, left: 0, width: window.innerWidth, height: window.innerHeight };
    },
    pinType: document.querySelector("[data-scroll-container]").style.transform ? "transform" : "fixed",
  });
  ScrollTrigger.addEventListener("refresh", () => scroll.update());
  ScrollTrigger.refresh();

  // Efek Scrolling
  gsap.to(".home-section-1", {
    yPercent: 70, 
    ease: "none",
    scrollTrigger: {
      trigger: ".home-section-2",
      start: "top bottom",        
      end: "top top",             
      scrub: true,
    },
  });

  // Efek Scrolling
  gsap.to(".home-section-2", {
    yPercent: -150,
    ease: "none",
    scrollTrigger: {
      trigger: ".home-section-2",
      scroller: "[data-scroll-container]",
      start: "top bottom",
      end: "top top",
      scrub: true,
    },
  });
});



// svg
var container = document.body;
var width = container.offsetWidth;
var height = container.offsetHeight;
var wave = document.getElementById('wave');

var waveWidth = container.offsetWidth;  // Wave SVG width (usually container width)
var waveHeight = 200;                   // Position from the top of container
var waveDelta = 20;                     // Wave amplitude
var speed = 1.1;                        // Wave animation speed
var wavePoints = 6;                     // How many point will be used to compute our wave

var points = [];

function calculateWavePoints(factor) {
  var points = [];
  
  for (var i = 0; i <= wavePoints; i++) {
    var x = i/wavePoints * waveWidth;
    var sinSeed = (factor + (i + i % wavePoints)) * speed * 100;
    var sinHeight = Math.sin(sinSeed / 100) * waveDelta;
    var yPos = Math.sin(sinSeed / 100) * sinHeight  + waveHeight;
    points.push({x: x, y: yPos});
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

  for (var i = 1; i < points.length-1; i++) {
    var cpLength = Math.sqrt(prevCp.x * prevCp.x + prevCp.y * prevCp.y);
    var cp1 = {
      x: (points[i].x - prevCp.x) + points[i].x,
      y: (points[i].y - prevCp.y) + points[i].y
    };

    SVGString += ' C ' + cp1.x + ' ' + cp1.y + ' ' + cp1.x + ' ' + cp1.y + ' ' + points[i+1].x + ' ' + points[i+1].y;
    prevCp = cp1;
    inverted = -inverted;
  };

  SVGString += ' L ' + width + ' ' + height;
  SVGString += ' L 0 ' + height + ' Z';
  return SVGString;
}

var lastUpdate;
var totalTime = 0;

function tick() {
  var now = window.Date.now();

  if (lastUpdate) {
    var elapsed = (now-lastUpdate) / 1000;
    lastUpdate = now;

    totalTime += elapsed;
    
    var factor = totalTime*Math.PI;
    wave.setAttribute('d', buildPath(calculateWavePoints(factor)));
  } else {
    lastUpdate = now;
  }
  
  window.requestAnimationFrame(tick);
};
tick();


// end section 1
