<?php

use App\Http\Controllers\DiagnosaController;
use App\Http\Controllers\GejalaController;
use App\Http\Controllers\KerusakanController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ResetPasswordController;
use App\Models\Diagnosa;
use App\Models\Kerusakan;
use App\Models\KondisiUser;
use App\Models\Gejala;
use App\Models\User;
use Illuminate\Support\Facades\Route;


    Route::get('/', function () {
        return view('landing');
    });


Route::middleware('auth')->group(function () {
    Route::prefix('/dashboard')->group(function () {
        Route::get('/', [AdminController::class, 'dashboard'])->name('admin.dashboard');

        Route::prefix('/admin')->group(function () {
            Route::get('/', [AdminController::class, 'index'])->name('admin.list_admin'); // Menampilkan daftar admin
            Route::get('/create', [AdminController::class, 'create'])->name('admin.add_admin'); // Menampilkan form tambah admin
            Route::post('/', [AdminController::class, 'store'])->name('admin.store'); // Menyimpan data admin baru
            Route::get('/{id}/edit', [AdminController::class, 'edit'])->name('admin.edit'); // Menampilkan form edit admin
            Route::put('/{id}', [AdminController::class, 'update'])->name('admin.update'); // Menyimpan perubahan data admin
            Route::delete('/{id}', [AdminController::class, 'destroy'])->name('admin.destroy'); // Menghapus admin
        });

        Route::prefix('/admin')->group(function () {
            Route::get('/{id}/reset-password', [ResetPasswordController::class, 'showResetForm'])->name('admin.show_reset_form'); // Menampilkan form reset password admin
            Route::put('/{id}/reset-password', [ResetPasswordController::class, 'reset'])->name('admin.reset_password'); // Menyimpan perubahan password admin
        });
    });

        

    Route::post('/logout', 'Auth\LoginController@logout')->name('logout');


        Route::get('/home', function () {
            return redirect('/dashboard');
        });

    Route::resource('/gejala', GejalaController::class); // CRUD Gejala
    Route::resource('/kerusakan', KerusakanController::class); // CRUD Kerusakan
    Route::resource('/spk', DiagnosaController::class)->only('index'); // Menampilkan halaman diagnosa

    Route::get('/spk/result/{diagnosa_id}', [DiagnosaController::class, 'diagnosaResult'])->name('spk.result'); // Menampilkan hasil diagnosa
})->name('admin.dashboard');

Route::get('/form', function () {
    $data = [
        'gejala' => Gejala::all(),
        'kondisi_user' => KondisiUser::all()
    ];
    return view('form', $data);
});

Route::get('/form-faq', function () {
    $data = [
        'gejala' => Gejala::all(),
        'kondisi_user' => KondisiUser::all()
    ];
    return view('faq', $data);
})->name('cl.form'); // Menampilkan form FAQ

Route::resource('/spk', DiagnosaController::class); // CRUD Diagnosa
Route::get('/spk/result/{diagnosa_id}', [DiagnosaController::class, 'diagnosaResult'])->name('spk.result'); // Menampilkan hasil diagnosa

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
