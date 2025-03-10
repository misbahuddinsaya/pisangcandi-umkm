@extends('layouts.app')

@section('title', 'Private Trip Package - Dulin Diluk')

@section('body-class', 'service-details-page no-navbar')

@section('content')
<div class="page-title">
    <div class="container d-lg-flex justify-content-between align-items-center">
        <nav class="breadcrumbs">
            <ol>
                <li><a href="/"><i class="bi bi-arrow-left"></i></a></li>
            </ol>
            <ol class="mt-5">
                <li>
                    <h1>Private Trip</h1>
                </li>
            </ol>
            <ol>
                <li>
                    <p>Temukan destinasi terbaik anda.</p>
                </li>
            </ol>
        </nav>
    </div>
</div>
<!-- End Page Title -->
<section id="search" class="search">
    <form class="search-form-nav d-flex align-items-center" action="search.html" method="GET">
        <input type="text" name="q" placeholder="Cari destinasi anda..." class="form-control">
        <button type="submit" class="btn btn-light">
            <i class="bi bi-search"></i>
        </button>
    </form>
</section>
<!-- Service Details Section -->
<section id="service-details" class="service-details section">
    <div class="container">
        <div class="row gy-4">

            <!-- Kartu Pertama -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <a href="{{ route('privatetrip.detail') }}" class="card-link">
                    <div class="card service-card">
                        <img src="{{ asset('assets/img/privatetrip-img/privatetrip1.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Paket Private Trip Bali</h5>
                            <p class="card-text">
                                <span class="icon"><i class="bi bi-calendar"></i></span> 3 Hari 2 Malam
                            </p>
                            <p class="card-text-point">
                                <span class="meeting-title">Meeting Point: </span>
                                <span>Gresik-Surabaya-Sidoarjo</span>
                            </p>

                            <div class="price-container">
                                <span class="price-title">Mulai Dari:</span>
                                <div class="price-wrap">

                                    <span class="price-tag">IDR 875.000</span>
                                    <span class="price"> / Pax</span>
                                </div>
                                <a href="#" class="detail-link-privatetrip">Lihat Trip <i class="bi bi-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <!-- <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <a href="detail-produk.html" class="card-link">
                    <div class="card service-card">
                        <img src="{{ asset('assets/img/opentrip-img/Jogja Istimewah.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Jogja Istimewah</h5>
                            <p class="card-text">
                                <span class="icon"><i class="bi bi-calendar"></i></span> 13 Hari
                                <span class="icon"><i class="bi bi-bus-front-fill"></i></span> Transportasi
                            </p>
                            <div class="price-container">
                                <div class="price-wrap">
                                    <span class="price-tag">IDR 2.550.000</span>
                                    <span class="price"> per pax</span>
                                </div>
                                <a href="#" class="detail-link">Lihat Detail <i class="bi bi-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </a>
            </div> -->
        </div>
    </div>
</section>
@endsection