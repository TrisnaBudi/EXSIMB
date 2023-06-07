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
                "kerusakan" => "Wheel hub rusak"
            ],
            [
                "kode_kerusakan" => "K02",
                "kerusakan" => "Rear derailleur rusak"
            ],
            [
                "kode_kerusakan" => "K03",
                "kerusakan" => "Front derailleur rusak"
            ],
            [
                "kode_kerusakan" => "K04",
                "kerusakan" => "Cassette/sprocket rusak"
            ],
            [
                "kode_kerusakan" => "K05",
                "kerusakan" => "Rim rusak"
            ],
            [
                "kode_kerusakan" => "K06",
                "kerusakan" => "Rantai rusak"
            ],
            [
                "kode_kerusakan" => "K07",
                "kerusakan" => "Bottom bracket rusak"
            ],
            [
                "kode_kerusakan" => "K08",
                "kerusakan" => "Crankset rusak"
            ],
            [
                "kode_kerusakan" => "K09",
                "kerusakan" => "Caliper rem rusak"
            ],
            [
                "kode_kerusakan" => "K10",
                "kerusakan" => "Master rem rusak"
            ],
            [
                "kode_kerusakan" => "K11",
                "kerusakan" => "Shifter rusak"
            ],
            [
                "kode_kerusakan" => "K12",
                "kerusakan" => "Headset rusak"
            ],
            [
                "kode_kerusakan" => "K13",
                "kerusakan" => "Rear shock rusak"
            ],
            [
                "kode_kerusakan" => "K14",
                "kerusakan" => "Suspension fork rusak"
            ],
            [
                "kode_kerusakan" => "K15",
                "kerusakan" => "Kabel shifter rusak"
            ],
            [
                "kode_kerusakan" => "K16",
                "kerusakan" => "Kabel rem rusak"
            ],
            [
                "kode_kerusakan" => "K17",
                "kerusakan" => "Pedal rusak"
            ],
            
        ];
        return $kerusakan;
    }
}
