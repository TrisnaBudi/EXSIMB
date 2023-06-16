@extends('layouts.default')
@section('content')
<main>
    <!-- Hero Section -->
    <div class="section full-height mob-height">
        <div class="background-parallax" style="background-image: url('{{ asset('landing/img/full-2.jpg') }}') " data-enllax-ratio=".5"
            data-enllax-type="background" data-enllax-direction="vertical"></div>
        <div class="hero-center-text-wrap">
            <div class="container text-left">
                <div class="row">
                    <div class="col-md-12">
                        <br>
                        <br>
                        <h1 class="parallax-fade-top-2 typed">Tentang <strong>Pengembang</strong> dan Aplikasi<br>
                            <span id="typed-2"></span></h1>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section bg-light"  data-stellar-background-ratio="0.5">
        <div class="section py-4 bg-dark" >
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-5 text-center ">
                        <h4 style="color: white">Developer</h4>
                        <p class="lead" style="color: white">EXSIMB</p>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-5 text-center">
                        <div class="text-center" >
                            <img class="border border-secondary" src="{{ asset('landing/img/dev.jpg') }}" alt="" style="max-width: 300px; border-radius: 40px;">
                            <h4 class="py-2" style="color: white">Mahasiswa Tingkat Akhir <br> Politeknik TEDC Bandung</h4>
                            <h6 style="color: white">Trisna Budi Wicaksana</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-white py-5">
            <div class="container py-5">
                <div class="row align-items-center mb-5">
                    <div class="col-lg-6 order-2 order-lg-1"><i class="fa fa-bar-chart fa-2x mb-3 text-primary"></i>
                        <h2  style="font-family: 'Plus Jakarta Sans', sans-serif; font-weight: 600;">Our Story</h2>
                        <p class="lead text-justify mb-4">
                            EXSIMB adalah singkatan Expert System Mountain Bike, yaitu sistem yang memasukan ilmu atau keahlian pakar untuk menyelesaikan suatu masalah pada bidangnya.<br>
                            Sistem ini dibuat dengan maksud utama sebagai projek tugas akhir untuk memenuhi syarat kelulusan dan diharapkan agar bisa membantu para pemilik kendaraan sepeda untuk mendiagnosa dan menemukan solusi untuk masalah pada sepedanya.<br>
                            Sistem ini mengadaptasi ilmu dari seorang pakar yaitu teknisi sepeda yang telah berkecimpung di bidang ini selama lebih dari sepuluh tahun dengan spesialisasi untuk sepeda gunung. <br>
                            Sistem ini menilai hasil diagnosa berdasarkan pertanyaan yang anda jawab dan menghitung presentasi kemungkinan kerusakan yang terjadi untuk kemudian memberi solusi sesuai kerusakan yang di alami. <br>

                            <br>
                        </p>
                    </div>
                    <div class="col-lg-5 px-5 mx-auto order-1 order-lg-2">
                        <img src="https://bootstrapious.com/i/snippets/sn-about/img-1.jpg" alt=""
                            class="img-fluid mb-4 mb-lg-0">
                    </div>
                </div>
            </div>
        </div>

    </section>

</main>
@endsection
