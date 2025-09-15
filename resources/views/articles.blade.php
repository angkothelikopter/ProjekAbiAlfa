@extends('layouts.main')

@section('content')
    <h1 class="mb-4 text-center">Article</h1>
    <div class="row">
        @foreach($articles as $index => $article)
            <div class="col-md-4">
                <div class="card mb-3 shadow-sm">
                    @if($index === 0)
                    <img src="{{ asset('MU.jpg') }}" 
                         class="card-img-top" 
                         alt="Gambar Artikel Pertama">
                @endif
                @if($loop->iteration == 2)
                    <img src="{{ asset('Andre.jpg') }}" 
                         class="card-img-top" 
                         alt="Gambar Artikel Kedua">
                @endif
                @if($loop->iteration == 3)
                    <img src="{{ asset('Lammens.jpg') }}" 
                         class="card-img-top" 
                         alt="Gambar Artikel Ketiga">
                @endif
                 @if($loop->iteration == 4)
                    <img src="{{ asset('rrq.jpg') }}" 
                         class="card-img-top" 
                         alt="Gambar Artikel Keempat">
                @endif
                @if($loop->iteration == 5)
                    <img src="{{ asset('ff.jpg') }}" 
                         class="card-img-top" 
                         alt="Gambar Artikel Kelima">
                @endif
                @if($loop->iteration == 6)
                    <img src="{{ asset('efootball.jpg') }}" 
                         class="card-img-top" 
                         alt="Gambar Artikel Keenam">
                @endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $article['title'] }}</h5>
                        <p class="card-text">{{ $article['description'] }}</p>
                        
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
