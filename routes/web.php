<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use Illuminate\Http\Request;

// 1. Route dengan closure (inline function)
Route::get('/', function () {
    return view('welcome');
});

// 2. Route dengan parameter
Route::get('/halo/{nama}', function (string $nama) {
    return "Halo, {$nama}! Selamat datang di praktikum Laravel.";
});

// 3. Route dengan parameter opsional
Route::get('/kampus/{nama?}', function (string $nama = 'Universitas') {
    return "Selamat datang di {$nama}";
});

// ==========================================
// ROUTE KHUSUS / FORM (Wajib di atas route parameter)
// ==========================================
Route::get('/mahasiswa/create/form', [MahasiswaController::class, 'create']);

// Route index mahasiswa yang sudah dipasangi middleware log.request
Route::get('/mahasiswa', [MahasiswaController::class, 'index'])
    ->middleware('log.request');

// Route POST untuk memproses data form mahasiswa
Route::post('/mahasiswa', function (Request $request) {
    return response()->json([
        'message' => 'Data mahasiswa berhasil diterima',
        'data' => [
            'nim' => $request->input('nim'),
            'nama' => $request->input('nama'),
            'jurusan' => $request->input('jurusan'),
        ]
    ]);
});

// ==========================================
// ROUTE DENGAN PARAMETER (Ditarik ke bawah agar tidak konflik)
// ==========================================
// Route detail mahasiswa berdasarkan NIM
Route::get('/mahasiswa/{nim}', [MahasiswaController::class, 'show']);

// Route dengan multiple parameter
Route::get('/mahasiswa/{nim}/{nama}', function (string $nim, string $nama) {
    return "NIM: {$nim} | Nama: {$nama}";
});