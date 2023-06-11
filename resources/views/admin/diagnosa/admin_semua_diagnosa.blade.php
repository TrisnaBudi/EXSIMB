@extends('admin.admin_main')
@section('title', 'Dashboard')

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
    <main id="main" class="main" style="margin-left: 0">
        <section class="section dashboard">
            <div class="row">
                <div class="col-lg-12">
                    <table class="table table-hover mt-2 p-2">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Diagnosa ID</th>
                            <th scope="col">Kerusakan</th>
                            <th scope="col">Persentase</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($diagnosa as $item)
                            <?php
                            $int = 0;
                            $data_diagnosa = json_decode($item->data_diagnosa, true);
                            $diagnosa_dipilih = [
                                "value" => 0,
                                "kode_kerusakan" => null
                            ];
                        
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
                                    @if ($diagnosa_dipilih["kode_kerusakan"])
                                        {{ $diagnosa_dipilih["kode_kerusakan"]->kode_kerusakan }} | {{ $diagnosa_dipilih["kode_kerusakan"]->kerusakan }}
                                    @endif
                                </td>
                                <td>{{ ($diagnosa_dipilih["value"] * 100) }} %</td>
                                <td><a class="p-2" href="{{ route('spk.result', ["diagnosa_id" => $item->diagnosa_id]) }}">Detail</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </main><!-- End #main -->
@endsection
