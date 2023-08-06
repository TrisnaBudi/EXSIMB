@extends('layouts.default')
@section('content')
<div id="page" class="site">
  <main id="content" class="site-content">
    <article id="post-22" class="post-22 screen type-screen status-publish hentry condition-depression">
      <div class="wrap normal">
      </div>
      <div class="wrap medium">
        <div class="page-intro">
          <div class="gf_browser_safari gform_wrapper gform_legacy_markup_wrapper" id="gform_wrapper_1" style="">
            <form method="post" enctype="multipart/form-data" id="gform_1" action="{{ route('spk.store') }}" novalidate="">
              @csrf
              <ol class="screen-progress-bar clearfix step-1-of-3">
                <li class="step-1"><span>Informasi<br>Tes</span></li>
                <li class="step-2"><span>Pertanyaan<br>Tes</span></li>
                <li class="step-3"><span>Hasil<br>Anda</span></li>
              </ol>
              <div class="gform_body gform-body ">
                <div id="gform_page_1_1" class="gform_page">
                  <div class="gform_page_fields">
                    <section id="faq" class="bg-light py-5">
                      <div class="container">
                        <h2 class="text-center mb-5">Pertanyaan yang Sering Diajukan - FAQ</h2>
                        <div class="accordion" id="faqAccordion">
                          <div class="card">
                            <div class="card-header" id="headingOne">
                              <h2 class="mb-0">
                                <button class="btn btn-link" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                  Apa itu EXSIMB?
                                </button>
                              </h2>
                            </div>
                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                              <div class="card-body">
                                EXSIMB adalah sebuah situs yang membantu para rider untuk mendiagnosis kerusakan sepeda dengan
                                mengisi formulir pertanyaan. Kami juga menyediakan solusi sesuai formulir tersebut.
                            </div>
                            </div>
                          </div>
                          <div class="card">
                            <div class="card-header" id="headingTwo">
                              <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                  Siapa yang bisa mengakses EXSIMB?
                                </button>
                              </h2>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                              <div class="card-body">
                                EXSIMB ditujukan untuk para rider pemilik sepeda gunung, namun siapa saja dapat mengakses situs ini dan mengisi
                                formulir.
                            </div>
                            </div>
                          </div>
                          <div class="card">
                            <div class="card-header" id="headingThree">
                              <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                  Apakah hasil dari EXSIMB dapat diandalkan?
                                </button>
                              </h2>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                              <div class="card-body">
                                Hasil dari EXSIMB adalah sebuah kemungkinan, dan tidak bisa dianggap
                                sebagai diagnosis yang pasti. Kami sangat menyarankan agar rider tetap mendatangi teknisi apabila tidak mampu memperbaiki.
                            </div>
                            </div>
                          </div>
                          <div class="card">
                            <div class="card-header" id="headingFour">
                              <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                  Bagaimana cara mengakses solusi yang ditawarkan EXSIMB?
                                </button>
                              </h2>
                            </div>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                              <div class="card-body">
                                Setelah mengisi formulir, rider akan menerima rekomendasi solusi sesuai dengan kerusakan yang
                                terdeteksi.
                            </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </section>
                  </div>
                  <div class="gform_page_footer top_label">
                    <a style="align-content: flex-end" href="/" class="gform_back_button button"> BACK</a>
                    <a style="align-content: flex-start" href="/form" class="gform_next_button button"> NEXT</a>
                  </div>
                </div>
              </div>
            </form>
          </div>
          <p>&nbsp;</p>
          <hr>
        </div>
      </div>
    </article>
  </main>
</div>
@endsection
