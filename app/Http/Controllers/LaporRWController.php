<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporRWController extends Controller
{
    /**
     * Menampilkan halaman formulir laporan RW.
     *
     * @return \Illuminate\View\View
     */
    public function lapor()
    {
        return view('page.lapor');
    }

    /**
     * Menyimpan data laporan RW yang diajukan.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        // Validasi data yang diinputkan
        $request->validate([
            'name' => 'required|string|max:255',
            'ktp' => 'required|string|max:16',
            'address' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'email' => 'nullable|email|max:255',
            'report' => 'required|string|max:1000',
            'ktp_scan' => 'required|file|mimes:jpeg,png,pdf|max:2048',
            'photo' => 'nullable|file|mimes:jpeg,png|max:2048',
            'submission_date' => 'required|date',
            'agreement' => 'accepted'
        ]);

        // Simpan dokumen yang diupload
        $ktpPath = $request->file('ktp_scan')->store('ktp_scans', 'public');
        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('photos', 'public');
        } else {
            $photoPath = null;
        }

        // Simpan data laporan ke database (sesuaikan dengan model dan tabel yang digunakan)
        // Contoh:
        // LaporRW::create([
        //     'name' => $request->name,
        //     'ktp' => $request->ktp,
        //     'address' => $request->address,
        //     'phone' => $request->phone,
        //     'email' => $request->email,
        //     'report' => $request->report,
        //     'ktp_scan' => $ktpPath,
        //     'photo' => $photoPath,
        //     'submission_date' => $request->submission_date,
        // ]);

        // Berikan notifikasi sukses kepada pengguna
        return redirect()->route('lapor')->with('status', 'Laporan RW Anda telah berhasil dikirim!');
    }
}
