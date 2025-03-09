    @extends('layouts.app')

    @section('title', 'Open Trip - Dulin Diluk')

    @section('body-class', 'service-details-page no-navbar')

    @section('content')
    <section id="custom-detail-package" class="custom-detail-package">
        <header class="custom-header">
            <button class="back-button"><i class="bi bi-arrow-left"></i></button>
            <h2>Detail Package</h2>
        </header>
        <div class="custom-package-content">
            <!-- Gambar & Info -->
            <div class="custom-left">
                <div class="custom-image-container">
                    <img src="{{ asset('assets/img/opentrip-img/Kawah Ijen.png') }}" alt="Bunaken">
                    <button class="share-button"><i class="bi bi-heart"></i></button>
                    <span class="photo-count">Semua Foto</span>
                </div>

                <div class="custom-package-info">
                    <h3>Explore Kawah Ijen</h3>
                    <p class="location">Indonesia</p>

                    <!-- Detail Paket -->
                    <div class="custom-details">
                        <span><i class="bi bi-clock"></i> 4 Hari</span>
                        <span><i class="bi bi-geo-alt"></i> 1 Negara 1 Kota</span>
                    </div>

                    <!-- Fasilitas -->
                    <div class="custom-form-container-fasilitas">
                        <div class="fasilitas-details">
                            <span><i class="bi bi-building"></i> Penginapan</span>
                            <span><i class="bi bi-suitcase"></i> 12 Keberangkatan</span>
                        </div>
                    </div>


                    <!-- Destinasi -->
                    <div class="custom-form-container-destinasi">

                        <div class="destinasi-details">
                            <a class="btn" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                Destinasi Tour
                            </a>
                            <div class="collapse" id="collapseExample">
                                <div class="card card-body">
                                    Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
            <!-- Form Pilihan -->
            <div class="custom-right">
                <div class="custom-form-container">
                    <div class="timeline">
                        <div class="timeline-item">
                            <div class="timeline-dot"></div>
                            <div class="timeline-content">
                                <h4>Pilih Tanggal Keberangkatan</h4>
                                <p class="availability">Tersedia 32 Keberangkatan</p>
                                <div class="custom-date-picker">
                                    <input type="date" value="28 Feb 2025 - 03 Mar 2025">
                                </div>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-dot"></div>
                            <div class="timeline-content">
                                <h4>Nama Lengkap</h4>
                                <input type="text" id="nama" class="form-control" placeholder="Masukkan nama lengkap" required>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-dot"></div>
                            <div class="timeline-content">
                                <h4>Alamat</h4>
                                <textarea id="alamat" class="form-control" rows="3" placeholder="Masukkan alamat lengkap" required></textarea>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-dot"></div>
                            <div class="timeline-content">
                                <h4>No Telepon</h4>
                                <input type="text" id="nama" class="form-control" placeholder="Masukkan nama lengkap" required>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-dot"></div>
                            <div class="timeline-content">
                                <h4>Lokasi Penjemputan</h4>
                                <div class="dropdown w-100">
                                    <button class="btn btn-primary dropdown-toggle w-100 text-start" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                        Pilih Lokasi
                                    </button>
                                    <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton">
                                        <li><a class="dropdown-item" href="#">Bandara Soekarno-Hatta</a></li>
                                        <li><a class="dropdown-item" href="#">Stasiun Gambir</a></li>
                                        <li><a class="dropdown-item" href="#">Monas</a></li>
                                        <li><a class="dropdown-item" href="#">Taman Mini Indonesia Indah</a></li>
                                        <li><a class="dropdown-item" href="#">Ancol</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </div>

        </div>

        <!-- Tombol Pilih Paket -->
        <div class="custom-button-group">
            <button class="select-package">Pilih Paket</button>
            <a href="#" class="contact-link">Hubungi Kontak Kami</a>
        </div>
    </section>
    @endsection