@extends('layouts.main')

@section('header')
    Pengajuan Surat Keterangan Tidak Mampu (SKTM)
@endsection

@section('page-content')
    <div class="row justify-content-center mt-3">
        <div class="col-md-12">
            <div class="card border-0 shadow-lg">
                <div class="card-header text-white" style="background-color: #042542">
                    <h3 class="text-center">{{ __('Formulir Pengajuan SKTM') }}</h3>
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('sktm.submit') }}" enctype="multipart/form-data">
                        @csrf

                        <!-- Data Pemohon -->
                        <div class="form-group row">
                            <label for="name" class="col-sm-3 col-form-label text-sm-end">Nama Lengkap</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="name" name="name"
                                    placeholder="Masukkan nama lengkap Anda" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="ktp" class="col-sm-3 col-form-label text-sm-end">Nomor KTP</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="ktp" name="ktp"
                                    placeholder="Masukkan nomor KTP Anda" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="address" class="col-sm-3 col-form-label text-sm-end">Alamat Lengkap</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" id="address" name="address" rows="3" placeholder="Masukkan alamat lengkap Anda"
                                    required></textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone" class="col-sm-3 col-form-label text-sm-end">Nomor Telepon/HP</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="phone" name="phone"
                                    placeholder="Masukkan nomor telepon/HP Anda" required>
                            </div>
                        </div>

                        <!-- Dokumen Pendukung -->
                        <div class="form-group row">
                            <label for="ktp_scan" class="col-sm-3 col-form-label text-sm-end">Scan KTP</label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control-file" id="ktp_scan" name="ktp_scan" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="kk_scan" class="col-sm-3 col-form-label text-sm-end">Scan Kartu Keluarga</label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control-file" id="kk_scan" name="kk_scan" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="photo" class="col-sm-3 col-form-label text-sm-end">Pas Foto 4x6</label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control-file" id="photo" name="photo" required>
                            </div>
                        </div>

                        <div class="col-sm-9 offset-sm-3">
                            <p> *Harap datang ke RW bilamana surat sudah jadi untuk tanda tangan</p>
                        </div>


                        <!-- Persetujuan -->
                        <div class="form-group row">
                            <div class="col-sm-9 offset-sm-3">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="agreement" name="agreement"
                                        required>
                                    <label class="form-check-label" for="agreement">Saya menyetujui syarat dan ketentuan
                                        yang berlaku.</label>
                                </div>
                            </div>
                        </div>

                        <!-- Tombol Ajukan -->
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block"
                                style="background-color: #042542; border-color: #ffffff; border-radius: 20px;">Ajukan
                                SKTM</button>
                        </div>
                    </form>
                </div>
            </div>
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
            border-radius: 0;
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
