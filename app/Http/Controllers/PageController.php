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
                'description' => 'Manchester United menang dramatis 3-2 atas Burnley pada pekan ke-3 Premier League 2025/2026 di Old Trafford. Gol MU dicetak oleh Josh Cullen (bunuh diri), Bryan Mbuemo, dan Bruno Fernandes (penalti), sedangkan Burnley membalas lewat Lyle Foster dan Jaidon Anthony.
Pertandingan berlangsung ketat hingga menit akhir, dengan Burnley tampil agresif lewat serangan balik. Kemenangan ini menjadi yang pertama bagi MU musim tersebut, menempatkan tim asuhan Ruben Amorim di posisi 9 klasemen dengan 4 poin.'
            ],
            [
                'title' => 'Kepindahan Andre Onana dari MU ke Trabzonspor Tuntas, Hanya Tunggu Rilis Klub',
                'description' => 'Manchester United akhirnya melepas Andre Onana ke klub Turki, Trabzonspor, lewat kontrak pinjaman setelah performanya di Old Trafford banyak dikritik. Didatangkan dari Inter Milan pada 2023 dengan harga mahal, Onana kerap melakukan blunder di Liga Champions dan tampil inkonsisten di Premier League. Trabzonspor memanfaatkan situasi ini
                 dan menawarkan paket finansial berbasis performa yang kabarnya bisa lebih besar dari gajinya di MU musim ini.'
            ],
            [
                'title' => 'Transfer Senne Lammens ke Manchester United: Here We Go!',
                'description' => ' Manchester United resmi mendatangkan Senne Lammens pada awal musim 2025/2026 sebagai langkah memperkuat sektor penjaga gawang. Pelatih Ruben Amorim menilai performa Andre Onana dan Altay Bayindir kurang meyakinkan, sehingga manajemen mencari alternatif baru. Kehadiran Lammens diharapkan mampu memberi stabilitas tambahan pada lini pertahanan MU yang musim lalu sering menjadi sorotan. Meski masih muda, ia dianggap punya potensi besar untuk berkembang. Namun, para pengamat menilai tantangan
                 Lammens tidak ringan karena pos
                isi kiper di Manchester United selalu mendapat perhatian dan tekanan besar.'
            ],[
                 'title' => 'RRQ VALORANT Menjadi Juara VCT Pacific 2025, Didukung oleh Biznet',
                'description' => 'Tim RRQ VALORANT, yang didukung penuh oleh Biznet, mencatat sejarah baru dengan menjuarai VALORANT Champions Tour (VCT) Pacific 2025 Stage 1. Pada babak Grand Final yang berlangsung di Seoul, Korea Selatan, pada Minggu (11Mei), RRQ sukses mengalahkan Gen.G Esports dengan skor 3–1 dan meraih gelar juara pertama mereka sejak divisi ini dibentuk pada tahun 2022.'
            ],
            [
                'title' => 'EVOS Divine Juara Dunia di Esports World Cup: Free Fire 2025',
                'description' => 'EVOS Divine mengukir sejarah dengan menjadi tim Indonesia pertama yang menjadi
                 juara dunia di Grand Final Esports World Cup: Free Fire 2025, di Qiddiya Arena, Riyadh, Arab Saudi, Minggu (20/7/2025) malam waktu setempat. Mereka menyegel kemenangan Booyah di game pamungkas sekaligus menorehkan total poin tertinggi di antara 12 tim. Kemenangan ini 
                sekaligus mengakhiri puasa gelar Indonesia di kancah turnamen Free Fire dunia sejak 2019.'
            ],
            [
                'title' => 'Rizky Faidan & Elga Cahya Juara IFEC National Championship Console 2025',
                'description' => ' Rizky Faidan dan Elga Cahya berhasil menjadi juara IFEC National Championship 2025 untuk kategori console setelah mengalahkan para pesaing di final.

Kompetisi IFEC alias Indonesia Football Esports Championship adalah ajang eFootball terbesar di Indonesia tahun ini.

Final kategori console berlangsung di Spike Air Dome, PIK2, Kabupaten Tangerang, akhir Agustus 2025.

Rizky dan Elga merupakan pemain timnas eFootball yang sebelumnya sukses di FIFAe World Cup.

Kemenangan mereka membuka jalan mengikuti pemusatan latihan sebagai persiapan menuju FIFAe World Cup 2025.

'
            ],
           
        ];

        return view('articles', compact('articles'));
    }

    public function contact()
    {
        return view('contact');
    }
    
}

