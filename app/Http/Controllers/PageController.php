<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function articles()
    {
        $articles = [
            [
                'title' => 'Hasil Manchester United vs Burnley: Drama Penalti Menit-menit Akhir, 
                            King MU Raih 3 Poin!',
                'description' => 'Manchester United menjamu Burnley pada laga pekan ke-3 Premier League 2025/2025 di Old Trafford, 
                Sabtu (30/8) malam WIB. MU harus berjuang hingga menit-menit akhir laga untuk mengamankan kemenangan 3-2 atas Brunley.
                MU menurunkan trio Mason Mount, Bryan Mbuemo, dan Matheus Cunha di lini depan. Sementara, Brunley racikan Scott Parker punya Jacob Bruun Larsen dan Jaidon Anthony yang sangat kuat dalam serangan balik.

Laga berjalan seru. Dua gol MU dicetak oleh Josh Cullen (Own Goal), Bryan Mbuemo, dan Bruno Fernandes (Penalty). 
Sementara, Brunley mendapatkan gol balasan dari aksi Lyle Foster dan Jaidon Anthony.
MU meraih kemenangan pertama pada musim 2025/2026. Pasukan Ruben Amorim itu kini berada di peringkat ke-9 klasemen dengan empat poin. '
            ],
            [
                'title' => 'Kepindahan Andre Onana dari MU ke Trabzonspor Tuntas, Hanya Tunggu Rilis Klub',
                'description' => 'Manchester United akhirnya melepas Andre Onana ke klub Turki, 
                Trabzonspor. Proses transfer kiper asal Kamerun itu kini tuntas setelah seluruh dokumen resmi ditandatangani oleh kedua tim.
                Didatangkan dari Inter Milan pada musim panas 2023 dengan banderol sekitar £47 juta, Onana diharapkan menjadi suksesor David de Gea. Namun, penampilannya sering menuai kritik.

Blunder di Liga Champions hingga performa angin-anginan di Premier League membuat posisinya sering dipertanyakan.

Trabzonspor memanfaatkan situasi tersebut dengan mengamankan jasa Onana lewat kontrak pinjaman. Klub asal Turki itu juga menawarkan paket finansial menarik berbasis performa, bahkan kabarnya bisa lebih besar dari gaji yang diterimanya di MU musim ini.'
            ],
            [
                'title' => 'Transfer Senne Lammens ke Manchester United: Here We Go!',
                'description' => ' Manchester United kembali membuat pergerakan penting di bursa transfer awal musim 2025/2026.
                Nama Senne Lammens yang sejak lama masuk radar klub akhirnya berhasil mereka amankan.
                Sejak awal, Ruben Amorim memang kurang puas dengan performa penjaga gawang yang ada. Andre Onana dan Altay Bayindir dinilai gagal memberikan rasa aman di bawah mistar, 
                sehingga manajemen MU memilih mencari solusi baru.
                Kehadiran Lammens diharapkan bisa menambah stabilitas sektor pertahanan MU yang musim lalu kerap menjadi sorotan. Apalagi, 
                sang kiper masih muda dan memiliki potensi besar untuk berkembang.
                Sejumlah pengamat menilai bahwa perjalanan Lammens di Manchester United tidak akan mudah, 
                terlebih dengan sorotan yang selalu mengarah ke pos penjaga gawang Setan Merah.'
            ]
        ];

        return view('articles', compact('articles'));
    }

    public function contact()
    {
        return view('contact');
    }
}

