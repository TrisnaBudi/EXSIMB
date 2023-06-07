<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keputusan extends Model
{
    use HasFactory;
    protected $table = 'keputusan';
    protected $guard = ["id"];

    public function kerusakan()
    {
        return $this->hasMany(Kerusakan::class, 'kode_kerusakan', 'kode_kerusakan');
    }
    public function gejala()
    {
        return $this->hasMany(Gejala::class, 'kode_gejala' /* tbl gejala */, 'kode_gejala');
    }

    public function fillTable()
    {
    $rule = [
        // K01 => Wheel hub rusak
        [
            'kode_kerusakan' => 'K01',
            'kode_gejala' => 'G01',
            'mb' => 0.8,
            'md' => 0.2
        ],
        [
            'kode_kerusakan' => 'K01',
            'kode_gejala' => 'G02',
            'mb' => 0.7,
            'md' => 0.3
        ],
        [
            'kode_kerusakan' => 'K01',
            'kode_gejala' => 'G03',
            'mb' => 0.6,
            'md' => 0.4
        ],
        [
            'kode_kerusakan' => 'K01',
            'kode_gejala' => 'G04',
            'mb' => 0.8,
            'md' => 0.2
        ],
        [
            'kode_kerusakan' => 'K01',
            'kode_gejala' => 'G06',
            'mb' => 0.7,
            'md' => 0.3
        ],
        [
            'kode_kerusakan' => 'K01',
            'kode_gejala' => 'G11',
            'mb' => 0.6,
            'md' => 0.4
        ],
        [
            'kode_kerusakan' => 'K01',
            'kode_gejala' => 'G26',
            'mb' => 0.8,
            'md' => 0.2
        ],
        // K02 => Rear derailleur rusak
        [
            'kode_kerusakan' => 'K02',
            'kode_gejala' => 'G02',
            'mb' => 0.7,
            'md' => 0.3
        ],
        [
            'kode_kerusakan' => 'K02',
            'kode_gejala' => 'G03',
            'mb' => 0.6,
            'md' => 0.4
        ],
        [
            'kode_kerusakan' => 'K02',
            'kode_gejala' => 'G04',
            'mb' => 0.8,
            'md' => 0.4
        ],
        [
            'kode_kerusakan' => 'K02',
            'kode_gejala' => 'G05',
            'mb' => 0.9,
            'md' => 0.1
        ],
        [
            'kode_kerusakan' => 'K02',
            'kode_gejala' => 'G06',
            'mb' => 0.7,
            'md' => 0.3
        ],
        [
            'kode_kerusakan' => 'K05',
            'kode_gejala' => 'G12',
            'mb' => 0.8,
            'md' => 0.2
        ],
        // K03 => Front derailleur rusak
        [
            'kode_kerusakan' => 'K03',
            'kode_gejala' => 'G07',
            'mb' => 0.6,
            'md' => 0.4
        ],
        [
            'kode_kerusakan' => 'K03',
            'kode_gejala' => 'G08',
            'mb' => 0.8,
            'md' => 0.2
        ],
        [
            'kode_kerusakan' => 'K03',
            'kode_gejala' => 'G06',
            'mb' => 0.7,
            'md' => 0.3
        ],
        [
            'kode_kerusakan' => 'K03',
            'kode_gejala' => 'G05',
            'mb' => 0.9,
            'md' => 0.1
        ],
        [
            'kode_kerusakan' => 'K03',
            'kode_gejala' => 'G12',
            'mb' => 0.8,
            'md' => 0.2
        ],
        // K04 => Cassette/sprocket rusak
        [
            'kode_kerusakan' => 'K04',
            'kode_gejala' => 'G04',
            'mb' => 0.8,
            'md' => 0.2
        ],
        [
            'kode_kerusakan' => 'K04',
            'kode_gejala' => 'G05',
            'mb' => 0.9,
            'md' => 0.1
        ],
        [
            'kode_kerusakan' => 'K04',
            'kode_gejala' => 'G10',
            'mb' => 0.7,
            'md' => 0.3
        ],
        [
            'kode_kerusakan' => 'K04',
            'kode_gejala' => 'G06',
            'mb' => 0.7,
            'md' => 0.3
        ],
        [
            'kode_kerusakan' => 'K04',
            'kode_gejala' => 'G12',
            'mb' => 0.8,
            'md' => 0.2
        ],
        [
            'kode_kerusakan' => 'K04',
            'kode_gejala' => 'G13',
            'mb' => 0.9,
            'md' => 0.1
        ],
        // K05 => Rim rusak
        [
            'kode_kerusakan' => 'K05',
            'kode_gejala' => 'G11',
            'mb' => 0.6,
            'md' => 0.4
        ],
        [
            'kode_kerusakan' => 'K05',
            'kode_gejala' => 'G02',
            'mb' => 0.7,
            'md' => 0.3
        ],
        [
            'kode_kerusakan' => 'K05',
            'kode_gejala' => 'G14',
            'mb' => 0.7,
            'md' => 0.3
        ],
        [
            'kode_kerusakan' => 'K05',
            'kode_gejala' => 'G15',
            'mb' => 0.6,
            'md' => 0.4
        ],
        // K06 => Rantai rusak
        [
            'kode_kerusakan' => 'K06',
            'kode_gejala' => 'G03',
            'mb' => 0.6,
            'md' => 0.4
        ],
        [
            'kode_kerusakan' => 'K06',
            'kode_gejala' => 'G06',
            'mb' => 0.7,
            'md' => 0.3
        ],
        [
            'kode_kerusakan' => 'K06',
            'kode_gejala' => 'G12',
            'mb' => 0.8,
            'md' => 0.2
        ],
        [
            'kode_kerusakan' => 'K06',
            'kode_gejala' => 'G16',
            'mb' => 0.8,
            'md' => 0.2
        ],
        // K07 => Bottom bracket kendor
        [
            'kode_kerusakan' => 'K07',
            'kode_gejala' => 'G06',
            'mb' => 0.7,
            'md' => 0.3
        ],
        [
            'kode_kerusakan' => 'K07',
            'kode_gejala' => 'G10',
            'mb' => 0.7,
            'md' => 0.3
        ],
        [
            'kode_kerusakan' => 'K07',
            'kode_gejala' => 'G17',
            'mb' => 0.9,
            'md' => 0.1
        ],
        [
            'kode_kerusakan' => 'K07',
            'kode_gejala' => 'G18',
            'mb' => 0.7,
            'md' => 0.3
        ],
        [
            'kode_kerusakan' => 'K07',
            'kode_gejala' => 'G19',
            'mb' => 0.8,
            'md' => 0.2
        ],
        // K08 => Crankset rusak
        
        [
            'kode_kerusakan' => 'K08',
            'kode_gejala' => 'G06',
            'mb' => 0.7,
            'md' => 0.3
        ],
        [
            'kode_kerusakan' => 'K08',
            'kode_gejala' => 'G10',
            'mb' => 0.7,
            'md' => 0.3
        ],
        [
            'kode_kerusakan' => 'K08',
            'kode_gejala' => 'G13',
            'mb' => 0.9,
            'md' => 0.1
        ],
        [
            'kode_kerusakan' => 'K08',
            'kode_gejala' => 'G17',
            'mb' => 0.9,
            'md' => 0.1
        ],
        [
            'kode_kerusakan' => 'K08',
            'kode_gejala' => 'G19',
            'mb' => 0.8,
            'md' => 0.2
        ],
        [
            'kode_kerusakan' => 'K08',
            'kode_gejala' => 'G20',
            'mb' => 0.7,
            'md' => 0.3
        ],
        // K09 => Caliper rem rusak
        [
            'kode_kerusakan' => 'K09',
            'kode_gejala' => 'G01',
            'mb' => 0.8,
            'md' => 0.2
        ],
        [
            'kode_kerusakan' => 'K09',
            'kode_gejala' => 'G21',
            'mb' => 0.6,
            'md' => 0.4
        ],
        [
            'kode_kerusakan' => 'K09',
            'kode_gejala' => 'G22',
            'mb' => 0.8,
            'md' => 0.2
        ],
        [
            'kode_kerusakan' => 'K09',
            'kode_gejala' => 'G23',
            'mb' => 0.7,
            'md' => 0.3
        ],
        [
            'kode_kerusakan' => 'K09',
            'kode_gejala' => 'G29',
            'mb' => 0.8,
            'md' => 0.2
        ],
        // K10 => Tuas rem rusak
        [
            'kode_kerusakan' => 'K10',
            'kode_gejala' => 'G23',
            'mb' => 0.7,
            'md' => 0.3
        ],
        [
            'kode_kerusakan' => 'K10',
            'kode_gejala' => 'G24',
            'mb' => 0.6,
            'md' => 0.4
        ],
        [
            'kode_kerusakan' => 'K10',
            'kode_gejala' => 'G25',
            'mb' => 0.9,
            'md' => 0.1
        ],
        // K11 => Shifter rusak
        [
            'kode_kerusakan' => 'K11',
            'kode_gejala' => 'G04',
            'mb' => 0.8,
            'md' => 0.2
        ],
        [
            'kode_kerusakan' => 'K11',
            'kode_gejala' => 'G07',
            'mb' => 0.6,
            'md' => 0.4
        ],
        [
            'kode_kerusakan' => 'K10',
            'kode_gejala' => 'G24',
            'mb' => 0.6,
            'md' => 0.4
        ],
        [
            'kode_kerusakan' => 'K10',
            'kode_gejala' => 'G25',
            'mb' => 0.9,
            'md' => 0.1
        ],
        // K12 => Headset rusak
        [
            'kode_kerusakan' => 'K12',
            'kode_gejala' => 'G11',
            'mb' => 0.6,
            'md' => 0.4
        ],
        [
            'kode_kerusakan' => 'K12',
            'kode_gejala' => 'G14',
            'mb' => 0.7,
            'md' => 0.3
        ],
        [
            'kode_kerusakan' => 'K12',
            'kode_gejala' => 'G26',
            'mb' => 0.8,
            'md' => 0.2
        ],
        [
            'kode_kerusakan' => 'K12',
            'kode_gejala' => 'G27',
            'mb' => 0.7,
            'md' => 0.3
        ],
        // K13 => Rear shock rusak
        [
            'kode_kerusakan' => 'K13',
            'kode_gejala' => 'G01',
            'mb' => 0.8,
            'md' => 0.2
        ],
        [
            'kode_kerusakan' => 'K13',
            'kode_gejala' => 'G28',
            'mb' => 0.9,
            'md' => 0.1
        ],
        [
            'kode_kerusakan' => 'K13',
            'kode_gejala' => 'G29',
            'mb' => 0.8,
            'md' => 0.2
        ],
        [
            'kode_kerusakan' => 'K13',
            'kode_gejala' => 'G30',
            'mb' => 0.7,
            'md' => 0.3
        ],
        // K14 => Suspension fork
        [
            'kode_kerusakan' => 'K14',
            'kode_gejala' => 'G01',
            'mb' => 0.8,
            'md' => 0.2
        ],
        [
            'kode_kerusakan' => 'K14',
            'kode_gejala' => 'G28',
            'mb' => 0.9,
            'md' => 0.1
        ],
        [
            'kode_kerusakan' => 'K14',
            'kode_gejala' => 'G29',
            'mb' => 0.8,
            'md' => 0.2
        ],
        [
            'kode_kerusakan' => 'K14',
            'kode_gejala' => 'G31',
            'mb' => 0.6,
            'md' => 0.4
        ],
        // K15 => Kabel shifter
        [
            'kode_kerusakan' => 'K15',
            'kode_gejala' => 'G04',
            'mb' => 0.8,
            'md' => 0.2
        ],
        [
            'kode_kerusakan' => 'K15',
            'kode_gejala' => 'G07',
            'mb' => 0.6,
            'md' => 0.4
        ],
        [
            'kode_kerusakan' => 'K15',
            'kode_gejala' => 'G09',
            'mb' => 0.9,
            'md' => 0.1
        ],
        [
            'kode_kerusakan' => 'K15',
            'kode_gejala' => 'G24',
            'mb' => 0.6,
            'md' => 0.4
        ],
        [
            'kode_kerusakan' => 'K15',
            'kode_gejala' => 'G32',
            'mb' => 0.8,
            'md' => 0.2
        ],
        [
            'kode_kerusakan' => 'K15',
            'kode_gejala' => 'G33',
            'mb' => 0.9,
            'md' => 0.1
        ],
        // K16 => Kabel rem rusak
        [
            'kode_kerusakan' => 'K16',
            'kode_gejala' => 'G09',
            'mb' => 0.9,
            'md' => 0.1
        ],
        [
            'kode_kerusakan' => 'K16',
            'kode_gejala' => 'G23',
            'mb' => 0.7,
            'md' => 0.3
        ],
        [
            'kode_kerusakan' => 'K16',
            'kode_gejala' => 'G24',
            'mb' => 0.6,
            'md' => 0.4
        ],
        [
            'kode_kerusakan' => 'K16',
            'kode_gejala' => 'G25',
            'mb' => 0.9,
            'md' => 0.1
        ],
        [
            'kode_kerusakan' => 'K16',
            'kode_gejala' => 'G32',
            'mb' => 0.8,
            'md' => 0.2
        ],
        [
            'kode_kerusakan' => 'K16',
            'kode_gejala' => 'G33',
            'mb' => 0.9,
            'md' => 0.1
        ],
        // K17 => Pedal rusak
        [
            'kode_kerusakan' => 'K17',
            'kode_gejala' => 'G17',
            'mb' => 0.9,
            'md' => 0.1
        ],
        [
            'kode_kerusakan' => 'K17',
            'kode_gejala' => 'G19',
            'mb' => 0.8,
            'md' => 0.2
        ],
        [
            'kode_kerusakan' => 'K17',
            'kode_gejala' => 'G34',
            'mb' => 0.7,
            'md' => 0.3
        ],
    ];
    
        return $rule;
    }
}
