<?php

namespace App\Http\Controllers;

use App\Models\Keputusan;
use App\Http\Requests\StoreKeputusanRequest;
use App\Http\Requests\UpdateKeputusanRequest;

class KeputusanController extends Controller
{
    public function index()
    {
        return view('admin.keputusan.keputusan', [
            'keputusan' => Keputusan::all()
        ]);
    }

    public function create()
    {
        //
    }


    public function store(StoreKeputusanRequest $request)
    {
        $valid = $request->validate([
            'kode_gejala' => 'required',
            'kode_kerusakan' => 'required',
            'mb' => 'required',
            'md' => 'required'
        ]);
        Keputusan::create($valid);
        return redirect()->route('keputusan.index')->with('pesan', '<div class="alert alert-success p-3 mt-3" role="alert">
        Keputusan telah ditambahkan
        </div>');
    }

    public function show(Keputusan $keputusan)
    {
        //
    }

    public function edit(Keputusan $keputusan)
    {
        //
    }

    public function update(UpdateKeputusanRequest $request, Keputusan $keputusan)
    {
        $valid = $request->validate([
            'kode_gejala' => 'required',
            'kode_kerusakan' => 'required',
            'mb' => 'required',
            'md' => 'required'
        ]);
        $keputusan->update($valid);
        return redirect()->route('keputusan.index')->with('pesan', '<div class="alert alert-info p-3 mt-3" role="alert">
        Keputusan telah diperbarui
        </div>');
    }

    public function destroy(Keputusan $keputusan)
    {
        $keputusan->delete();
        return redirect()->route('keputusan.index')->with('pesan', '<div class="alert alert-danger p-3 mt-3" role="alert">
        Keputusan telah dihapus
        </div>');
    }
}
