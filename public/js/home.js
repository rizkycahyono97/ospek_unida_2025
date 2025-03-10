document.addEventListener("DOMContentLoaded", () => {
  const homeSectionSatu = document.getElementById("home-section-1");
  const homeSectionDua = document.getElementById("home-section-2");
  const logo = document.getElementById("logo-ospek");
  const textKiri = document.getElementById("text-kiri");
  const textKanan = document.getElementById("text-kanan");
  const waveSvg = document.getElementById("intro");
  const waveSvgDua = document.getElementById("wave-2");
  var navbar = document.querySelector('.navbar');

  // responsive
  const breakpoints = {
    smallPhone: "(max-width: 480px)",          // Smartphone kecil
    largePhone: "(min-width: 481px) and (max-width: 767px)", // Smartphone besar
    tablet: "(min-width: 768px) and (max-width: 1024px)",    // Tablet
    smallLaptop: "(min-width: 1025px) and (max-width: 1440px)", // Laptop sedang
    desktop: "(min-width: 1441px)",     // Desktop
    // largeMonitor: "(min-width: 1921px)",       // Monitor besar
  };

  // gsap scrolltrigger
  gsap.registerPlugin(ScrollTrigger);



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
    gsap.fromTo(textKiri, {x: -1000, y: -150}, {x: -350, y:0, duration: 2, delay: 2.3, ease: "power2.out"});
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
    gsap.fromTo(textKanan, {x: 350, y: -60}, {x: 70, y:-167, duration: 2, delay: 2.3, ease: "power2.out"});
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
  // section 3
  // --------------

  // scroll kesamping
  let sections = gsap.utils.toArray(".panel");

  gsap.to(sections, {
    xPercent: -100 * (sections.length - 1),
    ease: "none",
    scrollTrigger: {
      trigger: ".home-section-3",
      pin: true,
      scrub: 1,
      snap: 1 / (sections.length - 1),
      // base vertical scrolling on how wide the container is so it feels more natural.
      end: "+=3500",
    }
  });

  // -------------
  // end section 3
  // -------------

});
