@extends('layouts.default')
@section('content')

<!-- Modal -->
<div class="modal fade" id="perawatanModal" tabindex="-1" aria-labelledby="perawatanModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="perawatanModalLabel">Informasi Perawatan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                @foreach($perawatan as $item)
                    <h5>{{ $item->nama_part }}</h5>
                    <img src="{{ asset('images/' . $item->gambar) }}" alt="Perawatan Image" class="img-fluid">
                    <p>{{ $item->perawatan }}</p>
                    <hr>
                @endforeach
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

@endsection
