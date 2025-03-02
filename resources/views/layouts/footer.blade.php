{{-- footer --}}
<footer>
    <div class="footer-section">
        <div class="footer-logo">
            <img src="{{ asset('assets/navbar/white-logo.png') }}" alt="">
        </div>
        <div class="footer-index">
            <div class="footer-navbar">
                <a class="nav-link" href="{{ route('index') }}">Home</a>
                <a class="nav-link" href="{{ route('jurusan') }}">Jurusan</a>
                <a class="nav-link" href="{{ route('timeline') }}">Timeline</a>
                <a class="nav-link" href="{{ route('pembayaran') }}">Pembayaran DU</a>
                <a class="nav-link" href="{{ route('faq') }}">FAQ</a>
                <a class="nav-link" href="{{ route('contact') }}">Kontak Kami</a>
                <a class="nav-link" href="{{ route('pusatinformasi') }}">Pusat Informasi</a>
            </div>
            <div class="footer-path">
                <div class="footer-contact">
                    <p class="address">Jl. Raya Siman, Dusun I, Demangan, Kec. Siman, Kabupaten Ponorogo, Jawa
                        Timur
                        <span class="number">63471</span>
                    </p>
                    <p>
                        <a href="https://mail.google.com/mail/?view=cm&fs=1&to=pmb@unida.gontor.ac.id&su=Pendaftaran Mahasiswa Baru&body=Halo PMB,%0A%0ASaya ingin bertanya tentang pendaftaran.%0A%0ATerima kasih."
                            target="_blank" rel="noopener noreferrer">
                            Kirim Email ke PMB
                        </a>
                        <span class="email-pmb"> pmb@unida.gontor.ac.id </span>
                    </p>
                    <p>
                        <a href="https://wa.me/6282139703726" target="_blank" rel="noopener noreferrer">
                            Chat via WhatsApp
                        </a>
                        <span class="number"> [ +62 821 3970 3726 ]</span>
                    </p>
                </div>
                <div class="footer-social">
                    <a href="https://www.instagram.com/ospek.2025/" target="_blank"><img
                            src="{{ asset('assets/navbar/instagram-icon.png') }}" alt=""></a>
                    <a href="https://www.facebook.com/people/Universitas-Darussalam-UNIDA-Gontor/100068099603761/"
                        target="_blank"><img src="{{ asset('assets/navbar/facebook-icon.png') }}"
                            alt=""></a>
                    <a href="https://www.linkedin.com/school/universitas-darussalam-gontor/" target="_blank"><img
                            src="{{ asset('assets/navbar/linkedin-icon.png') }}" alt=""></a>
                    <a href="https://unida.gontor.ac.id/" target="_blank"><img
                            src="{{ asset('assets/navbar/white-unida.png') }}" alt=""></a>
                    <a href="https://www.youtube.com/@ospekunida2025" target="_blank"><img
                            src="{{ asset('assets/navbar/yt-icon.png') }}" alt=""></a>
                </div>
            </div>
        </div>
    </div>
</footer>