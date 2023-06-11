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
                            <h1 class="parallax-fade-top-2 typed">Cek Kerusakan <strong>Sepedamu</strong> Sekarang!<br>
                                <span id="typed-1"></span></h1>
                            <br>
                            <div style="margin-left: 12px">
                                <a href="/form-faq" class="btn btn-dark btn-glow" role="button"
                                    style="color: rgb(255, 255, 255)">Diagnosa Sekarang!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero Section -->

        <div class="section padding-top-big padding-bottom-big">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 page-center-text-wrap text-center">
                        <h1 class="parallax"><strong>-</strong> Project Tugas Akhir <strong>-</strong><br><span>Sistem
                                Pakar</span></h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="section padding-top-bottom-big background-dark">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 text-center">
                        <div id="owl-sep-1" class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="quote">
                                    <p class="lead">"EXSIMB adalah situs yang membantu para rider mendiagnosa kerusakan
                                        sepeda dengan mengisi formulir pertanyaan. Selain itu, saya juga menyediakan
                                        informasi dan solusi yang berguna untuk membantu Anda dalam memperbaiki
                                        sepeda."</p>
                                    <h6>&rarr;</h6>
                                </div>
                            </div>
                            <div class="item">
                                <div class="quote">
                                    <p class="lead">"EXSIMB bukanlah pengganti tenaga profesional, jadi pastikan untuk
                                        tetap pergi ke teknisi terdekat bila mengalami kerusakan berat."</p>
                                    <h6>&rarr;</h6>
                                </div>
                            </div>
                            <div class="item">
                                <div class="quote">
                                    <p class="lead">"EXSIMB sebagai proyek tugas akhir yang diharapkan dapat membantu
                                        para rider mendiagnosa kerusakan sepeda dan menemukan solusi
                                        sesuai."</p>
                                    <h6>&rarr;</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- FAQ Section -->
        <section id="faq" class="bg-light py-5">
            <div class="container">
                <h2 class="text-center mb-5">Pertanyaan yang Sering Diajukan - FAQ</h2>
                <div class="accordion" id="faqAccordion">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                    data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Apa itu EXSIMB?
                                </button>
                            </h2>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                            data-parent="#faqAccordion">
                            <div class="card-body">
                                EXSIMB adalah sebuah situs yang membantu para rider untuk mendiagnosis kerusakan sepeda dengan
                                mengisi formulir pertanyaan. Kami juga menyediakan solusi sesuai formulir tersebut.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Siapa yang bisa mengakses EXSIMB?
                                </button>
                            </h2>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#faqAccordion">
                            <div class="card-body">
                                EXSIMB ditujukan untuk para rider pemilik sepeda gunung, namun siapa saja dapat mengakses situs ini dan mengisi
                                formulir.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Apakah hasil dari EXSIMB dapat diandalkan?
                                </button>
                            </h2>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                            data-parent="#faqAccordion">
                            <div class="card-body">
                                Hasil dari EXSIMB adalah sebuah kemungkinan, dan tidak bisa dianggap
                                sebagai diagnosis yang pasti. Kami sangat menyarankan agar rider tetap mendatangi teknisi apabila tidak mampu memperbaiki.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingFour">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Bagaimana cara mengakses solusi yang ditawarkan EXSIMB?
                                </button>
                            </h2>
                        </div>
                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                            data-parent="#faqAccordion">
                            <div class="card-body">
                                Setelah mengisi formulir, rider akan menerima rekomendasi solusi sesuai dengan kerusakan yang
                                terdeteksi.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- End Document
    ================================================== -->
@endsection
