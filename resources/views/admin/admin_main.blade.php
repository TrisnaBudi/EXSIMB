@extends('main')

@section('main_section')
<div class="container-fluid overflow-hidden">
    <div class="row vh-100 overflow-auto d-flex"> {{-- Tambahkan kelas d-flex di sini --}}
        {{-- sidebar --}}
        @include('components.admin_sidebar')

        {{-- isi --}}
        <div class="col d-flex flex-column h-sm-100">
        <main class="row overflow-auto" style="margin-left: 0"> {{-- Perbarui kelas pada elemen main --}}
            @yield('admin_content')
        </main>
        </div>
    </div>
</div>
@endsection
