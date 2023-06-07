<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gejala extends Model
{
    use HasFactory;
    protected $table = 'gejala';
    protected $guard = ["id"];
    protected $fillable = ["kode_gejala", "gejala"];

    public function fillTable()
    {


        $gejala = [
            [
                "kode_gejala" => "G01",
                "gejala" => "Bunyi berdengung atau berdecit"
            ],
            [
                "kode_gejala" => "G02",
                "gejala" => "Putaran roda tidak lancar"
            ],
            [
                "kode_gejala" => "G03",
                "gejala" => "Ketegangan rantai tidak konsisten"
            ],
            [
                "kode_gejala" => "G04",
                "gejala" => "Sulit mengubah gear belakang"
            ],
            [
                "kode_gejala" => "G05",
                "gejala" => "Tidak dapat merubah gear belakang"
            ],
            [
                "kode_gejala" => "G06",
                "gejala" => "Bunyi Berderik"
            ],
            [
                "kode_gejala" => "G07",
                "gejala" => "Sulit mengubah gear depan"
            ],
            [
                "kode_gejala" => "G08",
                "gejala" => "Tidak dapat merubah gear depan"
            ],
            [
                "kode_gejala" => "G09",
                "gejala" => "Ketegangan kabel tidak pas"
            ],
            [
                "kode_gejala" => "G10",
                "gejala" => "Rantai lompat"
            ],
            [
                "kode_gejala" => "G11",
                "gejala" => "Roda goyang"
            ],
            [
                "kode_gejala" => "G12",
                "gejala" => "Rantai menyentak"
            ],
            [
                "kode_gejala" => "G13",
                "gejala" => "Terdapat gigi yang aus"
            ],
            [
                "kode_gejala" => "G14",
                "gejala" => "Sulit dikendarai"
            ],
            [
                "kode_gejala" => "G15",
                "gejala" => "Ban bocor"
            ],
            [
                "kode_gejala" => "G16",
                "gejala" => "Rantai aus"
            ],
            [
                "kode_gejala" => "G17",
                "gejala" => "Sulit mengayuh pedal"
            ],
            [
                "kode_gejala" => "G18",
                "gejala" => "Bottom bracket kendor"
            ],
            [
                "kode_gejala" => "G19",
                "gejala" => "Pergerakan tidak normal pada pedal"
            ],
            [
                "kode_gejala" => "G20",
                "gejala" => "Pergerakan tidak normal pada Crankset"
            ],
            [
                "kode_gejala" => "G21",
                "gejala" => "Rem menjepit atau loss"
            ],
            [
                "kode_gejala" => "G22",
                "gejala" => "Caliper rem longgar"
            ],
            [
                "kode_gejala" => "G23",
                "gejala" => "Rem kurang berfungsi"
            ],
            [
                "kode_gejala" => "G24",
                "gejala" => "Tuas terlalu keras atau terlalu ringan"
            ],
            [
                "kode_gejala" => "G25",
                "gejala" => "Tuas macet"
            ],
            [
                "kode_gejala" => "G26",
                "gejala" => "Sepeda tidak stabil"
            ],
            [
                "kode_gejala" => "G27",
                "gejala" => "Stang sulit digerakkan"
            ],
            [
                "kode_gejala" => "G28",
                "gejala" => "Suspensi tidak berfungsi"
            ],
            [
                "kode_gejala" => "G29",
                "gejala" => "Terdapat bocoran oli"
            ],
            [
                "kode_gejala" => "G30",
                "gejala" => "Shock tidak dapat dipompa"
            ],
            [
                "kode_gejala" => "G31",
                "gejala" => "Fork tidak dapat dipompa"
            ],
            [
                "kode_gejala" => "G32",
                "gejala" => "Suara gesekan pada kabel"
            ],
            [
                "kode_gejala" => "G33",
                "gejala" => "Kabel putus"
            ],
            [
                "kode_gejala" => "G34",
                "gejala" => "Pedal macet"
            ],
        ];

        return $gejala;
    }
}
