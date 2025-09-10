@extends('layouts.main')

@section('content')
    <h1 class="mb-4 text-center">Daftar Artikel</h1>
    <div class="row">
        @foreach($articles as $article)
            <div class="col-md-4">
                <div class="card mb-3 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">{{ $article['title'] }}</h5>
                        <p class="card-text">{{ $article['description'] }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
