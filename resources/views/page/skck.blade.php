@extends('layouts.main')

@section('header')
    Pengajuan Surat Keterangan Catatan Kepolisian (SKCK)
@endsection

@section('page-content')
    <div class="row justify-content-center mt-3">
        <div class="col-md-12"> <!-- Lebar kolom diperbesar menjadi col-md-10 -->
            <div class="card border-0 shadow-lg">
                <div class="card-header text-white" style="background-color: #042542;">
                    <h3 class="text-center">{{ __('Formulir Pengajuan SKCK') }}</h3>
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('skck.submit') }}" enctype="multipart/form-data">
                        @csrf

                        <!-- Data Pemohon -->
                        <div class="row"> <!-- Menggunakan grid system untuk membagi baris -->
                            <div class="col-md-6"> <!-- Menggunakan kolom setengah lebar -->
                                <div class="form-group">
                                    <label for="name" class="form-label">Nama Lengkap</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="Masukkan nama lengkap Anda" required>
                                </div>

                                <div class="form-group">
                                    <label for="ktp" class="form-label">Nomor KTP</label>
                                    <input type="text" class="form-control" id="ktp" name="ktp"
                                        placeholder="Masukkan nomor KTP Anda" required>
                                </div>

                                <div class="form-group">
                                    <label for="address" class="form-label">Alamat Lengkap</label>
                                    <textarea class="form-control" id="address" name="address" rows="3" placeholder="Masukkan alamat lengkap Anda"
                                        required></textarea>
                                </div>
                            </div>
                            <div class="col-md-6"> <!-- Menggunakan kolom setengah lebar -->
                                <div class="form-group">
                                    <label for="phone" class="form-label">Nomor Telepon/HP</label>
                                    <input type="text" class="form-control" id="phone" name="phone"
                                        placeholder="Masukkan nomor telepon/HP Anda" required>
                                </div>

                                <div class="form-group">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" name="email"
                                        placeholder="Masukkan email Anda">
                                </div>

                                <!-- Tujuan Pengajuan -->
                                <div class="form-group">
                                    <label for="purpose" class="form-label">Tujuan Pengajuan</label>
                                    <input type="text" class="form-control" id="purpose" name="purpose"
                                        placeholder="Masukkan tujuan pengajuan SKCK" required>
                                </div>
                            </div>
                        </div>

                        <!-- Dokumen Pendukung -->
                        <div class="form-group">
                            <label for="ktp_scan" class="form-label">Scan KTP</label>
                            <input type="file" class="form-control-file" id="ktp_scan" name="ktp_scan" required>
                        </div>

                        <div class="form-group">
                            <label for="kk_scan" class="form-label">Scan Kartu Keluarga</label>
                            <input type="file" class="form-control-file" id="kk_scan" name="kk_scan" required>
                        </div>

                        <div class="form-group">
                            <label for="photo" class="form-label">Pas Foto 4x6</label>
                            <input type="file" class="form-control-file" id="photo" name="photo" required>
                        </div>

                        <!-- Tanggal Pengajuan -->
                        <div class="form-group">
                            <label for="submission_date" class="form-label">Tanggal Pengajuan</label>
                            <input type="date" class="form-control" id="submission_date" name="submission_date"
                                required>
                        </div>

                        <!-- Persetujuan dan Tanda Tangan -->
                        <div class="form-group">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="agreement" name="agreement"
                                    required>
                                <label class="form-check-label" for="agreement">Saya menyetujui syarat dan ketentuan
                                    yang berlaku.</label>
                            </div>
                        </div>

                        <!-- Tombol Ajukan -->
                        <div class="form-group" style="margin-top: 20px;">
                            <button type="submit" class="btn btn-primary btn-block"
                                style="background-color: #042542; border-color: #ffff; border-radius: 20px; padding: 15px;">Ajukan
                                SKCK</button>
                        </div>
                    </form>
                </div>
            </div>
            <div style="margin-bottom: 50px;"></div>
        </div>
    </div>
@endsection

@section('page-css')
    <style>
        .card {
            border-radius: 15px;
            border: none;
            overflow: hidden;
        }

        .card-header {
            border-radius: 15px 15px 0 0;
        }

        .form-label {
            font-family: 'Poppins', sans-serif;
            color: #042542;
            font-weight: bold;
        }

        .form-control,
        .form-control-file {
            border-radius: 0.5rem;
            border: 1px solid #ced4da;
        }

        .form-control:focus {
            border-color: #042542;
            box-shadow: 0 0 0 0.2rem rgba(0, 105, 92, 0.25);
        }

        .btn {
            border-radius: 0 .btn {
                border-radius: 0.5rem;
                transition: all 0.3s ease-in-out;
            }

            .btn-primary {
                background-color: #042542;
                border-color: #042542;
            }

            .btn-primary:hover {
                background-color: #042542;
                border-color: #042542;
            }

            .btn-primary:focus {
                background-color: #042542;
                border-color: #042542;
                box-shadow: 0 0 0 0.2rem rgba(0, 105, 92, 0.25);
            }

            .alert {
                margin-top: 10px;
            }
    </style>
@endsection
