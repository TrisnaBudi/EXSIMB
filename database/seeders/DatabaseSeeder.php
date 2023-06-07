<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Gejala;
use App\Models\Keputusan;
use App\Models\KondisiUser;
use App\Models\Kerusakan;
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
        \App\Models\User::factory(3)->create();
        // Artikel::factory(4)->create();

        \App\Models\User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('password'),
        ]);        

        $keputusan = new Keputusan();
        $gejala = new Gejala();
        $kerusakan = new Kerusakan();
        $kondisi = new KondisiUser();


        Keputusan::insert($keputusan->fillTable());
        Gejala::insert($gejala->fillTable());
        Kerusakan::insert($kerusakan->fillTable());
        KondisiUser::insert($kondisi->fillTable());
    }
}
