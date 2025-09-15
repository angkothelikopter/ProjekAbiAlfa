@extends('layouts.main')

@section('content')
    <div class="text-center">
        <h1 class="mb-3">Selamat Datang di ChampionZone</h1>
        <p class="lead">Website berita sport & eSport terkini</p>
        <p>Website Projek Dari Abi dan Alfa kelas</p>
        
        {{-- Tombol CTA --}}
        <a href="{{ route('articles') }}" class="btn btn-primary btn-lg mt-3">
            📖 Lihat Artikel
        </a>
    </div>

    {{-- Tambahan section highlight --}}
    <div class="row mt-5 text-center">
        <div class="col-md-4">
            <div class="card shadow-sm p-3 h-100">
                <h5 class="mb-2">📰 Artikel Terbaru</h5>
                <p class="text-muted">Berita terkini yang dirangkum untuk kemudahan para pembaca.</p>
                <a href="{{ route('articles') }}" class="btn btn-outline-primary btn-sm">Baca</a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-sm p-3 h-100">
                <h5 class="mb-2">⚡ Fitur Ringan</h5>
                <p class="text-muted">Website ini dibuat dengan Laravel dan Bootstrap, cepat dan mudah.</p>
                <a href="{{ route('home') }}" class="btn btn-outline-danger btn-sm">Apa itu Laravel?</a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-sm p-3 h-100">
                <h5 class="mb-2">📩 Kontak Kami</h5>
                <p class="text-muted">Untuk urusan bisnis dan kegiatan lanjut, hubungi kami.</p>
                <a href="{{ route('contact') }}" class="btn btn-outline-success btn-sm">Hubungi</a>
            </div>
        </div>
    </div>

    {{-- Tentang Website --}}
    <div class="mt-5 p-4 bg-light rounded shadow-sm">
        <h3 class="text-center mb-3">Tentang ChampionZone</h3>
        <p class="text-muted text-center">
            <strong>ChampionZone</strong> adalah website yang menyajikan berita terbaru seputar olahraga (football, basket, badminton, dan lainnya) 
            serta perkembangan dunia <em>eSport</em> (Mobile Legends, PUBG, Valorant, Dota 2, dll).  
            Website ini hadir untuk memberikan informasi akurat, ringkas, dan menarik bagi para pecinta olahraga dan gamer.
        </p>
        <div class="row text-center mt-4">
            <div class="col-md-6">
                <div class="card p-3 shadow-sm">
                    <h5>⚽ Sport</h5>
                    <p class="text-muted">Update berita bola, basket, dan cabang olahraga dunia.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card p-3 shadow-sm">
                    <h5>🎮 eSport</h5>
                    <p class="text-muted">Ikuti kabar turnamen dan tim eSport favoritmu.</p>
                </div>
            </div>
        </div>
    </div>
@endsection
