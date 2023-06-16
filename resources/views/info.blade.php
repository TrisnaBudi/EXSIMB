@extends('layouts.default')
@section('content')
<main>
    <!-- Hero Section -->
    <div class="section full-height mob-height">
        <div class="background-parallax" style="background-image: url('{{ asset('landing/img/full-2.jpg') }}')" data-enllax-ratio=".5"
            data-enllax-type="background" data-enllax-direction="vertical"></div>
        <div class="hero-center-text-wrap">
            <div class="container text-left">
                <div class="row">
                    <div class="col-md-12">
                        <br>
                        <br>
                        <h1 class="parallax-fade-top-2 typed">Informasi <strong>Perawatan</strong><br>
                            <span id="typed-3"></span></h1>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="portfolio my-5">
        <div class="container">
            <div class="row shuffle-wrapper portfolio-gallery">
                @foreach($perawatan as $item)
                    <div class="col-lg-4 col-6 mb-4 shuffle-item">
                        <div class="position-relative inner-box">
                            <div class="image position-relative my-2" style="border-radius: 40px;">
                                <img src="{{ $item['gambar'] }}" alt="portfolio-image" class="img-fluid w-100 d-block rounded" style="object-fit: cover; height: 300px;">
                                <div class="overlay-box">
                                    <div class="overlay-inner" style="border-radius: 40px;">
                                        <a class="overlay-content" style="border-radius: 40px;">
                                            <h5 class="mb-0">{{ $item['nama_part'] }}</h5>
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#perawatanModal" data-id="{{ $item['id'] }}" data-nama="{{ $item['nama_part'] }}">
                                                Tampilkan Info Perawatan
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>       
                @endforeach
            </div>
        </div>
    </section>
</main>


<!-- Modal -->
<div class="modal fade" id="perawatanModal" tabindex="-1" aria-labelledby="perawatanModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" style="max-width: 800px;">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="perawatanModalLabel">Informasi Perawatan</h5>
            </div>
            <div class="modal-body">
                <!-- Treatment Information -->
                <h5 id="treatmentName"></h5>
                <img id="treatmentImage" src="" alt="Perawatan Image" class="img-fluid rounded-circle mx-auto d-block" style="max-width: 200px; max-height: 200px;">
                <p id="treatmentDescription" style="font-size: 16px;"></p>
                <hr>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>



@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var modal = new bootstrap.Modal(document.getElementById('perawatanModal'), {
            backdrop: 'static',
            keyboard: false
        });

        var modalTriggers = document.querySelectorAll('[data-bs-toggle="modal"]');
        modalTriggers.forEach(function(trigger) {
            trigger.addEventListener('click', function() {
                var id = this.getAttribute('data-id');
                var nama = this.getAttribute('data-nama');

                var modalBody = document.querySelector('#perawatanModal .modal-body');

                // Make an AJAX request to fetch the treatment information based on the ID or name
                // Replace the AJAX request with your own implementation to retrieve the treatment information
                // and update the modal body accordingly

                // Example: Update modal body with treatment information
                var xhr = new XMLHttpRequest();
                xhr.onreadystatechange = function() {
                    if (this.readyState === 4 && this.status === 200) {
                        var data = JSON.parse(this.responseText);
                        document.getElementById('treatmentName').textContent = data.nama_part;
                        document.getElementById('treatmentImage').src = data.gambar;
                        document.getElementById('treatmentDescription').textContent = data.perawatan;
                    }
                };
                xhr.open('GET', '/perawatan/' + id, true);
                xhr.send();

                modal.show();
            });
        });

        var closeModalButton = document.querySelector('[data-bs-dismiss="modal"]');
        closeModalButton.addEventListener('click', function() {
            modal.hide();
        });
    });
</script>
@endsection

@endsection
