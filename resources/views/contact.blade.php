@extends('layouts.main')

@section('content')
    <div class="text-center mb-5">
        <h1 class="mb-3">Kontak Kami:</h1>
        <p class="lead">Hubungi kami melalui informasi yang tertera di bawah:</p>
        <p><b>Haris Atha Hibatullah</b></p>
        <p>Email: harisathahibatullah6@gmail.com</p>
        <p>Telepon: +62 812-3456-7890</p>
        <p>Alamat: Jl. Merdeka No. 123, Cirebon</p><br>
          <p><b>Muhammad Nizar Al-Faiz</b></p>
        <p>Email: rearonald35@gmail.com</p>
        <p>Telepon: +62 812-2030-3730</p>
        <p>Alamat: Jl. Merdeka No. 123, Cirebon</p>
    </div>


    <div class="row">
        <div class="col-md-6 d-flex">
            <div class="card card-custom shadow-sm">
                <div class="image-container">
                    <img src="{{ asset('imgabi.jpg') }}" class="card-img-top" alt="Kontak 1">
                </div>
                <div class="card-body text-center">
                    <h5 class="card-title">Haris Atha Hibatullah</h5>
                    
                    <p class="card-text"><b>Ketua Bi'ah Islamiyyah SMK Informatika Al-Irsyad Cirebon

                    </b></p>
                </div>
            </div>
        </div>
        
        <div class="col-md-6 d-flex">
            <div class="card card-custom shadow-sm">
                <div class="image-container">
                    <img src="{{ asset('alfa.jpg') }}" class="card-img-top" alt="Kontak 2">
                </div>
                <div class="card-body text-center">
                    <h5 class="card-title">Muhammad Nizar Al-Faiz</h5>
                    <p class="card-text"><b>Seksi Kebersihan kelas XI RPL</b></p>
                   <p class="card-text"><b></b></p>
                </div>
            </div>
        </div>
    </div>
@endsection

