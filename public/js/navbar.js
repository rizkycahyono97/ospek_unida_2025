document.addEventListener("DOMContentLoaded", function () {
    let toggleBtn = document.getElementById("mobileSidebarToggle");
    let closeBtn = document.getElementById("closeSidebar");
    let mobileMenu = document.getElementById("mobileNavMenu");
    let overlay = document.getElementById("overlay");

    function toggleSidebar() {
        mobileMenu.classList.toggle("active");
        overlay.classList.toggle("active");
    }

    function closeSidebar() {
        mobileMenu.classList.remove("active");
        overlay.classList.remove("active");
    }

    // Toggle sidebar saat tombol burger ditekan
    toggleBtn.addEventListener("click", toggleSidebar);
    
    // Tutup sidebar saat tombol X ditekan
    closeBtn.addEventListener("click", closeSidebar);

    // Tutup sidebar saat klik overlay
    overlay.addEventListener("click", closeSidebar);
});
