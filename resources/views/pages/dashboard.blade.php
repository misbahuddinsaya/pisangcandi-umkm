@extends('layouts.app')

@section('title', 'Beranda - Dulin Diluk')

@section('content')
<section id="hero" class="hero section">
    <!-- <div class="container-fluid">
        <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="carousel-content">
                        <img src="{{ asset('assets/img/flayer-dashboard/flayer4.jpg') }}" class="d-block w-100" alt="...">
                        <img src="{{ asset('assets/img/flayer-dashboard/flayer2.png') }}" class="d-block w-100 desktop-only" alt="...">
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="carousel-content">
                        <img src="{{ asset('assets/img/flayer-dashboard/flayer3.png') }}" class="d-block w-100" alt="...">
                        <img src="{{ asset('assets/img/flayer-dashboard/flayer4.jpg') }}" class="d-block w-100 desktop-only" alt="...">
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="carousel-content">
                        <img src="{{ asset('assets/img/flayer-dashboard/flayer2.png') }}" class="d-block w-100" alt="...">
                        <img src="{{ asset('assets/img/flayer-dashboard/flayer3.png') }}" class="d-block w-100 desktop-only" alt="...">
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div> -->
</section>

<section id="featured-services" class="featured-services section">

    <div class="container section-title" data-aos="fade-up">

        <h2>PRODUK DAN LAYANAN KAMI</h2>
        <p>Rekomendasi pilihan dan produk dan
            layanan untuk perjalanan Anda
        </p>
    </div>
    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <a href="{{ route('opentrip.index') }}" class="service-link">
                    <div class="service-item position-relative" style="background-image: url('{{ asset('assets/img/service-dashboard/layanan1.png') }}');">
                        <h4>OPEN TRIP</h4>
                    </div>
                </a>
            </div>
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <a href="{{ route('privatetrip.index') }}" class="service-link">
                    <div class="service-item position-relative" style="background-image: url('{{ asset('assets/img/service-dashboard/layanan3.png') }}');">
                        <h4>PRIVATE TRIP PACKAGE</h4>
                    </div>
                </a>
            </div>
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <a href="../404/index.html" class="service-link">
                    <div class="service-item position-relative" style="background-image: url('{{ asset('assets/img/service-dashboard/layanan4.png') }}');">
                        <h4>TRANSPORTATION</h4>
                    </div>
                </a>
            </div>
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <a href="../404/index.html" class="service-link">
                    <div class="service-item position-relative" style="background-image: url('{{ asset('assets/img/service-dashboard/layanan5.png') }}');">
                        <h4>TRAVEL POST</h4>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<section id="testimonials" class="testimonials section ">

    <div class="container section-title-about" data-aos="fade-up">
        <h2>Mengapa Memilih</h2>
        <p>Dulin Diluk sebagai rekomendasi perjalanan tour anda?</p>
    </div>
    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper" data-speed="600" data-delay="5000" data-breakpoints="{ &quot;320&quot;: { &quot;slidesPerView&quot;: 1, &quot;spaceBetween&quot;: 40 }, &quot;1200&quot;: { &quot;slidesPerView&quot;: 3, &quot;spaceBetween&quot;: 40 } }">
            <script type="application/json" class="swiper-config">
                {
                    "loop": true,
                    "speed": 600,
                    "autoplay": {
                        "delay": 5000
                    },
                    "slidesPerView": "",
                    "pagination": {
                        "el": ".swiper-pagination",
                        "type": "bullets",
                        "clickable": true
                    },
                    "breakpoints": {
                        "320": {
                            "slidesPerView": 1,
                            "spaceBetween": 40
                        },
                        "1200": {
                            "slidesPerView": 2,
                            "spaceBetween": 20
                        }
                    }
                }
            </script>
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="testimonial-item" "="">
                <div class=" service-item position-relative" style="background-image: url('{{ asset('assets/img/testimonial-dashboard/service2.png') }}');">
                        <div class="content">
                            <div class="number text-light ms-4">1.</div>
                            <div>
                                <h3>Kualitas Pelayanan </h3>
                                <p>Dulin diluk tour organizer bekerja dengan sepenuh hati...</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="testimonial-item">
                    <div class="service-item position-relative" style="background-image: url('{{ asset('assets/img/testimonial-dashboard/service1.png') }}');">
                        <div class="content">
                            <div class="number text-light ms-4">2.</div>
                            <div>
                                <h3>Perjalanan Nyaman</h3>
                                <p>perjalanan anda sangat nyaman kalau ikut Dulin Diluk</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>


<section id="team" class="riview-section">

    <div class="container section-title-about" data-aos="fade-up">
        <span></span>
        <h3><img src="assets/img/LogoDulinDiluk.png" alt="" width="180px"></h3>

        <div class="container" data-aos="fade-up" data-aos-delay="100">

</section>
@endsection