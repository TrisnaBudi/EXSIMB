<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kerusakan extends Model
{
    use HasFactory;
    protected $table = 'kerusakan';
    protected $guard = ["id"];
    protected $fillable = ['kode_kerusakan', 'kerusakan'];

    public function fillTable()
    {
        $kerusakan = [
            [
                "kode_kerusakan" => "K01",
                "kerusakan" => "Wheel hub rusak",
                "solusi" => "Buka roda dari sepeda dengan melepas quick-release atau baut pengikat roda. Periksa kondisi bantalan dalam hub. 
                Jika bantalan rusak, ganti dengan yang baru.
                Bersihkan dan beri pelumas bantalan jika masih baik.
                Pasang kembali roda dan pastikan roda berputar lancar tanpa ada keloyoran.
                Periksa juga kondisi cone dan locknut.
                Jika rusak, ganti dengan yang baru."
            ],
            [
                "kode_kerusakan" => "K02",
                "kerusakan" => "Rear derailleur rusak",
                "solusi" => "Periksa kondisi jockey wheel (roda pengarah). Jika aus atau rusak, ganti dengan yang baru.
                Pastikan mounting bolt-nya kencang dan tidak ada bagian yang patah atau bengkok.
                Sesuaikan kabel penggantian gigi dan indexing untuk memastikan pergantian gigi yang tepat."
            ],
            [
                "kode_kerusakan" => "K03",
                "kerusakan" => "Front derailleur rusak",
                "solusi" => "Periksa kondisi jockey wheel (roda pengarah). Jika aus atau rusak, ganti dengan yang baru.
                Pastikan mounting bolt-nya kencang dan tidak ada bagian yang patah atau bengkok.
                Sesuaikan kabel penggantian gigi dan indexing untuk memastikan pergantian gigi yang tepat."
            ],
            [
                "kode_kerusakan" => "K04",
                "kerusakan" => "Cassette/sprocket rusak",
                "solusi" => "Gunakan alat khusus (chain whip dan cassette lockring tool) untuk membuka cassette/sprocket lama.
                Bersihkan bagian dalam cassette/sprocket dari kotoran sebelum memasang yang baru.
                Pasang cassette/sprocket yang baru dan pastikan kencang menggunakan torque wrench."
            ],
            [
                "kode_kerusakan" => "K05",
                "kerusakan" => "Rim rusak",
                "solusi" => "Jika terdapat benturan atau goresan kecil, Anda bisa mencoba menyesuaikan dengan melepas dan memasang kembali spoke (batang roda) dengan ketegangan yang tepat.
                Jika retak atau kerusakan lebih parah, ganti dengan rim baru.
                Pastikan roda terencana dengan baik setelah perbaikan."
            ],
            [
                "kode_kerusakan" => "K06",
                "kerusakan" => "Rantai rusak",
                "solusi" => "Ganti rantai yang aus atau patah dengan ukuran yang sesuai.
                Pastikan panjang rantai sesuai untuk menghindari ketegangan berlebihan."
            ],
            [
                "kode_kerusakan" => "K07",
                "kerusakan" => "Bottom bracket rusak",
                "solusi" => "Buka bottom bracket menggunakan alat khusus sesuai jenis bottom bracket yang Anda miliki.
                Ganti dengan bottom bracket baru yang sesuai atau bantalan yang rusak.
                Pasang kembali bottom bracket dengan benar dan kencangkan."
            ],
            [
                "kode_kerusakan" => "K08",
                "kerusakan" => "Crankset rusak",
                "solusi" => "Ganti crankset yang rusak atau patah dengan yang baru.
                Pastikan crankset terpasang dengan benar dan kencangkan baut pengikat."
            ],
            [
                "kode_kerusakan" => "K09",
                "kerusakan" => "Caliper rem rusak",
                "solusi" => "Periksa apakah caliper rem aus atau mengalami masalah dengan sistem pengereman.
                Ganti bagian yang rusak seperti rem kampas (brake pads) jika perlu.
                Lakukan penyetelan kembali agar rem berfungsi dengan baik."
            ],
            [
                "kode_kerusakan" => "K10",
                "kerusakan" => "Master rem rusak",
                "solusi" => "Ganti tuas rem yang rusak atau patah dengan yang baru dan sesuai model sepeda Anda."
            ],
            [
                "kode_kerusakan" => "K11",
                "kerusakan" => "Shifter rusak",
                "solusi" => "Ganti shifter yang rusak dengan yang baru dan sesuai sistem penggantian gigi pada sepeda Anda."
            ],
            [
                "kode_kerusakan" => "K12",
                "kerusakan" => "Headset rusak",
                "solusi" => "Buka headset menggunakan alat khusus sesuai jenis headset yang Anda miliki.
                Ganti bantalan headset yang rusak atau aus.
                Pasang kembali headset dengan benar dan pastikan tidak ada keloyoran berlebih."

            ],
            [
                "kode_kerusakan" => "K13",
                "kerusakan" => "Rear shock rusak",
                "solusi" => "Ganti rear shock yang rusak dengan yang baru dan sesuai tipe sepeda Anda.
                Pastikan mounting hardware dan baut-baut pengikat dalam kondisi baik."
            ],
            [
                "kode_kerusakan" => "K14",
                "kerusakan" => "Suspension fork rusak",
                "solusi" => "Ganti suspension fork yang rusak dengan yang baru dan sesuai tipe sepeda Anda.
                Pastikan mounting hardware dan baut-baut pengikat dalam kondisi baik."
            ],
            [
                "kode_kerusakan" => "K15",
                "kerusakan" => "Kabel shifter rusak",
                "solusi" => "Ganti kabel yang rusak dengan yang baru dan pastikan untuk mengencangkan dan mengatur dengan benar.
                Potong kabel dengan panjang yang tepat dan pastikan tidak ada keloyoran."
            ],
            [
                "kode_kerusakan" => "K16",
                "kerusakan" => "Kabel rem rusak",
                "solusi" => "Ganti kabel yang rusak dengan yang baru dan pastikan untuk mengencangkan dan mengatur dengan benar.
                Potong kabel dengan panjang yang tepat dan pastikan tidak ada keloyoran."
            ],
            [
                "kode_kerusakan" => "K17",
                "kerusakan" => "Pedal rusak",
                "solusi" => "Ganti pedal yang rusak atau patah dengan yang baru dan sesuai model sepeda Anda.
                Pastikan pedal terpasang dengan benar dan kencangkan baut pengikat."
            ],
            
        ];
        return $kerusakan;
    }
}
