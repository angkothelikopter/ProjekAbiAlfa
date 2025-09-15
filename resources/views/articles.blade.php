@extends('layouts.main')

@section('content')
    <h1 class="mb-4 text-center">🔥Berita Panas🔥</h1>
    <div class="row">
        @foreach($articles as $index => $article)
            <div class="col-md-4">
                <div class="card mb-3 shadow-sm">
                    {{-- Gambar berdasarkan index --}}
                    @if($index === 0)
                        <img src="{{ asset('MU.jpg') }}" class="card-img-top" alt="Gambar Artikel Pertama">
                    @elseif($loop->iteration == 2)
                        <img src="{{ asset('Andre.jpg') }}" class="card-img-top" alt="Gambar Artikel Kedua">
                    @elseif($loop->iteration == 3)
                        <img src="{{ asset('Lammens.jpg') }}" class="card-img-top" alt="Gambar Artikel Ketiga">
                    @elseif($loop->iteration == 4)
                        <img src="{{ asset('rrq.jpg') }}" class="card-img-top" alt="Gambar Artikel Keempat">
                    @elseif($loop->iteration == 5)
                        <img src="{{ asset('ff.jpg') }}" class="card-img-top" alt="Gambar Artikel Kelima">
                    @elseif($loop->iteration == 6)
                        <img src="{{ asset('efootball.jpg') }}" class="card-img-top" alt="Gambar Artikel Keenam">
                    @endif

                    {{-- Isi Card --}}
                    <div class="card-body">
                        <h5 class="card-title">{{ $article['title'] }}</h5>
                        <p class="card-text text-truncate" style="max-height: 60px;">{{ $article['description'] }}</p>
                        
                        {{-- Tombol Modal --}}
                        <button class="btn btn-primary btn-sm" 
                                data-bs-toggle="modal" 
                                data-bs-target="#articleModal{{ $loop->iteration }}">
                            📖 Baca Selengkapnya
                        </button>
                    </div>
                </div>
            </div>

            {{-- Modal Bootstrap --}}
            <div class="modal" id="articleModal{{ $loop->iteration }}" tabindex="-1" aria-labelledby="articleModalLabel{{ $loop->iteration }}" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="articleModalLabel{{ $loop->iteration }}">{{ $article['title'] }}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                        </div>
                        <div class="modal-body">
                            <p>{{ $article['description'] }}</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection



