<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Gejala;
use App\Models\Keputusan;
use App\Models\KondisiUser;
use App\Models\Kerusakan;
use App\Models\Perawatan;
use Illuminate\Database\Seeder;
use PhpParser\Node\Expr\New_;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory()->create([
            'name' => 'Trisna',
            'email' => 'admin@example.com',
            'password' => bcrypt('password'),
        ]);        

        $keputusan = new Keputusan();
        $gejala = new Gejala();
        $kerusakan = new Kerusakan();
        $kondisi = new KondisiUser();
        $perawatan = new Perawatan();


        Keputusan::insert($keputusan->fillTable());
        Gejala::insert($gejala->fillTable());
        Kerusakan::insert($kerusakan->fillTable());
        KondisiUser::insert($kondisi->fillTable());
        Perawatan::insert($perawatan->fillTable());
    }
}
