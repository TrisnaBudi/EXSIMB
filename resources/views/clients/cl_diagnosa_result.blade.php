@extends('clients.cl_main')
@section('title', 'Form Diagnosa')
@include('includes.header')
@section('cl_content')
    <div class="container" style="margin-top: 150px;">
        <div class="wrap normal">
            <div class="page-heading plain">
                <h1 class="entry-title">Hasil Diagnosa</h1>
            </div>
        </div>
        <div class="row mx-auto my-4">
            <div class="col-lg-10 mx-auto">

                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Diagnosa ID</th>
                                <th scope="col">Kerusakan</th>
                                <th scope="col">Persentase</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>{{ $diagnosa->diagnosa_id }}</td>
                                <td>{{ $diagnosa_dipilih["kode_kerusakan"]->kode_kerusakan }} | {{ $diagnosa_dipilih["kode_kerusakan"]->kerusakan }}</td>
                                <td>{{ round(($hasil["value"] * 100), 2) }}%</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4">
                <div class="table-responsive mt-4">
                    <table class="table table-hover border border-primary p-3">
                        <thead>
                            <tr>
                                <th scope="col">Pakar</th>
                            </tr>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Gejala</th>
                                <th scope="col">Nilai (MB - MD)</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pakar as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->kode_gejala }} | {{ $item->kode_kerusakan }}</td>
                                    <td>{{ $item->mb - $item->md }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="table-responsive mt-4">
                    <table class="table table-hover border border-danger p-3">
                        <thead>
                            <tr>
                                <th scope="col">User</th>
                            </tr>
                            <tr>
                                <th scope="col">Gejala</th>
                                <th scope="col">Nilai</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($gejala_by_user as $key)
                                <tr>
                                    <td>{{ $key[0] }}</td>
                                    <td>{{ $key[1] }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="table-responsive mt-4">
                    <table class="table table-hover border border-info p-3">
                        <thead>
                            <tr>
                                <th scope="col">Hasil</th>
                            </tr>
                            <tr>
                                <th scope="col">Nilai</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($fc_kombinasi["fc"] as $key)
                                <tr>
                                    <td>{{ $key }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="card my-4">
                    <div class="card-header">
                        <h5>Hasil</h5>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">
                            {{ $diagnosa_dipilih["kode_kerusakan"]->kode_kerusakan }} | {{ $diagnosa_dipilih["kode_kerusakan"]->kerusakan }}
                        </h5>
                        <p class="card-text">Jadi dapat disimpulkan bahwa pasien mengalami kerusakan dengan tingkat kepastian yaitu <span class="fw-semibold fs-4">{{ round(($hasil["value"] * 100), 2) }}</span> %</p>
                    
                        <h5 class="card-title">Solusi:</h5>
                        <p>{{ $diagnosa_dipilih["kode_kerusakan"]->solusi }}</p>
                    </div>                    
                </div>
            </div>
        </div>

        <div class="d-grid gap-2 d-md-flex justify-content-md-end my-4">
            <a href="{{ url()->previous() }}" class="btn btn-info me-md-2" role="button">BACK</a>
            <a href="/" class="btn btn-info" role="button">HOME</a>
        </div>
    </div>
@endsection
