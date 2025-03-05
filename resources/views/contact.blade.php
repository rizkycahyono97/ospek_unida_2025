@extends('layouts.layout')

@section('content')

    {{-- section 1 --}}
    <section class="kontak-section pb-5">

        <div class="container">
            <!-- Content here -->
            <div class="kontak-banner">
                <div class="kontak-header">
                    <h1>Kontak Kami </h1>
                </div>
                <div class="kontak-column">
                    <div class="kontak-form">

                        {{-- alert form --}}
                        @if(session('success'))
                            <div class="alert alert-primary alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif

                        @if(session('error'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ session('error') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif

                        {{-- contact us --}}
                        <form action="{{ route('contact.send') }}" method="POST" class="row g-3">
                            @csrf
                            <h3>Kirim Pesan</h3>
                        
                            <div class="col-md-6">
                                <label for="inputnama" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" id="inputnama" name="name" required>
                            </div>
                        
                            <div class="col-md-6">
                                <label for="inputState" class="form-label">Status</label>
                                <select id="inputState" class="form-select" name="status" required>
                                    <option selected disabled>Pilih ...</option>
                                    <option value="Calon Mahasiswa Baru">Calon Mahasiswa Baru</option>
                                    <option value="Wali Calon Mahasiswa Baru">Wali Calon Mahasiswa Baru</option>
                                </select>
                            </div>
                        
                            <div class="col-6">
                                <label for="inputemail" class="form-label">Alamat Email</label>
                                <input type="email" class="form-control" id="inputemail" name="email" required>
                            </div>
                        
                            <div class="col-6">
                                <label for="inputnohp" class="form-label">Nomor Telepon</label>
                                <input type="text" class="form-control" id="inputnohp" name="phone" required 
                                        pattern="[0-9]{10,15}" title="Nomor telepon harus 10-15 digit angka" 
                                        maxlength="15" oninput="this.value = this.value.replace(/[^0-9]/g, '')">
                            </div>
                        
                            <div class="mb-3">
                                <label for="isi-pesan" class="form-label">Isi Pesan</label>
                                <textarea class="form-control" id="isi-pesan" name="message" rows="6" required></textarea>
                            </div>
                        
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Kirim</button>
                            </div>
                        </form>                            
                    </div>
                    <div class="kontak-info">
                        <h3>Info Kontak</h3>
                        <p>Jl. Raya Siman, Dusun I, Demangan, Kec. Siman, Kabupaten Ponorogo, Jawa Timur
                            <span class="number">63471</span>
                        </p>
                        <p>
                            <a href="https://mail.google.com/mail/?view=cm&fs=1&to=pmb@unida.gontor.ac.id&su=Pendaftaran Mahasiswa Baru&body=Halo PMB,%0A%0ASaya ingin bertanya tentang pendaftaran.%0A%0ATerima kasih."
                                target="_blank" rel="noopener noreferrer">
                                Kirim Email ke PMB
                            </a>
                            <span class="email-pmb"> [ pmb@unida.gontor.ac.id ]</span>
                        </p>

                        <p>
                            <a href="https://wa.me/6282139703726" target="_blank" rel="noopener noreferrer">
                                Chat via WhatsApp
                            </a>
                            <span class="number"> [ +62 821 3970 3726 ]</span>
                        </p>

                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31615.594490520576!2d111.4898432!3d-7.900364799999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e790aa79efd972b%3A0xf09ed064954d29b2!2sUniversitas%20Darussalam%20Gontor!5e0!3m2!1sid!2sid!4v1739514764591!5m2!1sid!2sid"
                            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>

    </section>
    {{-- end section 2 --}}
@endsection

<script>
    setTimeout(() => {
        let alertBox = document.querySelector('.alert');
        if (alertBox) {
            alertBox.style.transition = "opacity 0.5s";
            alertBox.style.opacity = "0";
            setTimeout(() => alertBox.remove(), 500);
        }
    }, 5000); // Alert akan hilang setelah 5 detik
</script>
