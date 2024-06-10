@extends('layouts.main')

@section('page-content')
    <div class="row justify-content-center mt-3">
        <div class="col-md-12">
            <div class="card border-0 shadow-lg">
                <div
                    class="card-header bg-primary text-white text-center position-relative d-flex align-items-center justify-content-center">
                    <h2 style="font-family: 'Poppins', sans-serif; flex-grow: 1;">Selamat Datang di Dashboard Pelayanan RW. 09</h2>
                    <div id="status" class="status-card d-flex align-items-center justify-content-center">
                        <span class="status-indicator {{ $status_online->value == 1 ? 'online' : 'offline' }}" id="status-indicator"></span>
                        <span class="status-text" id="status-text">
                            @if ($status_online->value == 1)
                                Online
                            @else
                                Offline
                            @endif
                        </span>
                    </div>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row mt-4 mb-3">
                        <!-- Info Cards -->
                        <div class="col-md-3">
                            <div class="card bg-gradient-primary text-white mb-3">
                                <div class="card-body">
                                    <h5 class="card-title">Pengajuan Surat</h5>
                                    <p class="card-text">15 Pengajuan Baru</p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-white">Lihat detail pengajuan surat terbaru.</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card bg-gradient-success text-white mb-3">
                                <div class="card-body">
                                    <h5 class="card-title">Lapor RW</h5>
                                    <p class="card-text">2 Pengaduan Terselesaikan</p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-white">Cek pengaduan yang sudah ditangani.</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card bg-gradient-warning text-white mb-3">
                                <div class="card-body">
                                    <h5 class="card-title">Kontak RT</h5>
                                    <p class="card-text">Kontak RT 01-010</p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-white">Lihat Kontak RT.</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card bg-gradient-danger text-white mb-3">
                                <div class="card-body">
                                    <h5 class="card-title">Laporan Keuangan</h5>
                                    <p class="card-text">Update Terbaru</p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-white">Lihat laporan keuangan terbaru.</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4 mb-3">
                        <!-- Quick Links -->
                        <div class="col-md-3">
                            <a href="#" class="btn btn-primary btn-block" data-toggle="modal" data-target="#pengajuanModal">
                                <i class="fas fa-file-alt"></i> Pengajuan Surat
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="{{ route('lapor') }}" class="btn btn-success btn-block">
                                <i class="fas fa-bullhorn"></i> Pengaduan Warga
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="#" class="btn text-white btn-block" style="background-color: gold">
                                <i class="fas fa-address-book"></i> Kontak RT
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="#" class="btn btn-danger btn-block">
                                <i class="fas fa-chart-line"></i> Laporan Keuangan
                            </a>
                        </div>
                    </div>

                    <div class="row mt-4 mb-3">
                        <!-- Table for SKTM and SKCK Status -->
                        <div class="col-12">
                            <div class="card" style="border-radius: 20px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                                <div class="card-header" style="background-color: #2980b9; color: white; border-bottom: none; border-radius: 20px 20px 0 0;">
                                    <h3 class="card-title" style="color: #fff;">Status Pengajuan Surat</h3>
                                </div>
                                <div class="card-body" style="background-color: rgba(255, 255, 255, 0.8); border-radius: 0 0 20px 20px;">
                                    <table class="table table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Jenis Surat</th>
                                                <th>Nama Pengaju</th>
                                                <th>Tanggal Pengajuan</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        {{-- <tbody>
                                            @foreach ($pengajuanSurat as $index => $pengajuan)
                                                <tr>
                                                    <td>{{ $index + 1 }}</td>
                                                    <td>{{ $pengajuan->jenis_surat }}</td>
                                                    <td>{{ $pengajuan->nama_pengaju }}</td>
                                                    <td>{{ $pengajuan->tanggal_pengajuan }}</td>
                                                    <td>
                                                        <span class="badge badge-{{ $pengajuan->status == 'Diterima' ? 'success' : ($pengajuan->status == 'Ditolak' ? 'danger' : 'warning') }}">
                                                            {{ $pengajuan->status }}
                                                        </span>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody> --}}
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4 mb-3">
                        <!-- Charts -->
                        @if (auth()->user()->type == 'admin')
                            <div class="col-lg-4 col-md-12">
                                <div class="card h-100">
                                    <div class="card-header">Statistik Pengajuan Surat</div>
                                    <div class="card-body">
                                        <canvas style="margin-top: 50px" id="pengajuanChart" width="400" height="200"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12">
                                <div class="card h-100">
                                    <div class="card-header">Statistik Pengaduan Warga</div>
                                    <div class="card-body">
                                        <canvas id="pengaduanChart" style="margin-top: 50px"></canvas>
                                    </div>
                                </div>
                            </div>
                        @endif
                        <div class="col-lg-{{ auth()->user()->type == 'admin' ? '4' : '6 text-center' }} col-md-12">
                            <div class="card h-100">
                                <div class="card-header border-0 ui-sortable-handle">
                                    <h3 class="card-title">
                                        <i class="far fa-calendar-alt"></i>
                                        Calendar
                                    </h3>
                                    <!-- tools card -->
                                    <div class="card-tools">
                                        <!-- button with a dropdown -->
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown" data-offset="-52">
                                                <i class="fas fa-bars"></i>
                                            </button>
                                            <div class="dropdown-menu" role="menu">
                                                <a href="#" class="dropdown-item">Add new event</a>
                                                <a href="#" class="dropdown-item">Clear events</a>
                                                <div class="dropdown-divider"></div>
                                                <a href="#" class="dropdown-item">View calendar</a>
                                            </div>
                                        </div>
                                        <button type="button" class="btn btn-success btn-sm" data-card-widget="collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                        <button type="button" class="btn btn-success btn-sm" data-card-widget="remove">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                    <!-- /. tools -->
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body pt-0">
                                    <!--The calendar -->
                                    <div id="calendar"></div>
                                </div>
                                <!-- /.card-body -->
                            </div>
                        </div>
                    </div>
                    

                    <div class="row mt-4">
                        <div class="col-md-12 text-center">
                            <p>{{ __('You are logged in!') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <!-- Modal for Pengajuan Surat -->
    <div class="modal fade" id="pengajuanModal" tabindex="-1" role="dialog" aria-labelledby="pengajuanModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="pengajuanModalLabel">Layanan Pengajuan Surat</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action">SKCK</a>
                        <a href="#" class="list-group-item list-group-item-action">SKTM</a>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection



@section('page-js')
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.14/index.global.min.js'></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        var ctx1 = document.getElementById('pengajuanChart').getContext('2d');
        var pengajuanChart = new Chart(ctx1, {
            type: 'bar',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun'],
                datasets: [{
                    label: 'Pengajuan Surat',
                    data: [12, 19, 3, 5, 2, 3],
                    backgroundColor: '#3498db',
                    borderColor: '#2980b9',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });

        var ctx2 = document.getElementById('pengaduanChart').getContext('2d');
        var pengaduanChart = new Chart(ctx2, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun'],
                datasets: [{
                    label: 'Pengaduan Warga',
                    data: [5, 10, 5, 2, 20, 30],
                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                    borderColor: 'rgba(255, 99, 132, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');

            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth', // Tampilkan dalam mode bulan
                events: [
                    // Tambahkan acara-acara di sini, misalnya:
                    {
                        title: 'Acara Penting',
                        start: '2024-06-01' // Tanggal mulai
                    },
                    {
                        title: 'Acara Lain',
                        start: '2024-06-05', // Tanggal mulai
                        end: '2024-06-07' // Tanggal selesai
                    }
                ]
            });

            calendar.render();
        });
    </script>

    <style>
        .status-indicator {
            display: inline-block;
            width: 15px;
            height: 15px;
            border-radius: 50%;
            margin-right: 5px;
        }

        .online {
            background-color: green;
        }

        .offline {
            background-color: red;
        }

        .status-text {
            display: inline-block;
            vertical-align: middle;
            color: white;
        }
    </style>
@endsection
