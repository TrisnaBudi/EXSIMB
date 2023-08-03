@extends('admin.admin_main')
@section('title', 'List_admin')

{{-- isi --}}
@section('admin_content')
    <!-- Page content-->
    <main id="main" class="main" style="margin-left: 0">

        <div class="pagetitle">
            <h1>Daftar Admin</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                    <li class="breadcrumb-item active">Admin</li>
                    {{-- <li class="breadcrumb-item active">Daftar Admin</li> --}}
                </ol>
            </nav>
        </div><!-- End Page Title -->
        {{-- <div class="card">
          <div class="card-body">
              <h5 class="card-title">Tambah Admin</h5>
              <p class="card-text">Tambahkan admin baru.</p>
              <div class="mt-3">
                  <a href="{{ route('admin.add_admin') }}" class="btn btn-primary">Tambah Admin</a>
              </div>
          </div>
      </div> --}}
        <section class="section dashboard">
            <div class="row">
                <style>
                    .card-text {
                        font-size: 14px;
                        color: #666;
                    }

                    .card-title {
                        font-size: 18px;
                        font-weight: bold;
                    }
                </style>
                <div class="card-deck">
                    @foreach ($users as $u)
                        <div class="card">
                            <i class="bi bi-person-fill"></i>
                            <div class="card-body">
                                <h5 class="card-title">{{ $u->name }}</h5>
                                <p class="card-text">{{ $u->email }}</p>
                                <div class="mt-3">
                                    <a href="{{ route('admin.edit', ['id' => auth()->id()]) }}" class="btn btn-primary">Edit</a>
                                    {{-- <form action="{{ route('admin.destroy', ['id' => $u->id]) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form> --}}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

    </main><!-- End #main -->
@endsection
