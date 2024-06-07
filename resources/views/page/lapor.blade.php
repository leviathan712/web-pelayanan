@extends('layouts.main')

@section('header')
    <div class="container text-center mt-5">
        <h1 style="font-family: 'Poppins', sans-serif;">Lapor RW</h1>
        <p class="lead" style="font-family: 'Poppins', sans-serif;">Ajukan laporan Anda kepada RW dengan cepat dan mudah.</p>
    </div>
@endsection

@section('page-content')
    <div class="row justify-content-center mt-3">
        <div class="col-md-7 col-sm-12 mb-3"> <!-- Formulir laporan -->
            <div class="card border-0 shadow-lg h-100">
                <div class="card-header bg-primary text-white text-center">
                    <h2 style="font-family: 'Poppins', sans-serif;">Lapor RW</h2>
                </div>
                <div class="card-body p-4">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{ route('lapor.submit') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="name" class="form-label">Nama</label>
                                <input type="text" name="name" class="form-control" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="ktp" class="form-label">No. KTP</label>
                                <input type="text" name="ktp" class="form-control" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="address" class="form-label">Alamat</label>
                                <input type="text" name="address" class="form-control" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="phone" class="form-label">No. Telepon</label>
                                <input type="text" name="phone" class="form-control" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="email" class="form-control">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="submission_date" class="form-label">Tanggal Pengajuan</label>
                                <input type="date" name="submission_date" class="form-control" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="report" class="form-label">Laporan</label>
                            <textarea name="report" class="form-control" rows="3" required></textarea> <!-- Kurangi rows untuk membuatnya lebih ramping -->
                        </div>
                        <div class="mb-3">
                            <label for="photo" class="form-label">Foto (opsional)</label>
                            <input type="file" name="photo" class="form-control-file">
                        </div>
                        <div class="mb-3">
                            <p>*Harap Lapor RT setempat  dahulu bilamana terjadi hal mendesak</p>
                        </div>

                        <div class="form-check mb-3">
                            <input type="checkbox" name="agreement" class="form-check-input" required>
                            <label class="form-check-label" for="agreement">Saya setuju dengan ketentuan yang berlaku</label>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary btn-lg">Kirim Laporan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-5 col-sm-12 mb-3"> <!-- Nama-nama RT -->
            <div class="card border-0 shadow-lg h-100">
                <div class="card-header bg-primary text-white text-center">
                    <h2 style="font-family: 'Poppins', sans-serif;">Nama-nama RT</h2>
                </div>
                <div class="card-body p-4">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">RT 1</li>
                        <li class="list-group-item">RT 2</li>
                        <li class="list-group-item">RT 3</li>
                        <li class="list-group-item">RT 4</li>
                        <li class="list-group-item">RT 5</li>
                        <li class="list-group-item">RT 6</li>
                        <li class="list-group-item">RT 7</li>
                        <li class="list-group-item">RT 8</li>
                        <li class="list-group-item">RT 9</li>
                        <li class="list-group-item">RT 10</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
