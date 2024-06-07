@extends('layouts.main')

@section('page-content')
    <div class="row justify-content-center mt-3">
        <div class="col-md-12">
            <div class="card border-0 shadow-lg">
                <div class="card-header bg-primary text-white text-center">
                    <h2 style="font-family: 'Poppins', sans-serif;">Selamat Datang di Dashboard Pelayanan RW. 09</h2>
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
                                    <h5 class="card-title">Kegiatan Mendatang</h5>
                                    <p class="card-text">Kegiatan Terjadwal</p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-white">Lihat jadwal kegiatan RW.</small>
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
                            <a href="#" class="btn btn-primary btn-block">
                                <i class="fas fa-file-alt"></i> Pengajuan Surat
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="#" class="btn btn-success btn-block">
                                <i class="fas fa-bullhorn"></i> Pengaduan Warga
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="#" class="btn text-white btn-block" style="background-color: gold">
                                <i class="fas fa-calendar-alt"></i> Jadwal Kegiatan
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="#" class="btn btn-danger btn-block">
                                <i class="fas fa-chart-line"></i> Laporan Keuangan
                            </a>
                        </div>
                    </div>

                    <div class="row mt-4 mb-3">
                        <div class="col-12">
                            <div class="card direct-chat direct-chat-primary"
                                style="background: linear-gradient(120deg, #2980b9, #6dd5fa); border-radius: 20px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                                <div class="card-header ui-sortable-handle"
                                    style="background-color: transparent; border-bottom: none;">
                                    <h3 class="card-title" style="color: #fff;">Forum Komunikasi Warga</h3>
                                    <div class="card-tools">
                                        <span class="badge badge-light" style="color: #2980b9;">3 New Messages</span>
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                            style="color: #fff;">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                        <button type="button" class="btn btn-tool" title="Contacts"
                                            data-widget="chat-pane-toggle" style="color: #fff;">
                                            <i class="fas fa-comments"></i>
                                        </button>
                                        <button type="button" class="btn btn-tool" data-card-widget="remove"
                                            style="color: #fff;">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body" style="background-color: rgba(255, 255, 255, 0.8); border-radius: 20px;">
                                    <div class="direct-chat-messages" style="padding: 10px;">
                                        <!-- Your chat messages -->
                                    </div>
                                    <div class="direct-chat-contacts" style="padding: 10px;">
                                        <!-- Contacts -->
                                    </div>
                                </div>
                                <div class="card-footer" style="background-color: transparent;">
                                    <form action="#" method="post">
                                        <div class="input-group" style="border: none; border-radius: 20px;">
                                            <input type="text" name="message" placeholder="Type Message ..."
                                                class="form-control"
                                                style=" border: none; border-radius: 20px; background-color: rgba(255, 255, 255, 0.9);">
                                            <span class="input-group-append">
                                                <button type="button" class="btn btn-light rounded-circle"
                                                    style="box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
                                                    <i class="fas fa-paper-plane" style="color: #2980b9;"></i>
                                                </button>
                                            </span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4 mb-3">
                        <!-- Charts -->
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
                        <div class="col-lg-4 col-md-12">
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
                                            <button type="button" class="btn btn-success btn-sm dropdown-toggle"
                                                data-toggle="dropdown" data-offset="-52">
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.10.0/main.min.js"></script>
@endsection
