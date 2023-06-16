<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perawatan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;


class PerawatanController extends Controller
{
    public function index()
    {
        $perawatan = Perawatan::all();
        return view('info', compact('perawatan'));

    }
    public function show($id)
    {
        $perawatan = Perawatan::find($id);

        return response()->json($perawatan);
    }
    
}
