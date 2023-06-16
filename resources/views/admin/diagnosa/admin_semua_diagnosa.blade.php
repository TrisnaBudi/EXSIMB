@extends('admin.admin_main')
@section('title', 'Diagnosa')

{{-- isi --}}
@section('admin_content')
    <!-- Page content-->
    <div class="pagetitle mt-2">
        <h1>Diagnosa</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
            <li class="breadcrumb-item active"> Diagnosa</li>
          </ol>
        </nav>
    </div><!-- End Page Title -->

    <div class="container text-center">
        <div class="row">
            <div class="col-lg-12 justify-content-center mx-auto">
                <table id="tabel-diagnosa" class="table table-bordered table-hover my-2">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Diagnosa ID</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($diagnosa as $item)
                            <?php
                            $int = 0;
                            $data_diagnosa = json_decode($item->data_diagnosa, true);

                        
                            foreach ($data_diagnosa as $val) {
                                if (isset($val["value"]) && floatval($val["value"]) > $int) {
                                    $diagnosa_dipilih["value"] = floatval($val["value"]);
                                    $diagnosa_dipilih["kode_kerusakan"] = App\Models\Kerusakan::where("kode_kerusakan", $val["kode_kerusakan"])->first();
                                    $int = floatval($val["value"]);
                                }
                            }
                            ?>
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $item->diagnosa_id }}</td>
                                <td>
                                    <a class="btn btn-outline-info" href="{{ route('spk.result', ["diagnosa_id" => $item->diagnosa_id]) }}">
                                        Detail
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
