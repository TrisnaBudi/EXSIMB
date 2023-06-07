<?php

namespace App\Http\Controllers;

use App\Models\Diagnosa;
use App\Http\Requests\StoreDiagnosaRequest;
use App\Http\Requests\UpdateDiagnosaRequest;
use App\Models\Gejala;
use App\Models\Keputusan;
use App\Models\Kode_Gejala;
use App\Models\KondisiUser;
use App\Models\Kerusakan;
use GuzzleHttp\Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class DiagnosaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $diagnosa = Diagnosa::all();

        return view('admin.diagnosa.admin_semua_diagnosa', [
            "diagnosa" => $diagnosa,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'gejala' => Gejala::all(),
            'kondisi_user' => KondisiUser::all()
        ];

        return view('clients.form_diagnosa', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDiagnosaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDiagnosaRequest $request)
    {
        $filteredArray = $request->post('kondisi');
        $kondisi = array_filter($filteredArray, function ($value) {
            return $value !== null;
        });

        $kodeGejala = [];
        $bobotPilihan = [];
        foreach ($kondisi as $key => $val) {
            if ($val != "#") {
                array_push($kodeGejala, $key);
                array_push($bobotPilihan, array($key, $val));
            }
        }

        $kerusakan = Kerusakan::all();
        $diagnosa = $this->forwardChaining($kodeGejala, $kerusakan);
        $diagnosa_id = uniqid();
        
        Diagnosa::create([
            'diagnosa_id' => strval($diagnosa_id),
            'data_diagnosa' => json_encode($diagnosa),
            'kondisi' => json_encode($bobotPilihan)
        ]);

        return redirect()->route('spk.result', ["diagnosa_id" => $diagnosa_id]);
    }

    public function forwardChaining($kodeGejala, $kerusakan)
    {
        $diagnosa = [];

        foreach ($kerusakan as $kerusakan) {
            $gejalaKerusakan = Keputusan::whereIn("kode_gejala", $kodeGejala)
                ->where("kode_kerusakan", $kerusakan->kode_kerusakan)
                ->get();

            if (count($gejalaKerusakan) > 0) {
                $fc = $this->calculateFC($gejalaKerusakan);

                $diagnosa[] = [
                    'kode_kerusakan' => $kerusakan->kode_kerusakan,
                    'nama_kerusakan' => $kerusakan->nama_kerusakan,
                    'fc' => $fc,
                ];
            }
        }

        return $diagnosa;
    }

    public function calculateFC($gejalaKerusakan)
    {
        $fcArr = [];

        foreach ($gejalaKerusakan as $ruleKey) {
            $fc = $ruleKey->mb - $ruleKey->md;
            $fcArr[] = $fc;
        }

        $fcResult = $fcArr[0];

        for ($i = 1; $i < count($fcArr); $i++) {
            $fcResult = $fcResult + ($fcArr[$i] * (1 - $fcResult));
        }

        return $fcResult;
    }

    public function getGabunganFC($fcArr)
    {
        // if ($fcArr["kode_kerusakan"][0] == "P004") {
        //     # code...
        //     dd($fcArr);
        // }
        // echo "<br> fcArr : ";
        // print_r($fcArr);
        // echo "<br>";
        // dd($fcArr);
        if (!$fcArr["fc"]) {
            return 0;
        }
        if (count($fcArr["fc"]) == 1) {
            return [
                "value" => strval($fcArr["fc"][0]),
                "kode_kerusakan" => $fcArr["kode_kerusakan"][0]
            ];
        }

        $fcoldGabungan = $fcArr["fc"][0];

        // foreach ($fcArr["fc"] as $fc) {
        //     $fcoldGabungan = $fcoldGabungan + ($fc * (1 - $fcoldGabungan));
        // }

        for ($i = 0; $i < count($fcArr["fc"]) - 1; $i++) {
            $fcoldGabungan = $fcoldGabungan + ($fcArr["fc"][$i + 1] * (1 - $fcoldGabungan));
        }


        return [
            "value" => "$fcoldGabungan",
            "kode_kerusakan" => $fcArr["kode_kerusakan"][0]
        ];
    }

    public function diagnosaResult($diagnosa_id)
    {
        $diagnosa = Diagnosa::where('diagnosa_id', $diagnosa_id)->first();
        $gejala = json_decode($diagnosa->kondisi, true);
        $data_diagnosa = json_decode($diagnosa->data_diagnosa, true);

        $diagnosa_dipilih = [];
        $int = 0.0;

        foreach ($data_diagnosa as $val) {
            if (floatval($val["fc"]) > $int) {
                $diagnosa_dipilih["value"] = floatval($val["fc"]);
                $diagnosa_dipilih["kode_kerusakan"] = Kerusakan::where("kode_kerusakan", $val["kode_kerusakan"])->first();
                $int = floatval($val["fc"]);
            }
        }

        $kodeGejala = [];

        foreach ($gejala as $key) {
            array_push($kodeGejala, $key[0]);
        }

        $kode_kerusakan = $diagnosa_dipilih["kode_kerusakan"]->kode_kerusakan;
        $pakar = Keputusan::whereIn("kode_gejala", $kodeGejala)->where("kode_kerusakan", $kode_kerusakan)->get();

        $gejala_by_user = [];

        foreach ($pakar as $key) {
            $i = 0;

            foreach ($gejala as $gKey) {
                if ($gKey[0] == $key->kode_gejala) {
                    array_push($gejala_by_user, $gKey);
                }
            }
        }

        $nilaiPakar = [];

        foreach ($pakar as $key) {
            array_push($nilaiPakar, ($key->mb - $key->md));
        }

        $nilaiUser = [];

        foreach ($gejala_by_user as $key) {
            array_push($nilaiUser, $key[1]);
        }

        $fcKombinasi = $this->getFcCombinasi($nilaiPakar, $nilaiUser);
        $hasil = $this->getGabunganFC($fcKombinasi);

        return view('clients.cl_diagnosa_result', [
            "diagnosa" => $diagnosa,
            "diagnosa_dipilih" => $diagnosa_dipilih,
            "gejala" => $gejala,
            "data_diagnosa" => $data_diagnosa,
            "pakar" => $pakar,
            "gejala_by_user" => $gejala_by_user,
            "fc_kombinasi" => $fcKombinasi,
            "hasil" => $hasil,
        ]);
    }

    public function getFcCombinasi($pakar, $user)
    {
        $fcComb = [];

        if (count($pakar) == count($user)) {
            for ($i = 0; $i < count($pakar); $i++) {
                $res = $pakar[$i] * $user[$i];
                array_push($fcComb, floatval($res));
            }

            return [
                "fc" => $fcComb,
                "kode_kerusakan" => ["0"]
            ];
        } else {
            return "Data tidak valid";
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Diagnosa  $diagnosa
     * @return \Illuminate\Http\Response
     */
    public function show(Diagnosa $diagnosa)
    {
            // Kode logika dan penghitungan hasil diagnosa

    // Menghitung presentase untuk setiap kemungkinan hasil
    $kemungkinan_hasil = [];
    // Logika untuk menghitung dan mengisi $kemungkinan_hasil dengan hasil diagnosa dan presentasenya

    // Mengurutkan $kemungkinan_hasil berdasarkan presentase tertinggi
    usort($kemungkinan_hasil, function ($a, $b) {
        return $b['persentase'] <=> $a['persentase'];
    });

    // Mengambil 3 kemungkinan hasil teratas
    $kemungkinan_hasil = array_slice($kemungkinan_hasil, 0, 3);

    return view('nama_view', [
        'kemungkinan_hasil' => $kemungkinan_hasil,
        // Data lain yang akan dikirim ke view
    ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Diagnosa  $diagnosa
     * @return \Illuminate\Http\Response
     */
    public function edit(Diagnosa $diagnosa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDiagnosaRequest  $request
     * @param  \App\Models\Diagnosa  $diagnosa
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDiagnosaRequest $request, Diagnosa $diagnosa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Diagnosa  $diagnosa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Diagnosa $diagnosa)
    {
        //
    }
}
