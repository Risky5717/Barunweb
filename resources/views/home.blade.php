@extends('layouts.main')

@section('title', 'Beranda - SD Barunawati Semarang')

@section('content')
<!-- Hero Section dengan Background Image -->
<section class="hero-section position-relative">
    <div class="hero-image">
        <img src="{{ asset('images/hero.jpg') }}" class="w-100" alt="Murid SD Barunawati">
    </div>
    <div class="hero-overlay position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center">
        <div class="container text-white">
            <h1 class="display-4 fw-bold">Selamat Datang</h1>
            <h2 class="display-5">Di SD Barunawati Semarang</h2>
            <p class="lead">Beriman - Cerdas - Tangguh</p>
        </div>
    </div>
</section>

<!-- Fitur Utama -->
<section class="features py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="card feature-card h-100 text-center border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="icon-box mb-3">
                            <i class="fas fa-graduation-cap fa-3x text-primary"></i>
                        </div>
                        <h5 class="card-title">Pendidikan Berkualitas</h5>
                        <p class="card-text">Mendidik siswa untuk dapat berpikir kritis dan berakhlak mulia.</p>
                        <a href="#" class="stretched-link"></a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card feature-card h-100 text-center border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="icon-box mb-3">
                            <i class="fas fa-book-open fa-3x text-primary"></i>
                        </div>
                        <h5 class="card-title">Mini Vlog</h5>
                        <p class="card-text">Ikuti kegiatan keseharian sekolah melalui vlog edukatif kami.</p>
                        <a href="#" class="stretched-link"></a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card feature-card h-100 text-center border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="icon-box mb-3">
                            <i class="fas fa-trophy fa-3x text-primary"></i>
                        </div>
                        <h5 class="card-title">Prestasi Kami</h5>
                        <p class="card-text">Menyimak jejak prestasi para siswa dalam berbagai kompetisi.</p>
                        <a href="#" class="stretched-link"></a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card feature-card h-100 text-center border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="icon-box mb-3">
                            <i class="fas fa-balance-scale fa-3x text-primary"></i>
                        </div>
                        <h5 class="card-title">Pendidikan Berkarakter</h5>
                        <p class="card-text">Membentuk siswa yang memiliki nilai moral dan etika tinggi.</p>
                        <a href="#" class="stretched-link"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Berita Kegiatan Sekolah -->
<section class="news py-5">
    <div class="container">
        <h2 class="text-center mb-4">Berita Kegiatan Sekolah</h2>
        
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card news-card h-100">
                    <img src="{{ asset('images/news/kegiatan1.jpg') }}" class="card-img-top" alt="Kegiatan Solat Berjamaah">
                    <div class="card-body">
                        <div class="news-date small text-muted mb-2">12 Februari 2023</div>
                        <h5 class="card-title">Kegiatan Solat dzuhur Berjamaah</h5>
                        <div class="news-category small text-muted mb-2">Kegiatan Rutin</div>
                        <a href="#" class="text-danger">Selengkapnya</a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 mb-4">
                <div class="card news-card h-100">
                    <img src="{{ asset('images/news/kegiatan2.jpg') }}" class="card-img-top" alt="Kegiatan Pramuka">
                    <div class="card-body">
                        <div class="news-date small text-muted mb-2">15 Februari 2023</div>
                        <h5 class="card-title">Kegiatan Rutin Pramuka</h5>
                        <div class="news-category small text-muted mb-2">Ekstrakurikuler</div>
                        <a href="#" class="text-danger">Selengkapnya</a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 mb-4">
                <div class="card news-card h-100">
                    <img src="{{ asset('images/news/kegiatan3.jpg') }}" class="card-img-top" alt="Kegiatan Membaca">
                    <div class="card-body">
                        <div class="news-date small text-muted mb-2">10 Maret 2023</div>
                        <h5 class="card-title">Kegiatan Rutin Pramuka</h5>
                        <div class="news-category small text-muted mb-2">Ekstrakurikuler</div>
                        <a href="#" class="text-danger">Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-4">
            <a href="/berita" class="btn btn-outline-secondary">Berita Lainnya</a>
        </div>
    </div>
</section>
@endsection