<?php

namespace App\Http\Controllers;

use App\Models\Kerusakan;
use App\Http\Requests\StoreKerusakanRequest;
use App\Http\Requests\UpdateKerusakanRequest;

class KerusakanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.kerusakan.kerusakan', [
            'kerusakan' => Kerusakan::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreKerusakanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreKerusakanRequest $request)
    {
        $valid = $request->validate([
            'kode_kerusakan' => 'required|unique:kerusakan,kode_kerusakan',
            'kerusakan' => 'required'
        ]);
        Kerusakan::create($valid);
        return redirect()->route('kerusakan.index')->with('pesan', '<div class="alert alert-success p-3 mt-3" role="alert">
        Daftar kerusakan telah ditambahkan
        </div>');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kerusakan  $Kerusakan
     * @return \Illuminate\Http\Response
     */
    public function show(Kerusakan $Kerusakan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kerusakan  $Kerusakan
     * @return \Illuminate\Http\Response
     */
    public function edit(Kerusakan $Kerusakan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateKerusakanRequest  $request
     * @param  \App\Models\Kerusakan  $Kerusakan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateKerusakanRequest $request, $Kerusakan)
    {
        $valid = $request->validate([
            'kerusakan' => 'required'
        ]);
        $status = Kerusakan::find($Kerusakan)->update($valid);
        if ($status) {
            return redirect()->route('kerusakan.index')->with('pesan', '<div class="alert alert-success p-3 mt-3" role="alert">Daftar kerusakan telah diupdate</div>');
        }
        return redirect()->route('kerusakan.index')->with('pesan', '<div class="alert alert-warning p-3 mt-3" role="alert">Daftar kerusakan gagal diupdate</div>');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kerusakan  $Kerusakan
     * @return \Illuminate\Http\Response
     */
    public function destroy($Kerusakan)
    {
        // dd($Kerusakan);
        Kerusakan::find($Kerusakan)->delete();
        return redirect()->route('kerusakan.index')->with('pesan', '<div class="alert alert-success p-3 mt-3" role="alert">
        Daftar kerusakan telah dihapus
        </div>');
    }
}
