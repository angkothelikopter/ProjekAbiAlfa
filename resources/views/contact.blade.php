@extends('layouts.main')

@section('content')
    <div class="text-center mb-5">
        <h1 class="mb-3 fw-bold text-primary">Kontak Kami</h1>
        <p class="lead">Hubungi kami dengan nomor yang tertera:</p>
    </div>

    <div class="row justify-content-center">
        <!-- First Contact Card -->
        <div class="col-md-5 mb-4">
            <div class="card contact-card shadow-lg border-0">
                <div class="card-body text-center p-4">
                    <div class="profile-img-container mx-auto mb-4">
                        <img src="{{ asset('imgabi.jpg') }}" class="profile-img" alt="Kontak 1">
                    </div>
                    <h3 class="card-title fw-bold mb-3">Haris Atha Hibatullah</h3>
                    
                    <div class="contact-info">
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fas fa-user"></i>
                            </div>
                            <div class="contact-text">
                                <span class="fw-semibold">Nama:</span> Haris Atha Hibatullah
                            </div>
                        </div>
                        
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="contact-text">
                                <span class="fw-semibold">Email:</span>harisathahibatullah6@gmail.com
                            </div>
                        </div>
                        
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fa-brands fa-github"></i>
                            </div>
                            <div class="contact-text">
                                <span class="fw-semibold">Github:</span> r1seeeCode
                            </div>
                        </div>
                        
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fa-brands fa-tiktok"></i>
                            </div>
                            <div class="contact-text">
                                <span class="fw-semibold">TikTok:</span> rndmppl
                            </div>
                            
                        </div>

                         <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fa-brands fa-instagram"></i>
                            </div>
                            <div class="contact-text">
                                <span class="fw-semibold">Instagram:</span> r1skendoo
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Second Contact Card -->
        <div class="col-md-5 mb-4">
            <div class="card contact-card shadow-lg border-0">
                <div class="card-body text-center p-4">
                    <div class="profile-img-container mx-auto mb-4">
                        <img src="{{ asset('alfa.jpg') }}" class="profile-img" alt="Kontak 2">
                    </div>
                    <h3 class="card-title fw-bold mb-3">Muhammad Nizar Al-Faiz</h3>
                    
                    <div class="contact-info">
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fas fa-user"></i>
                            </div>
                            <div class="contact-text">
                                <span class="fw-semibold">Nama:</span> Muhammad Nizar Al-Faiz
                            </div>
                        </div>
                        
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="contact-text">
                                <span class="fw-semibold">Email:</span> rearonald35@gmail.com
                            </div>
                        </div>
                        
                        
                        
                        
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fa-brands fa-github"></i>
                            </div>
                            <div class="contact-text">
                                <span class="fw-semibold">Github:</span> angkothelikopter
                            </div>
                            
                        </div>
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fa-brands fa-steam"></i>
                            </div>
                            <div class="contact-text">
                                <span class="fw-semibold">Steam:</span> angkothelikopter
                            </div>
                            
                        </div>
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fa-brands fa-instagram"></i>
                            </div>
                            <div class="contact-text">
                                <span class="fw-semibold">Instagram:</span> angkothelikopter
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
 @endsection
