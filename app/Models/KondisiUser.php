<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KondisiUser extends Model
{
    use HasFactory;
    // protected $table = 'kondisi_users';

    public function fillTable()
    {
        $cf_user = [
            [
                'kondisi' => 'Ya',
                'nilai' => 1,
            ],
            [
                'kondisi' => 'Tidak',
                'nilai' => 0.0,
            ],
        ];
        return $cf_user;
    }
}
