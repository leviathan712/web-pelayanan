<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function home()
    {
        return view('page.home');
    }

    public function skck()
    {
        return view('page.skck');
    }

    public function sktm()
    {
        return view('page.sktm');
    }

    public function submitSkck(Request $request)
    {
        // Validasi data yang diterima dari formulir
        $request->validate([
            'name' => 'required|string|max:255',
            'ktp' => 'required|string|max:16',
            'address' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'email' => 'nullable|email|max:255',
            'purpose' => 'required|string|max:255',
            'ktp_scan' => 'required|file|mimes:jpeg,png,pdf|max:2048',
            'kk_scan' => 'required|file|mimes:jpeg,png,pdf|max:2048',
            'photo' => 'required|file|mimes:jpeg,png|max:2048',
            'submission_date' => 'required|date',
            'agreement' => 'accepted'
        ]);

        // Simpan dokumen yang diupload
        $ktpPath = $request->file('ktp_scan')->store('ktp_scans', 'public');
        $kkPath = $request->file('kk_scan')->store('kk_scans', 'public');
        $photoPath = $request->file('photo')->store('photos', 'public');

        // Simpan data pengajuan ke database (sesuaikan dengan model dan tabel yang digunakan)
        // Contoh:
        // SkckApplication::create([
        //     'name' => $request->name,
        //     'ktp' => $request->ktp,
        //     'address' => $request->address,
        //     'phone' => $request->phone,
        //     'email' => $request->email,
        //     'purpose' => $request->purpose,
        //     'ktp_scan' => $ktpPath,
        //     'kk_scan' => $kkPath,
        //     'photo' => $photoPath,
        //     'submission_date' => $request->submission_date,
        // ]);

        // Berikan notifikasi sukses kepada pengguna
        return redirect()->route('skck')->with('status', 'Pengajuan SKCK Anda telah berhasil dikirim!');
    }
    public function storeSKTM(Request $request)
    {
        // Validasi data yang diinputkan
        $request->validate([
            'name' => 'required|string|max:255',
            'ktp' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'ktp_scan' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'kk_scan' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'signature' => 'required|string|max:255',
            'agreement' => 'required',
        ]);

        // Proses penyimpanan data pengajuan SKTM ke dalam database

        // Redirect ke halaman yang sesuai setelah pengajuan berhasil
        return redirect()->route('sktm')->with('status', 'Pengajuan SKTM berhasil diajukan.');
    }
}
