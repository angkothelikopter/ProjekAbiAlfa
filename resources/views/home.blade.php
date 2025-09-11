@extends('layouts.main')

@section('content')
    <div class="text-center">
        <h1 class="mb-3">Selamat Datang di Website Artikel</h1>
        <p class="lead">Website sederhana yang menampilkan artikel-artikel dan berita terbaru dari beragam bidang</p>
        <p>Website Projek Dari Abi dan Alfa kelas</p>
        
        

        {{-- Tombol CTA --}}
        <a href="{{ route('articles') }}" class="btn btn-primary btn-lg mt-3">
            📖 Lihat Artikel
        </a>
    </div>

    {{-- Tambahan section highlight --}}
    <div class="row mt-5 text-center">
        <div class="col-md-4">
            <div class="card shadow-sm p-3">
                <h5 class="mb-2">📰 Artikel Terbaru</h5>
                <p class="text-muted">Berita terkini yang dirangkum untuk kemudahan para pembaca.</p>
                <a href="{{ route('articles') }}" class="btn btn-outline-primary btn-sm">Baca</a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-sm p-3">
                <h5 class="mb-2">⚡ Fitur Ringan</h5>
                <p class="text-muted">Website ini dibuat dengan Laravel dan Bootstrap, cepat dan mudah.</p>
                <a href="{{ route('home') }}" class="btn btn-outline-danger btn-sm">Apa itu Laravel?</a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-sm p-3">
                <h5 class="mb-2">📩 Kontak Kami</h5>
                <p class="text-muted">Untuk urusan bisnis dan kegiatan lanjut, hubungi kami.</p>
                <a href="{{ route('contact') }}" class="btn btn-outline-success btn-sm">Hubungi</a>
            </div>
        </div>
    </div>
@endsection
